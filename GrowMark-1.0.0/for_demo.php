<?php
include("dbConnection.php");
// get the form data
session_start();
$result = mysqli_query($conn, "SELECT * FROM design_db where design_id='" . $_GET['id'] . "'");
$result2 = mysqli_query($conn, "SELECT * FROM customer where c_phoneno='" . $_SESSION["c_username"] . "'");
$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result2);

$cart_name=$row['design_name'];
$design_id=$row['design_id'];
$customer_name = $_SESSION["c_username"];
$cust_id = $row1['customerid'];



// insert data into table
$sql = "INSERT INTO cart1 (cart1_name,design_id,customerid,design_name) VALUES ('$customer_name','$design_id','$cust_id','$cart_name')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>