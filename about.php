<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title'] ?> - ABOUT </title>
    <style>
      .box:hover{
        border-top-color: var(--teal) !important;
        transform:scale(1.03);
        transition:all 0.3s;
      }
    </style>
</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
    <h2 class="fw-bold text-center">ABOUT</h2>
    <div class="h-line bg-darK"><hr style="height:2px;"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      Expedita delectus odio itaque <br> error labore nostrum quod 
      incidunt repellendus quo architecto!
    </p>
</div>

<!--ABOUT-->
<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2 ">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Assumenda doloribus, maxime est dolorum earum aliquam magni.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Assumenda doloribus, maxime est dolorum earum aliquam magni.
        </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1 ">
        <img src="images/about/about.jpg" style="width: 450px;">
    </div>
  </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/hotel.svg" width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
            </div>            
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/customers.svg" width="70px">
                <h4 class="mt-3">200+ CUSTOMERS</h4>
            </div>            
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/rating.svg" width="70px">
                <h4 class="mt-3">150+ REVIEWS</h4>
            </div>            
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/staff.svg" width="70px">
                <h4 class="mt-3">200+ STAFFS</h4>
            </div>            
        </div>
    </div>
</div>

<h3 class="my-3 fw-bold text-center">MANAGEMENT TEAM</h3>
<div class="container px-4 mt-5">
  <div class="swiper management-Swiper">
    <div class="swiper-wrapper mb-5">
      <?php 
      $about_r = selectALL('team_details');
      $path = ABOUT_IMG_PATH;
      while($row = mysqli_fetch_assoc($about_r))
      {
        echo<<<data
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="$path$row[picture]" class="w-100">
            <h5 class="mt-3">$row[name]</h5>
          </div>
        data;
      }
      ?>
 
    </div>
    <div class="swiper-pagination">     
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".management-Swiper", {
      slidesPerView:"4",
      spaceBetween:40,
      pagination: {
      el: ".swiper-pagination",
      },
    });
</script>

</body>
</html>