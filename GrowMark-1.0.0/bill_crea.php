<?php
include("dbConnection.php");

$sql = "SELECT * FROM cart where cart_id='". $_GET['id'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$customerid=$row['customerid'];

$sql1 = "SELECT * FROM customer where customerid='". $customerid. "'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1);
?>

<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      </head>
<body>
<style>
          .b1{
              background-color:powderblue;
              font-size:20px;
              color:black;
              font-family: cursive;
              font-weight:bold;
              margin-left:50px;

          }
        </style>
    <div class="card-body">
    <form name="frmUser" method="post" action="bill_tb.php">
          <div>
            <?php if (isset($message)) {
                echo $message;
            } ?>
        </div>
        
        <input type="hidden" name="customerid" class="txtField " value="<?php echo $row['customerid']; ?>">
       <input type="hidden" name="cart_id" class="txtField " value="<?php echo $row['cart_id']; ?>">
       <div class="mb-3">
      <input type="number" name="Squarefeet" class="txtField form-control"placeholder="Square feet" value="">
        </div>
        <input  class="btn btn-color px-3 mb-5   b1"type="submit" name="submit" value="make payment" >
        </div>
    </form>
    </div>
</body>
</html>





<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css">
	</script>
        </script>
    <style>
@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}


.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 400px;
}

.screen {		
	background: linear-gradient(90deg,#f9f9f7, #8b931c);		
	position: relative;	
	height: 400px;
	width: 360px;	

}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 320px;
	width: 520px;
	background: #ffffff;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #8b931c;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 340px;
	width: 190px;
	background: linear-gradient(270deg,  #ffffff);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 200px;
	width: 200px;
	background: 8b931c;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.login {
	width: 320px;
	padding: 30px;
}

.login__field {
	padding: 20px 0px;	
	position: relative;	
}

.login__icon {
	position: absolute;
	top: 30px;
	color:#8b931c;
}

.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #8b931c;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #8b931c;
	box-shadow: 0px 2px 2px #8b931c;
	cursor: pointer;
	transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color:#8b931c;
	outline: none;
}

.button__icon {
	font-size: 24px;
	margin-left: auto;
	color:#8b931c;
}

.social-login {	
	position: absolute;
	height: 140px;
	width: 160px;
	text-align: center;
	bottom: 0px;
	right: 0px;
	color: #fff;
}

.social-icons {
	display: flex;
	align-items: center;
	justify-content: center;
}

.social-login__icon {
	padding: 20px 10px;
	color: #fff;
	text-decoration: none;	
	text-shadow: 0px 0px 8px #8d8d2e;
}

.social-login__icon:hover {
	transform: scale(1.5);	
}
    </style>
  </head>
  <body style="Background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS18MoxORhzh_OTHCXKOiVNIb3RwsqvKbjAog&usqp=CAU');background-repeat:no-repeat;background-size:cover;">
    <h1 style="text-align:center;">Final Bill Details</h1><br>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post" action="bill_tb.php">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Number" name="cart_id" required value="<?php echo $row['cart_id']; ?>">
				</div>
          <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="customer_name" name="customer_name" value="<?php echo $row1['customer_name'];?>" id="password" required>
				</div>
          <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="number" class="login__input" placeholder="Number of Sq.ft" name="Squarefeet"  required>
				</div>
				<button type="submit" class="button login__submit" name="submit" value="make payment">
					<span class="button__text">Calculate</span>
				</button><br> 
			
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
  </body>
</html>