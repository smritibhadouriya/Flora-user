<?php
$mongoClient = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$con = new MongoDB\Driver\BulkWrite;
	$pid=$_POST['id'];
	$price=$_POST['hdprice'];
	$qnt=$_POST['quantity'];
	$total=$price * $qnt;
	$email=$_POST['email'];
	$add=$_POST['address'];
	$t=time();
	$dte=date("h:i:s d-m-y",$t);

$neworder = [
		"product_id"=>$pid,
		"cust_email"=>$email,
        "address"=>$add,
		"date"=>$dte,
		"total_amt"=>$total
];
$con->insert($neworder);
$insertResult = $mongoClient->executeBulkWrite('web_practice.order', $con);
if ($insertResult->getInsertedCount()==1)
{
        header("Location:ending.php");
	$mongoClient->close();
}

 else {
    foreach ($errors as $error) {
		header("location:error_page.php");
    }
}

