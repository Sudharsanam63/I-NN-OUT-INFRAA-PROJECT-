<?php
include("dbConnection.php");
// get the form data
session_start();
$result = mysqli_query($conn, "SELECT * FROM design_db where design_id='" . $_GET['id'] . "'");
$result2 = mysqli_query($conn, "SELECT * FROM customer where c_phoneno='" . $_SESSION["c_username"] . "'");
$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result2);

$cart_name=$row['design_name'];
$customer_name = $_SESSION["c_username"];
$cart_prize = $row['design_prize'];
$design_id = $row['design_id'];
$cust_id = $row1['customerid'];
$customer_address= $row1['c_address'];



// insert data into table
$sql = "INSERT INTO cart (cart_name,customer_name,customerid,design_id,cart_price,customer_address) VALUES ('$cart_name', '$customer_name','$cust_id','$design_id','$cart_prize','$customer_address')";

if (mysqli_query($conn, $sql)) {
    header('location:cart_cust.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>