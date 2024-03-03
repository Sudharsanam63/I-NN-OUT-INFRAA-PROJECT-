
<?php  
include("dbConnection.php");
 $connect = mysqli_connect("localhost", "root", "", "phpcrud1");  
 if(isset($_POST["insert"]))  
 {   
    $design_name = $_REQUEST['design_name'];
  $design_prize = $_REQUEST['design_prize'];
  $design_type = $_REQUEST['design_type'];
  $design_color = $_REQUEST['design_color'];
     
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
    
     mysqli_query($conn,"UPDATE design_db set design_id='" . $_POST['design_id'] . "', design_name='" . $_POST['design_name'] . "', design_prize='" . $_POST['design_prize'] . "',design_type='" . $_POST['design_type'] . "',design_color='" . $_POST['design_color'] . "',file='".addslashes(file_get_contents($_FILES["image"]["tmp_name"]))."' , customerid='" . $_POST['customerid'] . "'WHERE design_id='" . $_POST['design_id'] . "'"); 
     if(mysqli_query($connect, $query))  
     {  
          echo '<script>alert("Image Inserted into Database")</script>';  
          $message = "Record Modified Successfully";
     } 
     $result = mysqli_query($conn, "SELECT * FROM design_db where design_id='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($result); 
 }  
 ?>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      </head>
<body>

<div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-5">
                    <div class="card" style="height:100%;">
                        <div class="card-header text-white" style="background-color:#8e6a0f;">
                            <h3 style="text-align:center;">Add Designs</h3>
                        </div>
                        <div class="card-body">
                            <form name="frmUser" method="post" action="">
                            <div><?php if(isset($message)) { echo $message; } ?>
</div>
                               <input type="hidden" name="design_id" class="form-control" value="<?php echo $row['design_id']; ?>">
                                <div class="form-group">
                                    <label for="username">Design Name:</label>
                                    <input type="text" name="design_name" id="design_name" value="<?php echo $row['design_name']; ?>" class="form-control" placeholder="Enter design name" >
                                </div>
                                <div class="form-group">
                                    <label for="price">Design price:</label>
                                    <input type="number" name="design_prize" id="design_prize" value="<?php echo $row['design_price']; ?>" class="form-control" placeholder="Enter price" >
                                </div>
                                <div class="form-group">
                                    <label for="Type">Design Type:</label>
                                    <input type="text" name="design_type" id="design_type" value="<?php echo $row['design_type']; ?>" class="form-control" placeholder="Enter Type" >
                                </div>
                                <div class="form-group">
                                    <label for="color">Design Color:</label>
                                    <input type="text" name="design_color" id="design_color" class="form-control" value="<?php echo $row['design_color']; ?>" placeholder="Enter color" >
                                </div>
                                <div class="form-group">
                                    <label for="file">Image</label>
                                    <input type="file" name="image" id="image" class="form-control" value="" placeholder="Enter file" required>
                                </div>
                                <input type="hidden" name="customerid" class="form-control" value="<?php echo $row['customerid']; ?>">
                                <button type="submit" class="btn btn-primary btn-block" style="background-color:#8e6a0f;" name="submit" value="Submit">Insert</button>
                                <button class="btn btn-primary btn-block"><a href="DesignView.php">back to display page</a>
        </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
</body>
</html>