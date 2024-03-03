<?php
include("dbConnection.php");
$sql = "DELETE FROM customer WHERE customerid='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("location:cus_view.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
    
}
mysqli_close($conn);
?>