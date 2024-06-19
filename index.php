<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title'] ?> - HOME </title>
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
      .box:hover{
        border-top-color: var(--teal) !important;
        transform:scale(1.03);
        transition:all 0.3s;
      }
    </Style>
</head>
<body>

<?php require('inc/header.php'); ?>

  <!-- Corousel Swiper -->
  <div class="swiper mySwiper mt-4">
      <div class="swiper-wrapper">
        <?php 
        $res = selectALL('carousel');

        while($row = mysqli_fetch_assoc($res))
        {
            $path = CAROUSEL_IMG_PATH;
            echo<<<data
              <div class="swiper-slide">
                <img src="$path$row[image]" class="w-100 d-block"/>
              </div>
            data;
        }   
        ?>
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

  <!--  Rooms  -->
  <div class="container">
    <div class="row"> 
      <?php 
        $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `remove`=? ORDER BY `id` DESC LIMIT 3",[1,0],'ii');
        while($room_data = mysqli_fetch_assoc($room_res))
        {
          //get feature of room
          $fea_q = mysqli_query($conn,"SELECT f.name FROM `features` f INNER JOIN `room_features` rfea ON f.id = rfea.features_id WHERE rfea.room_id = '$room_data[id]'");
          $features_data = "";
          while($fea_row = mysqli_fetch_assoc($fea_q)){
              $features_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap lh-base'>$fea_row[name]</span>
              ";
          }
          //get facilities of room
          $fac_q = mysqli_query($conn,"SELECT f.name FROM `facilities` f INNER JOIN `room_facilities` rfac ON f.id = rfac.facilities_id WHERE rfac.room_id = '$room_data[id]'");
          $facilities_data = "";
          while($fac_row = mysqli_fetch_assoc($fac_q)){
              $facilities_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap lh-base'>$fac_row[name]</span>
              ";
          }
          //get thumbnail of image
          $room_thumb = ROOMS_IMG_PATH."thumbnail.jpg";
          $thumb_q = mysqli_query($conn,"SELECT * FROM `rooms_images` WHERE `room_id`='$room_data[id]' AND `thumb`=1");
          if(mysqli_num_rows($thumb_q)>0){
              $thumb_res = mysqli_fetch_assoc($thumb_q);
              $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
          }

          $book_btn ="";
          if(!$settings_r['shutdown']){
          $login = 0;
          if(isset($_SEESION['login']) && $_SEESION['login']==true){
            $login = 1;
          }
          $book_btn = "<button onclick='checkLoginToBook($login,$room_data[id])' class='btn btn-sm custom-bg shadow-none mb-2'>Book Now</button>";
          }
          //print room card
          echo<<<data
              <div class="col-lg-4 col-md-6 my-3">
                  <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="$room_thumb" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">₹$room_data[price] Per night</h6>
                      <div class="features mt-4 mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                          $features_data
                        </span>
                      </div>
                      <div class="facilities mb-4">
                      <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                           $facilities_data
                        </span>                      
                      </div>
                      <div class="guests mt-4 mb-3">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                          $room_data[adult] Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                          $room_data[children]
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
                        $book_btn
                      <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none mb-2">More Details</a>
                      </div>
                    </div>
                  </div>
              </div>  
          data;
        }
      ?>
      <div class="col-lg-12 text-center mt-5">
        <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">MORE ROOMS >>></a>
      </div>
    </div>
  </div>

  <!-- Our Facilities -->
  <h2 class="mt-3 mb-4 pt-4 text-center fw-bold h-font">OUR FACILITIES</h2>
  <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
          <?php
            $res = mysqli_query($conn,"SELECT * FROM `facilities` ORDER BY `id` LIMIT 5");
            $path = FACILITIES_IMG_PATH;

            while($row = mysqli_fetch_assoc($res))
            {
              echo<<<data
                  <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow border-top border-4 py-4 my-3 box">
                    <img src="$path$row[icon]" width="80px">
                    <h5 class="mt-3">$row[name]</h5>
                  </div>
                  
              data;
            }
          ?>
         
        <div class="col-lg-12 text-center mt-5">
        <a href="facilities.php" class="btn btn-sm btn-outline-dark shadow-none">MORE FACILITIES >>></a>
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
            <a href="about.php" class="btn btn-sm btn-outline-dark shadow-none">KNOW MORE>>></a>
      </div>

  </div>

  <!-- Reach Us -->
  <h2 class="mt-3 mb-4 pt-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-4 p-4 mb-3 mb-lg-0 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel: <?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn1'] ?>
          </a>
          <br>
          <?php 
          if($contact_r['pn2']!='')
          {
            echo<<<data
            <a href="tel: $contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> $contact_r[pn2]
            </a>
          data;
          }
          ?>             
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <?php if($contact_r['tw']!='')
          {
            echo<<<data
            <a href="$contact_r[tw]" class="d-inline-block mb-2">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter me-1"></i>Twitter</span>
          </a>
          <br>
          data;
          } 
          ?>
          
          <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-2">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram me-1"></i>Instagram</span>
          </a>
          <br>
          <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook me-1"></i>Facebook</span>
          </a>
          <br>
        </div>
      </div>
    </div>
  </div>

<?php require('inc/footer.php'); ?>

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