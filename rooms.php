<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL BOOKING - ROOMS</title>
    <?php require('inc/links.php'); ?>
</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
    <h2 class="fw-bold text-center">ROOMS</h2>
    <div class="h-line bg-darK"><hr style="height:2px;"></div>

</div>

<!-- Rooms -->
<div class="container-fluid mb-4">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2"> Filters</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filtersDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filtersDropdown">
                        <div class="border bg-light p-3 rounded mb-6">
                            <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                            <label class="form-label">Check-In</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="form-label" style="font: weight 500px;">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="border bg-light p-3 rounded mb-6 mt-2">
                            <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                            <div class="mb-2">
                            <input type="checkbox" id="f1" class="form-chech-input shadow-none me-1">                
                            <label class="form-check-label" for="f1">Facility one</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="f2" class="form-chech-input shadow-none me-1">                
                            <label class="form-check-label" for="f2">Facility two</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="f3" class="form-chech-input shadow-none me-1">                
                            <label class="form-check-label" for="f3">Facility three</label>
                        </div>
                        </div>
                        <div class="border bg-light p-3 rounded mb-6 mt-2">
                            <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                            <div class="d-flex">
                                <div class="me-2">
                                    <label class="form-clabel">Adults</label>                
                                    <input type="number" class="form-control shadow-none">                
                                </div>
                            <div class="">
                                <label class="form-clabel">Adults</label>                
                                <input type="number" class="form-control shadow-none">                
                            </div>
                            </div>                        
                        </div>        
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow"">
            <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-2"><img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3"><h5 class="mb-3">Simple Room Name</h5>

            <div class="features mt-4 mb-3">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Bathroom</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
            </div>

            <div class="facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">WiFi</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Televisn</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room heater</span>
            </div>

            <div class="guests mt-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Children</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
            </div>

            </div>

            <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 Per night</h6>
            <a href="#" class="btn btn-sm w-100 custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>      
            </div>
            </div>
            </div>
            <div class="card mb-4 border-0 shadow"">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-2"><img src="images/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3"><h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mt-4 mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">2 Rooms</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Bathroom</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
                        </div>

                        <div class="facilities mb-3">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">WiFi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Televisn</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room heater</span>
                        </div>

                        <div class="guests mt-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Children</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                    <h6 class="mb-4">₹200 Per night</h6>
                    <a href="#" class="btn btn-sm w-100 custom-bg shadow-none mb-2">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>      
                    </div>
                </div>
            </div>
            <div class="card mb-4 border-0 shadow"">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-2"><img src="images/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3"><h5 class="mb-3">Simple Room Name</h5>

                        <div class="features mt-4 mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">2 Rooms</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Bathroom</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
                        </div>

                        <div class="facilities mb-3">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">WiFi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Televisn</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">Room heater</span>
                        </div>

                        <div class="guests mt-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">5 Adults</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">4 Children</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">1 Balcony</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">3 Sofa</span>
                        </div>

                    </div>

                    <div class="col-md-2 text-center">
                    <h6 class="mb-4">₹200 Per night</h6>
                    <a href="#" class="btn btn-sm w-100 custom-bg shadow-none mb-2">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>      
                    </div>
                </div>
            </div> 
        </div>

    </div>    
</div>

<?php require('inc/footer.php'); ?>

<div class="container-fluid mt-5"></div>

</body>
</html>