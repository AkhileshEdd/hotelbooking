<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL BOOKING - CONTACT US </title>
    <?php require('inc/links.php'); ?>
</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
    <h2 class="fw-bold text-center">CONTACT US</h2>
    <div class="h-line bg-darK"><hr style="height:2px;"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      Expedita delectus odio itaque <br>error labore nostrum quod 
      incidunt repellendus quo architecto!
    </p>
</div>

<!-- contact us -->
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234447.15551212718!2d85.1565125033755!3d23.343433817440932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e104aa5db7dd%3A0xdc09d49d6899f43e!2sRanchi%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1715083281968!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/YzbXJxGCfTLrQ9keA" target="_blank" class="d-inline-block text-decoration-none text-dark">
        <i class="bi bi-geo-alt-fill"></i>XYZ, RANCHI, JHARKHAND
        </a>
        <div class="row mb-4">
         <div class="col-lg-6">
            <h5 class="mt-3">Call Us</h5>
            <a href="tel: +917841523610" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +917841523610
            </a>
            <br>
            <a href="tel: +917841523610" class="d-inline-block mb-2 text-decoration-none text-dark">
             <i class="bi bi-telephone-fill"></i> +918845623804
             </a>
         </div>
         <div class="col-lg-6">
            <h5 class="mt-3">Email</h5>
            <a href="mailto: abcd@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-envelope-arrow-up"></i> abcd@gmail.com
            </a>
         </div>
        </div>
        <h5>Follow Us</h5>
        <a href="#" class="d-inline-block mb-2">
         <span class="badge bg-light text-dark fs-6 p-2">
         <i class="bi bi-twitter me-1"></i>Twitter</span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-2">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-instagram me-1"></i>Instagram</span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-facebook me-1"></i>Facebook</span>
        </a>
        <br>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>SEND A MESSAGE</h5>  
          <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Name</label>
           <input type="text" class="form-control shadow-none">
          </div>
         <div class="mt-3">
           <label class="form-label" style="font-weight: 500;">Email</label>
           <input type="email" class="form-control shadow-none">
         </div>
         <div class="mt-3">
          <label class="form-label" style="font-weight: 500;">Subject</label>
          <input type="text" class="form-control shadow-none">
         </div>
         <div class="mt-3">
         <label class="form-label" style="font-weight: 500;">Message</label>
         <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
         </div>
         <button type="submit" class="btn text-white custom-bg shadow-none mt-3">SEND</button>
       </form>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

<div class="container-fluid mt-5"></div>

</body>
</html>