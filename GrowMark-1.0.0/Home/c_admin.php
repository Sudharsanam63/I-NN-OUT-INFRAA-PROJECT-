<?php
include("dbConnection.php");
$customer_name = $_POST['c_username'];
$c_password = $_POST['c_password'];
$sql = "SELECT * FROM admin WHERE admin_name= '$customer_name' AND Admin_password='$c_password'";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
$me = "invalid password";
session_start();
if ($resultcheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $_SESSION["admin_id"] = $row['admin_id'];
    }
    $_SESSION["admin_name"] = $_POST['admin_name'];
    header("location:\GrowMark-1.0.0\index1.php");
} else {
    header("location: ./login.php?password_msg= Enter a correct password");
}
?>
