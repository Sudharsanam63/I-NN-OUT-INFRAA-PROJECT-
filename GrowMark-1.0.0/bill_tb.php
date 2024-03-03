<?php
include("dbConnection.php");
// get the form data
$result = mysqli_query($conn, "SELECT * FROM cart where cart_id='" . $_POST['cart_id'] . "'");
$row = mysqli_fetch_array($result);

$customerid = $_POST['customerid'];
$cart_id = $_POST['cart_id'];
$quantity = $_POST['Squarefeet']*$row['cart_price'];



// insert data into table
$sql = "INSERT INTO bill (customerid,cart_id,tot) VALUES ('$customerid', '$cart_id','$quantity')";

if (mysqli_query($conn, $sql)) {
    header('location:bill_show.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>