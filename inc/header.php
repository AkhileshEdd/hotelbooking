
<?php 
require('admin/inc/db_config.php');
require('admin/inc/essentials.php');

$contact_q = "SELECT `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `insta`, `tw`, `iframe` FROM `contact_details` WHERE `sr_no`=?";
$values = [1];
$contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));

?>

<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand"  href="index.php" >HOTEL BOOKING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-2" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" aria-current="page" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex me-2">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <!-- <button class="btn btn-outline-success shadow-none me-2" type="submit">Search</button>-->
        <button type="button" class="btn btn-outline-dark me-2 " data-bs-toggle="modal" data-bs-target="#LoginModal">Login</button>
        <button type="button" class="btn btn-outline-dark " data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</button>
      </div>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
          <i class="bi bi-person-circle fs-5 me-2"></i> User Login
        </h5>
        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="mb-3">
         <label class="form-label">Email address</label>
         <input type="email" class="form-control shadow-none">
       </div>
       <div class="mb-4">
         <label class="form-label">Password</label>
         <input type="password" class="form-control shadow-none">
       </div>
       <div class="d-flex align-items-center justify-content-between">
         <button type="submit" class="btn btn-primary shadow-none">Login</button>
         <a href="javascript: void(0)">Forgot Password</a>
       </div>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Register Modal -->
<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
          <i class="bi bi-person-circle fs-5 me-2"></i> User Registration
        </h5>
        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
          Note: Your deatils must match with your ID(Aadhar card, passport, driving license, etc...)
          that will be required during checK-in.
        </span>
        <div class="container">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Number</label>
              <input type="number" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Picture</label>
              <input type="file" class="form-control shadow-none">
            </div>
            <div class="col-md-12 p-0 mb-3">
              <label class="form-label">Address</label>
              <textarea class="form-control shadow-none" rows="1"></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Pin code</label>
              <input type="number" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Date of birth</label>
              <input type="Date" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Confirm password</label>
              <input type="password" class="form-control shadow-none">
            </div>
          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-primary shadow-none">Register</button>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

