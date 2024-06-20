<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?> 
    <title><?php echo $settings_r['site_title'] ?> - ROOMS </title>
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
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
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

        <div class="col-lg-9 col-md-12 px-4" id="rooms-data">
        
        </div>

    </div>    
</div>

<script>

    let rooms_data = document.getElementById('rooms-data');

    function fetch_rooms(){
        let xhr = new XMLHttpRequest();
        xhr.open("GET","ajax/rooms.php?fetch_rooms",true);

        xhr.onprogress =function(){

        }

        xhr.onload =function(){
            rooms_data.innerText = this.responseText;
        }
        xhr.send();
    }
    fetch_rooms();

</script>

<?php require('inc/footer.php'); ?>
</body>
</html>