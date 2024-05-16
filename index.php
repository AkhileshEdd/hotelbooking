<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>HOTEL BOOKING - HOME </title>
    <?php require('inc/links.php'); ?>
    <Style>
      .navbar-brand{
        margin-right: 45px;
      }
      #navbarSupportedContent ul li{
        margin-right: 25px;
      }
      .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
    </Style>
</head>
<body>

<?php require('inc/header.php'); ?>

<!-- Corousel Swiper -->
<div class="swiper mySwiper mt-4">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/corousel/h-3.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/corousel/h-4.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/corousel/h-5.jpg" class="w-100 d-block"/>
      </div>
    </div>
</div>

<!-- Check Availabolity Form -->
<div class="container availability-form">
        <div class="row">
          <div class="col-lg-12 bg-light shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form>
              <div class="row align-items-end">
                <div class="col-lg-3">
                  <label class="form-label" style="font: weight 500px;">Check-In</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3">
                  <label class="form-label" style="font: weight 500px;">Check-Out</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3">
                  <label class="form-label" style="font: weight 500px;">Adult</label>
                    <select class="form-select shadow-none">
                      <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2">
                  <label class="form-label" style="font: weight 500px;">Children</label>
                    <select class="form-select shadow-none">
                      <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-1">
                   <button type="button" class="btn btn-primary shadow-none">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
</div>

<!-- Our Rooms -->
<h2 class="mt-3 mb-4 pt-4 text-center fw-bold h-font">OUR ROOMS</h2>

<!--  card  -->
<div class="container">
  <div class="row"> 

    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="images/rooms/r-1.avif" class="card-img-top" alt="...">
               <div class="card-body">
                <h5>Simple Room Name</h5>
                <h6 class="mb-4">₹200 Per night</h6>
                 <div class="features mt-4 mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    3 Sofa
                  </span>
                 </div>
                 <div class="facilities mb-4">
                 <h6 class="mb-1">Facilities</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    WiFi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    Televisn
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                   Room heater
                  </span>
                 </div>
                 <div class="guests mt-4 mb-3">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    4 Children
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    3 Sofa
                  </span>
                 </div>
                 <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  </span>
                 </div>
                 <div class="d-flex justify-content-evenly mb-3">
                 <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                 <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                 </div>
               </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="images/rooms/r-1.avif" class="card-img-top" alt="...">
               <div class="card-body">
                <h5>Simple Room Name</h5>
                <h6 class="mb-4">₹200 Per night</h6>
                 <div class="facilities mt-4 mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    3 Sofa
                  </span>
                 </div>
                 <div class="features mb-4">
                 <h6 class="mb-1">Features</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    WiFi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    Televisn
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                   Room heater
                  </span>
                 </div>
                 <div class="guests mt-4 mb-3">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    4 Children
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    3 Sofa
                  </span>
                 </div>
                 <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  </span>
                 </div>
                 <div class="d-flex justify-content-evenly mb-3">
                 <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                 <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                 </div>
               </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="images/rooms/r-1.avif" class="card-img-top" alt="...">
               <div class="card-body">
                <h5>Simple Room Name</h5>
                <h6 class="mb-4">₹200 Per night</h6>
                 <div class="facilities mt-4 mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    3 Sofa
                  </span>
                 </div>
                 <div class="features mb-4">
                 <h6 class="mb-1">Features</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    WiFi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    Televisn
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                   Room heater
                  </span>
                 </div>
                 <div class="guests mt-4 mb-3">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    4 Children
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                    3 Sofa
                  </span>
                 </div>
                 <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  </span>
                 </div>
                 <div class="d-flex justify-content-evenly mb-3">
                 <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                 <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                 </div>
               </div>
        </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
    <a href="" class="btn btn-sm btn-outline-dark shadow-none">MORE ROOMS >>></a>
    </div>

  </div>
</div>

<!-- Our Facilities -->
<h2 class="mt-3 mb-4 pt-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
        <div class="row justify-content-evenly px-lg-0 px=md-0 px-5">
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.jpeg" alt="" width="80px">
            <h5 class="mt-3">WiFi</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.jpeg" alt="" width="80px">
            <h5 class="mt-3">WiFi</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.jpeg" alt="" width="80px">
            <h5 class="mt-3">WiFi</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.jpeg" alt="" width="80px">
            <h5 class="mt-3">WiFi</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.jpeg" alt="" width="80px">
            <h5 class="mt-3">WiFi</h5>
          </div>
          <div class="col-lg-12 text-center mt-5">
          <a href="" class="btn btn-sm btn-outline-dark shadow-none">MORE FACILITIES >>></a>
          </div>
        </div>
</div>

<!-- Testimonials -->
<h2 class="mt-3 mb-4 pt-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container">

    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-3">
          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
              <img src="images/features/wifi.jpeg" width="30px">
              <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Libero sunt ipsam quia rem, sed esse recusandae incidunt labore deleniti aperiam!
              </p>
              <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </div>
          </div>
          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
              <img src="images/features/wifi.jpeg" width="30px">
              <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Libero sunt ipsam quia rem, sed esse recusandae incidunt labore deleniti aperiam!
              </p>
              <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </div>
          </div>
          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
              <img src="images/features/wifi.jpeg" width="30px">
              <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Libero sunt ipsam quia rem, sed esse recusandae incidunt labore deleniti aperiam!
              </p>
              <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </div>
          </div>
          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
              <img src="images/features/wifi.jpeg" width="30px">
              <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Libero sunt ipsam quia rem, sed esse recusandae incidunt labore deleniti aperiam!
              </p>
              <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </div>
          </div>
          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center p-4">
              <img src="images/features/wifi.jpeg" width="30px">
              <h6 class="m-0 ms-2">Random User1</h6>
              </div>
              <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Libero sunt ipsam quia rem, sed esse recusandae incidunt labore deleniti aperiam!
              </p>
              <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </div>
          </div>
        </div>
    <div class="swiper-pagination">
    </div>
    </div>

    <div class="col-lg-12 text-center mt-3">
          <a href="" class="btn btn-sm btn-outline-dark shadow-none">KNOW MORE>>></a>
    </div>

</div>

<!-- Reach Us -->

<h2 class="mt-3 mb-4 pt-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-4 p-4 mb-3 mb-lg-0 bg-white rounded">
          <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234447.15551212718!2d85.1565125033755!3d23.343433817440932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e104aa5db7dd%3A0xdc09d49d6899f43e!2sRanchi%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1715083281968!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5>Call Us</h5>
              <a href="tel: +917841523610" class="d-inline-block mb-2 text-decoration-none text-dark">
               <i class="bi bi-telephone-fill"></i> +917841523610
              </a>
              <br>
              <a href="tel: +917841523610" class="d-inline-block mb-2 text-decoration-none text-dark">
               <i class="bi bi-telephone-fill"></i> +918845623804
              </a>
            </div>
            <div class="bg-white p-4 rounded mb-4">
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
        </div>
</div>

<?php require('inc/footer.php'); ?>

<div class="container-fluid mt-5"></div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{ 
        delay:3500,
        disableOnInteraction:false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "3",
      loop:true,
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
    });
</script>

</body>
</html>