<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
   
    $mongo = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $query = new MongoDB\Driver\Query(["email" => $email, "password" => $password]);
    $cursor = $mongo->executeQuery("web_practice.customer", $query);

    $user = $cursor->toArray()[0] ?? null;

    if ($user) {
		$_SESSION['email']=$_POST["email"];
         header("Location: home2.php");
    } else {
        header("location:loginpage.php");
    }
}
?>
