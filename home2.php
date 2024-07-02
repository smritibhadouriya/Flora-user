<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>www.flora.com</title>

<!-- Bootstrap CSS Link -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
<!-- Custom CSS -->
<style>
	    body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-image: url("image\background.jpg"); /* Replace with your image path */
            background-size: cover;
            color: black;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            padding: 100px 0;
        }

        .jumbotron h1 {
            font-size: 3rem;
        }

        .jumbotron p {
            font-size: 1.5rem;
        }

        .btn-shop-now {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
        }

        .btn-shop-now:hover {
            background-color: #c82333;
        }
</style>
</head>
<body>
    
<!-- Navigation Bar -->
<?php session_start();
echo "<div class='alert alert-success text-center' role='alert'>WELCOME  ".$_SESSION['email']."</h2></div>";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#"> <h3 class="display-4">FLORA </h3></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="#"> <h5 class="display-9">HOME</h5><span class="sr-only">(current)</span></a>
        </li>

       <li class="nav-item">
        <a class="nav-link" href="product.php"><h5 class="display-9">PRODUCT</h5></a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href=""><h5 class="display-9">CART</h5></a>
        </li>
			
		<li class="nav-item">
        <a class="nav-link" href="conact.php"><h5 class="display-9">CONTACT US </h5></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="abtus.php"><h5 class="display-9">ABOUT US</h5></a>
		</li>
	<li class="nav-item">
        <a class="nav-link" href="logout.php"><h5 class="display-9">LOG OUT</h5></a>
		</li>
    </ul>
	</div>
</nav>
<!-- Hero Section -->
    <div class="jumbotron">
		<!-- <img src="image/download.jfif" width="100%">-->
        <h2>WITH LOVE,FOR LOVE!!!</h2>
        <P>We Try To Help You To Show and Send Your Love To Your Love Ones.<br>
			Flowers And Greeting Cards For Various Occassions <BR>
			Such As Birthdays,Anniversaries,Holidays and Special Events.</p>
        <a href="product.php" class="btn btn-danger">FILL YOUR CART</a>
    </div>

<div class="alert alert-danger text-center" role="alert">
<h2>MOST REQUESTED PRODUCT</h2>
</div>

    <!-- Featured Products Section -->
    <div class="container">
        <div class="row">
            <!-- Example product cards -->
				
			<div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image\MIX.jfif" class="card-img-top" alt="BOUQUET">
                    <div class="card-body">
                        <h5 class="card-title">MIX BOUQUET</h5>
                        <a href="" class="btn btn-outline-success">view</a>
                    </div>
                </div>
            </div>

				<div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image\take.jfif"class="card-img-top" alt="CARD">
                    <div class="card-body">
                        <h5 class="card-title">TAKE CARE CARD</h5>
                        <a href="" class="btn btn-outline-success">view</a>
                    </div>
                </div>
            </div>

				<div class="col-md-4 mb-4">
                <div class="card">
                   <img src="image\ROSE.jfif" class="card-img-top" alt="FLOWER">
                    <div class="card-body">
                        <h5 class="card-title">RED ROSES</h5>
                       <a href="" class="btn btn-outline-success">view</a>
                    </div>
                </div>
            </div>

			<div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image\mari.jfif" class="card-img-top" alt="FLOWER">
                    <div class="card-body">
                        <h5 class="card-title">MARIGOLD</h5>
                        <a href="" class="btn btn-outline-success">view</a>
                    </div>
                </div>
            </div>

			 <div class="col-md-4 mb-4">
                <div class="card">
                   <img src="image\sunflower.jfif" class="card-img-top" alt="BOUQUET">
                    <div class="card-body">
                        <h5 class="card-title">SUNFLOWER BOUQUET</h5>
                        <a href="" class="btn btn-outline-success">view</a>
                    </div>
                </div>
            </div>

			<div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image\BIRTHA.jfif" class="card-img-top" alt="CARD">
                    <div class="card-body">
                        <h5 class="card-title">BIRTHDAY CARD</h5>
                       <a href="" class="btn btn-outline-success">view</a>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>






  <!-- Footer -->
    <footer class="text-center py-4 bg-light">
       <h6> <p>&copy; FLORA by SMRITI BHADOURIYA</p></h6>
    </footer>
</body>
</html>
