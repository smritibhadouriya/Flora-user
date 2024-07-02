<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-image-container {
            height: 300px; /* Set your desired height here */
            overflow: hidden; /* Ensure the image doesn't overflow */
        }
        .product-image-container img {
            width: 100%;
            height: auto;
            object-fit: cover; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <header class="bg-light text-black text-center py-4">
        <h1>Flora's Product</h1>
    </header>

    <?php
    session_start();
    $mongoConnection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $database = "web_practice";
    $collection = "item";

    $filter = [];
    $options = [];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongoConnection->executeQuery("$database.$collection", $query);
    
    foreach ($cursor as $product) {
        echo "<div class='container mt-5'>";
        echo "<div class='row'>";
        echo "<div class='col-md-6'>";
        echo "<div class='product-image-container'>";
        echo "<img src='image/".$product->image_url. "' class='img-fluid'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='col-md-6'>";
        echo "<h2>" . $product->name . "</h2>";
        echo "<p class='h4'>" . $product->description . "</p>";
        echo "<p><strong>Price:</strong> $" . $product->price . "/piece </p>";
?>
        <a href="cart.php?p_id=<?php echo $product->_id; ?>&price=<?php echo $product->price ;?>" class="btn btn-primary">ADD TO CART</a>
<?php
        echo "</div>";
        echo "</div>";
        echo "<hr />";
        echo "</div>";
    }
    ?>

    <footer class="bg-light text-black text-center py-1 mt-5">
        &copy; 2023 FLORA
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
