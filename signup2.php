<?php
$mongoClient = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$con = new MongoDB\Driver\BulkWrite;

session_start();
$_SESSION['user']=$_POST['u'];
$_SESSION['email']=$_POST['e'];

$username=$_SESSION['user'];
$email=$_SESSION['email'];
$phone=$_POST['p'];
$password=$_POST['pass'];

$errors = [];

if (empty($username)) {
    $errors[] = "Username is required.";
}

if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (empty($password)) {
    $errors[] = "Password is required.";
} elseif (strlen($password) < 4) {
    $errors[] = "Password must be at least 4 characters.";
}


$newcust = [
        "username" =>$username,
        "email" =>$email,
        "password" =>$password,
		"phone"=>$phone
];

if (empty($errors)) {
$con->insert($newcust);


$insertResult = $mongoClient->executeBulkWrite('web_practice.customer', $con);
if ($insertResult->getInsertedCount()==1)
{
        header("Location: home2.php");
	$mongoClient->close();
}

} else {
    foreach ($errors as $error) {
		header("location:error_page.php");
    }
}



?>
