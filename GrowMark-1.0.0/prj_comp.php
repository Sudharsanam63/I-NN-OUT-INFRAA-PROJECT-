<?php
include("dbConnection.php");
session_start();
$sql = "SELECT * FROM cart";
$result = mysqli_query($conn, $sql);
$row2 = mysqli_fetch_array($result);


$result2 = mysqli_query($conn, "SELECT * FROM customer where c_phoneno='" .  $row2['customer_name']. "'");
$row1 = mysqli_fetch_array($result2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IN'N OUT INFRAA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
     
    <!--tble-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/GrowMark-1.0.0/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/GrowMark-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/GrowMark-1.0.0/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/GrowMark-1.0.0/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/GrowMark-1.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/GrowMark-1.0.0/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h2 class="text-white fw-bold m-0">INNOUT INFRAA</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>23-B1,sengunthar Nagar,Periyasemur,Erode -638 004</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>innoutinfraa@gmail.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>Er.C.JEEVANANTHAM B.E. Ph:+91 9600748416</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>Er.S.KRISHNAKUMAR M.E. Ph:+91 9500826819</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">INNOUT INFRAA</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                    <a href="index1.php" class="nav-item nav-link">Home</a>
                        <a href="addDesign.php" class="nav-item nav-link">Add Design</a>
                        <a href="Designview.php" class="nav-item nav-link ">View Design</a>
                        <a href="cus_view.php" class="nav-item nav-link ">View Customers</a>
                        <a href="bill_show.php" class="nav-item nav-link ">Bills</a>
                        
                        </div>
                    </div> 
                    <div class="ms-auto d-none d-lg-block">
                    <a href="/GrowMark-1.0.0/logout.php" class="btn btn-primary rounded-pill py-2 px-3">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div><br><br>
    <!-- Navbar End -->
    
    <h1 class="fw-bold m-0" style="text-align:center;color:black;">Projects</h1>
    <?php

if (mysqli_num_rows($result) > 0) {
    ?>
    <section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table" >
						  <thead class="thead-dark" Style="background-color:#040469;color:aliceblue;">
						    <tr>
						      <th>Design Name</th>
						      <th>Customer Name</th>
						      <th>Customer Number</th>
						      <th>Design Cost</th>
                              <th>Address</th>
						      <th>Completed</th>
						    </tr>
						  </thead>
    <?php
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
       ?>
       <tbody>
						    <tr class="alert" role="alert">
						      <th><?php echo $row["cart_name"]; ?></th>
						      <th><?php echo $row1["customer_name"]; ?></th>
						      <td><?php echo $row["customer_name"]; ?></td>
						      <td>₹<?php echo $row["cart_price"]; ?>/Sq.ft</td>
						      <td><?php echo $row["customer_address"]; ?></td>
						      <td>
                              <a href="bill_crea.php?id=<?php echo $row["cart_id"]; ?>" class="close text-primary" data-dismiss="alert" aria-label="Close"><button type="button" class="btn btn-primary" style="text-decoration:none;color:#fff;">Complete</button></a>
                              			          	
				        	</td>
						      
						    </tr>
                            </tbody>		   
        <?php
    $i++;
    }
    ?>
    <?php
    
    echo "</table></div></div></div></div></section>";
} else {
    echo "<h1>No Customer Records</h1>";
}

// close database connection
mysqli_close($conn);


?>



    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>23-B1,sengunthar Nagar,Periyasemur,Erode -638 004</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>Er.C.JEEVANANTHAM B.E. Ph:+91 9600748416</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>Er.S.KRISHNAKUMAR M.E. Ph:+91 9500826819</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>innoutinfraa@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>