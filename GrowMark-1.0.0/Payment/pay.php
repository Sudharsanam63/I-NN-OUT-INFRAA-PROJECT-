<?php
include("dbConnection.php");
// get the form data
session_start();
$result = mysqli_query($conn, "SELECT * FROM bill where bill_id='" . $_GET['id'] . "'");
$result1 = mysqli_query($conn, "SELECT * FROM customer where c_phoneno='" . $_SESSION["c_username"] . "'");
$row = mysqli_fetch_array($result);
$row1 = mysqli_fetch_array($result1);

$cart_id=$row['cart_id'];

$sql2 = "SELECT * FROM cart where cart_id='" . $cart_id . "'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);
$buyer_name=$row1["customer_name"];
$purpose=$row2["cart_name"];
$mail=$row1["c_mail"];
$phn=intval($row1["c_phoneno"]);



    include "src/Instamojo.php";
    $api = new Instamojo\Instamojo("test_4f16bc9f207c23356d73bbf9e72","test_42087cd6c0c302c7badb150949a", 'https://test.instamojo.com/api/1.1/');
    try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $row["tot"],
        "buyer_name" => $buyer_name,
        "send_email" => true,
        "email" => $mail,
        "send_sms" => true,
        "phone" => $phn,
        "allow_repeated_payments" => false,
        "redirect_url" => "http://localhost:3000/GrowMark-1.0.0/Payment/success.php"
        ));
        $pay_ulr = $response['longurl'];
        header("Location: $pay_ulr");
        exit();
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }

?>
