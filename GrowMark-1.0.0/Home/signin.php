<!DOCTYPE html>
<html>
    <head>
        <title>sign up Form</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#color-picker').colorpicker();
		});
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
	min-height: 100vh;
}

.screen {		
	background: linear-gradient(90deg,#8b931c, #8b931c);		
	position: relative;	
	height: 650px;
	width: 360px;
    padding: 10px;	

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
	height: 520px;
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
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #ffffff, #ffffff);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #8b931c;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.login {
	width: 320px;
	padding: 30px;
}

.login__field {
    margin-left:15px;
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
  <body style="Background-image:url('https://www.unstudio.com/image/2023/1/25/evabloem_unstudio_echo_exterior_007-238455128.jpg%28mediaclass-background-xl.07f7adb8a95599dcb70557da25aa6351c3fd0c58%29.jpg');background-repeat:no-repeat;background-size:cover;">
    <h1 style="text-align:center;">SIGN UP</h1><br>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="signup" action="c_signin.php" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input name="customer_name" type="text" class="login__input" placeholder="Name" required>
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input name="c_phoneno" type="text" class="login__input" placeholder="Phone number" required>
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input name="c_address" type="text" class="login__input" placeholder="Address" required>
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" name="c_mail" id="c_mail" class="login__input" placeholder="Email">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="password" name="c_password" id="c_password" type="password" class="login__input" placeholder="password">
                    <span id="pd" style="color:red;"><span>
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="password" class="login__input" id="cn_password" placeholder="confirm password" required>
                    <span id="cp"><span>
				</div>
                <button type="submit" class="button login__submit">
					<span class="button__text">signup</span>
				</button><br>
                <b style="text-align:center;">Do have an account ?<a href="login.php">Login</a><span>/</span><a href="admin.php">Admin</a></b>		
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
<script>
$(document).ready(function () {
  $("#c_password").on('keyup', function(){
    var number = /([0-9])/;
    var alphabets = /([a-zA-Z])/;
    var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
    if ($('#c_password').val().length < 6) {
        $('#pd').removeClass();
        $('#pd').addClass('weak-password');
        $('#pd').html("Weak (should be atleast 6 characters.)");
    } else {
        if ($('#c_password').val().match(number) && $('#c_password').val().match(alphabets) && $('#c_password').val().match(special_characters)) {
            $('#pd').removeClass();
            $('#pd').addClass('strong-password');
            $('#pd').html("<p style='color:green;'>Strong<p>");
        } else {
            $('#pd').removeClass();
            $('#pd').addClass('medium-password');
            $('#pd').html("Medium (should include alphabets, numbers and special characters or some combination.)");
        }
    }
  });
  $("#cn_password").on('keyup', function(){
    var password = $("#c_Password").val();
    var confirmPassword = $("#cn_password").val();
    if (password != confirmPassword)
        $("#cp").html("Password does not match !").css("color","red");
    else
        $("#cp").html("Password match !").css("color","green");
  });

}); 
</script>
  </body>
</html>
