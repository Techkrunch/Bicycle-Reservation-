<?php
$this->load->view('header');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>



  <div id="search-row-wrapper">
    <div class="container">
      <div class="search-inner">
        <h2 class="page-title">Contact Us</h2>
      </div>
    </div>
  </div>

  <section id="content">
    <div class="container">

      <h1 class="h1 text-center hidden" style="color:darkgreen;">
        <?php echo $this->session->flashdata('msg');  ?>
      </h1>

      <div class="row">
        <div class="col-lg-8 col-md-12 col-xs-12">
          <h2 class="title-2">
            Talk to Us
          </h2>




          <form role="form" class="login-form" method="post" action="contact_Mgs">
            <div class="form-group">
              <div class="input-icon">
                <i class="icon fas fa-user"></i>
                <input type="text" id="sender-email" class="form-control" name="fullname" placeholder="Username" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-icon">
                <i class="icon fas fa-email"></i>
                <input type="text" id="sender-email" class="form-control" name="email" placeholder="Username" required>
              </div>
            </div>


            <div class="form-group">
              <div class="input-icon">
                <i class="icon fas fa-pen"></i>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="" data-error="Please enter your subject">
              </div>
            </div>

            <div class="form-group">
              <div class="input-icon">
                <i class="icon fas fa-unlock-alt"></i>
                <textarea class="form-control" placeholder="Massage" name="msg" rows="7" data-error="Write your message" required=""></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-common log-btn">Submit</button>
          </form>
        </div>
        <div class="col-lg-4 col-md-12 col-xs-12">
          <h2 class="title-2">
            Contact Details
          </h2>
          <div class="information">
            <div class="contact-datails">
              <div class="icon">
                <i class="fas fa-map-marker icon-radius"></i>
              </div>
              <div class="info">
                <h3>Address</h3>
                <span class="detail">Main Office: NO.22-23 Street Name- City,Country</span>
                <span class="datail">Customer Center: NO.130-45 Streen Name- City, Country</span>
              </div>
            </div>
            <div class="contact-datails">
              <div class="icon">
                <i class="fas fa-phone icon-radius"></i>
              </div>
              <div class="info">
                <h3>Phone Numbers</h3>
                <span class="detail">Main Office: +880 123 456 789</span>
                <span class="datail">Customer Supprort: +880 123 456 789 </span>
              </div>
            </div>
            <div class="contact-datails">
              <div class="icon">
                <i class="fas fa-location-arrow icon-radius"></i>
              </div>
              <div class="info">
                <h3>Email Address</h3>
                <span class="detail">Customer
                  Support: info©mail.com</span>
                <span class="detail">Technical Support: support©mail.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="google-map-area">
    <div class="container-fluid padding-0">
      <div class="row">
        <div class="col-12">
          <object style="border:0; height: 450px; width: 100%;" data="https://maps.google.com/maps?q=royal%20media&t=&z=13&ie=UTF8&iwloc=&output=embed"></object>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
<?php
$this->load->view('footer');

?>