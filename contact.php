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
        <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_r['iframe'] ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Address</h5>
        <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark">
        <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
        </a>
        <div class="row mb-4">
          <div class="col-lg-6">
            <h5 class="mt-3">Call Us</h5>
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
          <div class="col-lg-6">
            <h5 class="mt-3">Email</h5>
            <a href="mailto: <?php echo $contact_r['email'] ?> " class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-envelope-arrow-up"></i>  <?php echo $contact_r['email'] ?>
            </a>
          </div>
        </div>
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
        <a href=" <?php echo $contact_r['insta'] ?>" class="d-inline-block mb-2">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-instagram me-1"></i>Instagram</span>
        </a>
        <br>
        <a href=" <?php echo $contact_r['fb'] ?>" class="d-inline-block">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-facebook me-1"></i>Facebook</span>
        </a>
        <br>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 mb-5 px-4">       
      <div class="bg-white rounded shadow p-4">
        <form method="POST">
          <h5>SEND A MESSAGE</h5>  
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
         <textarea name="message" required class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
         </div>
         <button type="submit" name="send" onclick="" class="btn text-white custom-bg shadow-none mt-3">SEND</button>
       </form>
      </div>
    </div>
  </div>
</div>

  <?php 
  if(isset($_POST['send']))
  {
  $frm_data = filtration($_POST);

  $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
  $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
  $res = insert($q,$values,'ssss');
  if($res == 1)
  {
    alert('success','Mail sent!');
  }
  else{
    alert('error','Mail not sent!');
  }
  }
  ?>

<?php require('inc/footer.php'); ?>

<div class="container-fluid mt-5"></div>

</body>
</html>