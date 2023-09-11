<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate - HOME</title>

    <?php require('inc/links.php'); ?>

    <!-- SWIPER JS START -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!-- SWIPER JS END -->

<style>
    .availability-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px){
      .availability-form{
      margin-top: 25px;
      padding: 0 35px;
    }
    }
</style>
</head>
<body style="background-image: linear-gradient(135deg, #f5f7fa 0%, #d6d9ff 100%);">

<?php require('inc/header.php'); ?>

<!-- CAROUSEL START -->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block">
      </div>
    </div>
  </div>
</div>
<!-- CAROUSEL END -->

<!-- CHECK AVAILABILITY FORM START-->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check House Availability</h5>
        <form>
          <div class="row align-items-end">
            <!-- <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Select the date for house Allotment</label>
              <input type="date" class="form-control shadow-none">
            </div> -->
            <div class="col-lg-6 mb-3">
            <label class="form-label" style="font-weight: 500;">House type</label>
            <select class="form-select shadow-none">
              <option value="1">1 bhk</option>
              <option value="2">2 bhk</option>
              <option value="3">3 bhk</option>
              <option value="3">4 bhk</option>
              <option value="3">5 bhk</option>
            </select>
            </div>
            <div class="col-lg-6 mb-3">
              <label class="form-label" style="font-weight: 500;">Top Localities in Nashik</label>
              <select class="form-select shadow-none">
                <option value="1">Pathardi Phata</option>
                <option value="2">Gangapur road</option>
                <option value="3">Igatpuri</option>
                <option value="3">Deolali Camp</option>
                <option value="3">Panchavati</option>
                <option value="3">Ozar</option>
                
              </select>
              </div>
            <div class="text-center">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>

          </div>
        </form>
    </div>
  </div>
</div>
<!-- CHECK AVAILABILITY FORM END-->

<!-- OUR TOP PROPERTY COLLECTIONS FOR YOU -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR TOP PROPERTY COLLECTIONS FOR YOU</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow shadow-primary shadow-intensity-lg" style="max-width: 350px; margin: auto;">
        <img src="images/houses/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>East Coast Bungalow</h5>
          <h6 class="mb-4">₹75 Lac</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 BHK
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Fully Furnished
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1800 sq.ft
            </span>
          </div>
          <div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Contact us</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>    
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/houses/2.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Pride tower Apartment</h5>
          <h6 class="mb-4">₹35 Lac</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 BHK
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Lift
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2500 Sq-m
            </span>
          </div>
          <div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Contact us</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>    
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/houses/4.png" class="card-img-top">
        <div class="card-body">
          <h5>Dreamscape Row House</h5>
          <h6 class="mb-4">₹45 Lac</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 BHK
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Ready to Move
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              700 sqft  
            </span>
          </div>
          <div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Contact us</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>    
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5 my-3">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Properties >>></a>
    </div>
  </div>
</div>
<!-- OUR TOP PROPERTY COLLECTIONS FOR YOU -->

<!-- TESTIMONIALS START -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="images/profile/pic-1.png" width="30px">
            <h6 class="m-0 ms-2">krishna</h6>
        </div>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
          Magnam quis blanditiis in quos dolores eligendi accusamus
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="images/profile/pic-2.png" width="30px">
            <h6 class="m-0 ms-2">Kaira</h6>
        </div>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
          Magnam quis blanditiis in quos dolores eligendi accusamus
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="images/profile/pic-3.png" width="30px">
            <h6 class="m-0 ms-2">karthik</h6>
        </div>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
          Magnam quis blanditiis in quos dolores eligendi accusamus
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">Know more>>></a>
  </div>
</div>
<!-- TESTIMONIALS END -->

<!-- REACH US START -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.37657232156!2d73.80348084999999!3d19.99096305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1692640803321!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +91696969696" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+91696969696
        </a>
        <br>
        <a href="tel: +913445566778" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+91696969696
        </a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i>Twitter
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i>Facebook
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i>Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- REACH US END -->

<?php require('inc/footer.php'); ?>

<!-- JAVASCRIPT FOR SWIPER JS START -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- JAVASCRIPT FOR SWIPER JS END -->

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
</script>
</body>
</html>