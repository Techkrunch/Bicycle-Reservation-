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
        <h2 class="page-title">Login to account</h2>
      </div>
    </div>
  </div>


  <section id="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="page-login-form box">
            <h3>
              Login
            </h3>
            <form role="form" class="login-form" method="post" action="submitPassword">
              <div class="form-group">
                <div class="input-icon">
                  <i class="icon fas fa-user"></i>
                  <input type="text" id="sender-email" class="form-control" name="email" placeholder="Username" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-icon">
                  <i class="icon fas fa-unlock-alt"></i>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
              </div>
              <button type="submit" class="btn btn-common log-btn">Submit</button>
            </form>
            <ul class="form-links ">
              <li class="float-center"><a href="<?php echo base_url('index.php') ?>/welcome/register">Don't have an account?</a></li> 
            </ul>
          </div>
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