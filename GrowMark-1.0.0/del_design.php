<?php
include("dbConnection.php");
$sql = "DELETE FROM design_db WHERE design_id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("location:tbl.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
    
}
mysqli_close($conn);
?>