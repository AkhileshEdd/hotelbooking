<!-- Footer Design -->
<div class="container-fluid bg-white mb-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb=2">HB Hotel</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Quis vitae quo ea magni corrupti, nisi voluptatum numquam eligendi voluptas. Odio.
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block mb-3 text-dark text-decoration-none">Home</a> <br>
      <a href="rooms.php" class="d-inline-block mb-3 text-dark text-decoration-none">Rooms</a> <br>
      <a href="facilities.php" class="d-inline-block mb-3 text-dark text-decoration-none">Facilities</a> <br>
      <a href="contact.php" class="d-inline-block mb-3 text-dark text-decoration-none">Contact Us</a> <br>
      <a href="about.php" class="d-inline-block mb-3 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-2">Follow Us</h5>
      <?php if ($contact_r['tw'] != '') {
        echo <<<data
                <a href="<?php echo $contact_r[tw] ?>" class="d-inline-block mb-2">
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
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  function alert(type, msg, position = 'body') {
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
                <strong  class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
    if (position == 'body') {
      document.body.append(element);
      element.classList.add('custom-alert');
    } else {
      document.getElementById(position).appendChild(element);
    }

    setTimeout(remAlert, 3000);
  }

  function remAlert() {
    document.getElementsByClassName('alert')[0].remove();
  }

  function setActive() {
    let navbar = document.getElementById('nav-bar');
    let a_tags = document.getElementsByTagName('a');

    for (i = 0; i < a_tags; i++) {
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if (document.location.href.indexOf(file_name) >= 0) {
        a_tags[i].classList.add('active');
      }
    }
  }

  let register_form = document.getElementById('register-form');

  register_form.addEventListener('submit', (e) => {
    e.preventDefault();

    let data = new FormData();

    data.append('name', register_form.elements['name'].value);
    data.append('email', register_form.elements['email'].value);
    data.append('phonenum', register_form.elements['phonenum'].value);
    data.append('address', register_form.elements['address'].value);
    data.append('pincode', register_form.elements['pincode'].value);
    data.append('dob', register_form.elements['dob'].value);
    data.append('pass', register_form.elements['pass'].value);
    data.append('cpass', register_form.elements['cpass'].value);
    data.append('profile', register_form.elements['profile'].files[0]);
    data.append('register', '');


    var myModal = document.getElementById('RegisterModal');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register.php", true);

    xhr.onload = function() {
      if(this.responseText == 'pass_mismatch'){
        alert('error', 'Password did not match');
      }
      else if(this.responseText == 'email_already'){
        alert('error', 'Email already exists');
      }
      else if(this.responseText == 'phone_already'){
        alert('error', 'Phone number already exists');
      }
      else if(this.responseText == 'inv_img'){
        alert('error', 'Invalid Image');
      }
      else if(this.responseText == 'upload_failed'){
        alert('error', 'Upload failed');
      }
      else if(this.responseText == 'ins_failed'){
        alert('error', 'Registration failed');
      }
      else{
        alert('success', 'Registration Successful');
        register_form.reset();
      }

    }

    xhr.send(data);
  })


  setActive();
</script>