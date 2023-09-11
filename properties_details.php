<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate - PROPERTIES DETAILS</title>

    <?php require('inc/links.php'); ?>

<style>
    .box-shadow{

	    -webkit-transition: .3s ease-out;
	    -moz-transition: .3s ease-out;
	    -ms-transition: .3s ease-out;
	    -o-transition: .3s ease-out;
	    transition: .3s ease-out;
        }
    .box-shadow:hover{
	    -webkit-box-shadow: 0 20px 40px rgba(171, 174, 176, 0.6);
	    box-shadow: 0 20px 40px rgba(171, 174, 176, 0.6);
        }
    .card{
        margin-top: 50;
	    border-radius: 25px;
        word-spacing: 5px;
        background-color: #8EC5FC;
        background-image: -webkit-linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
        background-image: -moz-linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
        background-image: -o-linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
        background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
        }

</style>
</head>
<body style="background-image: linear-gradient(135deg, #f5f7fa 0%, #d6d9ff 100%);">

<?php require('inc/header.php'); ?>

<?php
       
        $id=$_GET['id'];
        if(!isset($_GET['id']))
        {
            redirect('properties.php');
        }

        $select_data = "SELECT `id`, `name`, `features`, `price`, `description`, `image` FROM `properties` WHERE id=$id";

        $select_data_query = mysqli_query($con,$select_data);

        $row_count = mysqli_num_rows($select_data_query);

        $rows = mysqli_fetch_array($select_data_query)

?>

    <!-- <div class="col-lg-12 fs-4 px-4">
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/1.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">East Coast Bungalow</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Fully Furnished
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    1800 sq.ft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    3 BHK, Bungalow is available for Sale in gangapur <br> road for 75 Lac(s)
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹75 Lac</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div> 
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/2.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">Pride tower Apartment</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Lift
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    2500 Sq-m
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    2 BHK, Flat is available for Sale in pathardi phata <br> for 35 Lac(s)
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹35 Lac</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/4.png" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">Dreamscape Row House</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Ready to Move
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    700 sqft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    3 BHK, Row house is available for Sale in deolali camp for 45 Lac(s)
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹45 Lac</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/3.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5 mt-2">Ivy Cottage Villa</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Ready to Move
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    1500 sqft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    4 BHK, Villa is available for Sale in nashik road <br> for 1 Cr
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹1 Cr</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/5.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">Star Villa</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Ready to Move
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    1900 sqft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    5 BHK, Villa is available for Sale in mg road <br> for 1.3 Cr
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹1.3 Cr</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/6.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">Govind Apartment</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Ready to Move
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    500 sqft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    1 BHK, Apartment is available for Sale in ozar <br> for 18 Lac(s)
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹18 Lac</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/1.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">East Coast Bungalow</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Fully Furnished
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    1800 sq.ft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    3 BHK, Bungalow is available for Sale in gangapur <br> road for 75 Lac(s)
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹75 Lac</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/2.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">Pride tower Apartment</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Lift
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    2500 Sq-m
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    2 BHK, Flat is available for Sale in pathardi phata <br> for 35 Lac(s)
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹35 Lac</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/4.png" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">Dreamscape Row House</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Ready to Move
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    700 sqft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    3 BHK, Row house is available for Sale in deolali camp road for 45 Lac(s)
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹45 Lac</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/3.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5 mt-2">Ivy Cottage Villa</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Ready to Move
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    1500 sqft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    4 BHK, Villa is available for Sale in nashik road <br> for 1 Cr
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹1 Cr</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-5 border-0">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="images/houses/5.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h4 class="mb-5">Star Villa</h4>
                    <div class="features mb-3">
                    <h6 class="mb-1 fw-bold">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 BHK
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Ready to Move
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-5">
                    1900 sqft
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm">
                    5 BHK, Villa is available for Sale in mg road <br> for 1.3 Cr
                    </span>
                </div>
                </div>
                <div class="col-md-2 text-center">
                    <h6 class="mb-4 fs-4">₹1.3 Cr</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                </div>
            </div>
        </div> 

        <?php
              if(isset($_POST['submit']))
              {
              $image = $_FILES['image']['name'];
              $image_tmp = $_FILES['image']['tmp_name'];
              $image_location = '../image/'.$image;
              $move = move_uploaded_file($image_tmp,$image_location);

              $insert_data = "INSERT INTO `properties`(`name`, `features`, `price`, `description`, `image`) VALUES ('$name','$features','$price','$description','$image')";
   
              echo "<pre>";
              print_r($insert_query);
              echo "</pre>";

              $insert_data_query = mysqli_query($con,$insert_data);
                          
              if($insert_data_query)
              {
               header("Location:properties.php");
              }
              else{
               header("Location:properties.php");
              }

            }
         /*   $select_data = "SELECT `id`, `name`, `features`, `price`, `description`, `image` FROM `properties`";
            $select_data_query = mysqli_query($con,$select_data);

            $row_count = mysqli_num_rows($select_data_query);

            while($rows = mysqli_fetch_array($select_data_query))
            { ?>
                
             <div class="card box-shadow mb-4 border-0">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="../real estate website/image/<?php echo 
                    $rows['image'] ?>" height="400px" width="600px" class="img-fluid rounded" >
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h4 class="mb-5"><?php echo $rows['name']?></h4>
                        <div class="features mb-3">
                        <h6 class="mb-1 fw-bold">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        <?php echo $rows['features'] ?>
                        </span>
                        <span class="mt-5 badge rounded-pill bg-light text-dark text-wrap lh-sm">
                        <?php echo $rows['description'] ?>
                        </span>
                    </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <h6 class="mb-4 fs-4"><?php echo $rows['price'] ?></h6>
                        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
                        <a href="properties_details.php?id=<?php echo $rows['id'] ?>" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>  
                    </div>
                </div>
                </div> 
                <?php 
            } */

        ?>

        
    </div> -->
  </div>
</div>

<div class="mb-5"></div>

<div class="card box-shadow mb-4 border-0 text-center mt-3">
            <div class="row g-0 p-3">
                <div class="col-md-5">
                <img src="../real estate website/image/<?php echo 
                $rows['image'] ?>" height="800px" width="600px" class="img-fluid rounded" >
                </div>

                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h1 class="mt-5 mb-5 pt-2"><?php echo $rows['name']?></h1>
                    <div class="features">
                        <h3 class="pt-2">Features</h3>
                        <h6 class="mb-5 fw-bold"><?php echo $rows['features'] ?></h6>
                        <h3>Description</h3>   
                        <h6 class="mb-5 fw-bold"><?php echo $rows['description'] ?></h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-sm"></span>
                    </div>
                </div>
                <div class="col-md-2 text-center" style="padding-top: 140px;">
                    <h3 class="mb-4">₹<?php echo $rows['price'] ?></h3>
                    <a href="" class="btn btn-lg w-100 text-white custom-bg shadow-none mb-2">Contact us</a>
  
                </div>
            </div>
        </div> 


<?php require('inc/footer.php'); ?>

</body>
</html>