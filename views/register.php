<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('header');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script type='text/javascript' src="<?php echo base_url(); ?>assets/css/login.css" language="javascript"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<body>


    <div id="search-row-wrapper">
        <div class="container">
            <div class="search-inner">
                <h2 class="page-title">Create Account</h2>
            </div>
        </div>
    </div>




    <section id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <a href="<?php echo base_url('index.php') . '/welcome/login'; ?>">
                        <h1><?php echo $this->session->flashdata('msg_register'); ?></h1>
                    </a>
                    <div class="page-login-form box ">
                        <h3>
                            Sign Up
                        </h3>
                        <form role="form" class="login-form" method="post" action="register_user">
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="icon fas fa-user"></i>
                                    <input type="text" name="fname" class="form-control" id="validationCustom01" placeholder="First name" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="icon fas fa-user"></i>
                                    <input type="text" name="lname" class="form-control" id="validationCustom02" placeholder="Last name" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="icon fas fa-envelope"></i>
                                    <input type="email" name="email" class="form-control" id="validationCustomUsername" placeholder="Johndoe@gmail.com" aria-describedby="inputGroupPrepend" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="icon fas fa-map-marker"></i>
                                    <input type="text" name="city" class="form-control" id="validationCustom03" placeholder="City" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="icon fas fa-calendar"></i> <input type="date" name="dob" class="form-control" id="validationCustom04" placeholder="State" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="icon fas fa-phone"> </i>
                                    <input type="number" name="phone" class="form-control" id="validationCustom05" placeholder="+2547 123 456" required>
                                </div>
                            </div>

                            <div class="form-group"> <i class="icon fas fa-genderless"> </i> <label for="validationCustom01"> Gender</label>
                                <div class="input-icon">

                                    <select class="form-control" name="gender" id="validationCustom01" required>
                                        <option></option>
                                        <option value="male">MALE</option>
                                        <option value="female">FEMALE</option>
                                        <option value="others">OTHERS</option>
                                    </select> </div>
                            </div>

                            <div class="form-group">
                                <i class="icon fas fa-graduation-cap"> </i><label for="validationCustom02"> Education Qualification</label>
                                <div class="input-icon">


                                    <select class="form-control" name="educational_background" id="validationCustom02" placeholder="Education" required>
                                        <option></option>
                                        <option value="Highschool">Highschool</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Degree">Degree</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Phd">PHD</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="icon fas fa-unlock-alt"></i>
                                    <input type="password" name="password" class="form-control" id="validationCustomUsername" placeholder="****" aria-describedby="inputGroupPrepend" required>

                                </div>
                            </div>

                            <button class="btn btn-primary log-btn" type="submit">Register</button>
                        </form>
                        <ul class="form-links">
                            <li class="float-center"><a href="<?php echo base_url('index.php') ?>/welcome/login">Have an account?</a></li>
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