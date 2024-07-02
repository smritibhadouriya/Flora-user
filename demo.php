<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<?php
session_start();
$pid=$_GET['p_id'];
$price=$_GET['price'];
$email=$_SESSION['email'];
$t=time();
$dte=date("h:i:s d-m-y",$t);
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$collectionName = 'web_practice.item';
$idToFind = new MongoDB\BSON\ObjectID($pid);
$query = new MongoDB\Driver\Query(['_id' => $idToFind]);
$cursor = $manager->executeQuery($collectionName, $query);
$document = current($cursor->toArray());
if ($document) { ?>
    <div class="container">
        <h1>Your Cart</h1>
        <div class="row">
            <div class="col-md-6">
                <!-- Product Image -->
                <img src="image/<?php echo $document->image_url ?>" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <!-- Order Form -->
                <form action="cardprocess.php" method="post">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control" name="productName" value="<?php echo $document->name; ?>" readonly>
						<input type="hidden" class="form-control" name="Name" value="<?php echo $document->name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="1" min="1">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name=="price" value="<?php echo $document->price ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="total">Address</label>
                        <input type="text" class="form-control" name="address" value="" >
                    </div>
                    <button type="submit" class="btn btn-primary">PLACED ORDER</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
