<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php session_start();?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Thank You for Your Order</h1>
                        <p class="card-text text-center">Your order has been successfully placed.</p>
                        <p class="card-text text-center">email <strong><?php echo $_SESSION['email'] ?></strong></p>
                        <p class="card-text text-center">CASH ON DELIVERY</p>
                        <a href="product.php" class="btn btn-primary btn-block">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
