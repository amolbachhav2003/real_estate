<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate - CONTACT</title>

    <?php require('inc/links.php'); ?>

</head>
<body style="background-image: linear-gradient(135deg, #f5f7fa 0%, #d6d9ff 100%);">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3"> 
     Contact Real Estate Nashik...
    </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
            <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.37657232156!2d73.80348084999999!3d19.99096305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1692640803321!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5>Address</h5>
                <a href="https://goo.gl/maps/sQgVqp1aHzVNerqWA" target="_blank" class="inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-geo-alt-fill"></i> jai bhavani road, nashik, Maharashtra.
                </a>

                <h5 class="mt-4">Call us</h5>
                <a href="tel: +91696969696" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+91696969696
                </a>
                <br>
                <a href="tel: +913445566778" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+91696969696
                </a>
                <h5 class="mt-4">Email</h5>
                <a href="mailto: ask.amolbachhav2003@gmail.com" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-envelope-fill"></i> ask.amolbachhav2003@gmail.com
                </a>

                <h5 class="mt-4">Follow us</h5>
                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                <i class="bi bi-twitter me-1"></i>
                </a>
           
                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                <i class="bi bi-facebook me-1"></i>
                </a>

                <a href="#" class="d-inline-block text-dark fs-5">
                <i class="bi bi-instagram me-1"></i>
                </a>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
            <form method="POST">
                <h5>Send a message</h5>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Name</label>
                    <input name="name" required type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Email</label>
                    <input name="email" required type="email" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Subject</label>
                    <input name="subject" required type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Message</label>
                    <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                </div>
                <button type="submit" name="send" class="btn text-white custom-bg mt-3">SEND</button>
            </form>
        </div>
    </div>
  </div>
</div>

<?php

    if(isset($_POST['send']))
    {
        $frm_data = filteration($_POST);
        $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
        $res = insert($q,$values,'ssss');

        if($res==1){
            alert('success','mail sent!');
        }
        else{
            alert('error','Server Down! Try again later.');
        }
    }
?>

<?php require('inc/footer.php'); ?>

</body>
</html>