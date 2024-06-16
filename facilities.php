<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL BOOKING - FACILITIES </title>
    <?php require('inc/links.php'); ?>
    <style>
      .pop:hover{
        border-top-color: var(--teal) !important;
        transform:scale(1.03);
        transition:all 0.3s;
      }
    </style>
</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
    <h2 class="fw-bold text-center">OUR FACILITIES</h2>
    <div class="h-line bg-darK"><hr style="height:2px;"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      Expedita delectus odio itaque <br>error labore nostrum quod 
      incidunt repellendus quo architecto!
    </p>
</div>

<!-- Our Facilities -->
<div class="container">
  <div class="row">
  <?php
    $res = selectALL('facilities');
    $path = FACILITIES_IMG_PATH;

    while($row = mysqli_fetch_assoc($res))
    {
      echo<<<data
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
              <div class="d-flex align-items-center mb-2">
                <img src="$path$row[icon]" class="ms-3" width="80px">
                <h5 class="m-0 ms-3 ps-4">$row[name]</h5>
              </div>
              <p>
                $row[description]
              </p>
            </div>
          </div>
      data;
    }
  ?>

</div>

<?php require('inc/footer.php'); ?>

<div class="container-fluid mt-5"></div>

</body>
</html>