<?php
include("dbConnection.php");
$sql = "DELETE FROM cart WHERE cart_id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("location:cart_cust.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
    
}
mysqli_close($conn);
?>