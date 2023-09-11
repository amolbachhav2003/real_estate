<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate - About</title>

    <?php require('inc/links.php'); ?>

    <!-- SWIPER JS START -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!-- SWIPER JS END -->

    <style>
        .box{
            border-top-color:#9900ff !important;
        }
        .custom-bg1{
            background-color: #9900ff;
            border: 1px solid #f5f5f5;
        }
    </style>
</head>

<body style="background-image: linear-gradient(135deg, #f5f7fa 0%, #d6d9ff 100%);">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3"> 
        A brief history of Real Estate Nashik and what we are all about...
    </p>
</div>

<div class="container">
    <div class="row justify-content-between  align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">ABOUT US.</h3>
            <p>
            Real Estate Nashik is promoted by Mr.Amol and Sitanshu who has been in the real estate business since the year 1993 and has an experience in transacting in Residential Lease & Sale, Commercial Lease & Sale. 
            The experience of transacting and having a practical approach at work in each segments of real estate has given Real Estate Nashik Pvt Ltd an edge over its competition.
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="images/about/about.jpg" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/house.svg" width="70px">
                <h4 class="mt-3">1000+ <br> LISTINGS FOR SALE</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/rent.svg" width="70px">
                <h4 class="mt-3">750+ <br> LISTINGS FOR RENT</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/agent.svg" width="70px">
                <h4 class="mt-3">200+ <br> AGENTS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/brokers.svg" width="70px">
                <h4 class="mt-3">150+ <br> BROKERS</h4>
            </div>
        </div>
    </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

<div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper ">
      <div class="swiper-slide text-center text-white overflow-hidden rounded mb-5 custom-bg1">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Rohan</h5>
      </div>
      <div class="swiper-slide text-center text-white overflow-hidden rounded custom-bg1">
        <img src="images/about/team2.jpg" class="w-100">
        <h5 class="mt-2">Kshitij</h5>
      </div>
      <div class="swiper-slide text-center text-white overflow-hidden rounded custom-bg1">
        <img src="images/about/team3.jpg" class="w-100">
        <h5 class="mt-2">Mackle</h5>
      </div>
      <div class="swiper-slide text-center text-white overflow-hidden rounded custom-bg1">
        <img src="images/about/team4.jpg" class="w-100">
        <h5 class="mt-2">Iran</h5>
      </div>
      <div class="swiper-slide text-center text-white overflow-hidden rounded custom-bg1">
        <img src="images/about/team5.jpg" class="w-100">
        <h5 class="mt-2">Loki</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
  });
</script>

</body>
</html>