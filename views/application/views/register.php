<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script type='text/javascript' src="<?php echo base_url(); ?>assets/css/login.css" language="javascript"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>


<div class="card text-center">
  <h5 class="card-header text-center">Register</h5>
  <div class="card-body"> 
    <form class="needs-validation" method="post" action="register_user"  >
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text"name="fname" class="form-control" id="validationCustom01" placeholder="First name" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" name="lname"class="form-control" id="validationCustom02" placeholder="Last name" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="email" name="email"class="form-control" id="validationCustomUsername" placeholder="Johndoe@gmail.com" aria-describedby="inputGroupPrepend" required>
                   
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom03">City</label>
                <input type="text" name="city" class="form-control" id="validationCustom03" placeholder="City" required>
                 
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom04">DOB</label>
                <input type="date" name="dob" class="form-control" id="validationCustom04" placeholder="State" required>
              
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom05">Phone</label>
                <input type="number"  name="phone" class="form-control" id="validationCustom05" placeholder="+2547 123 456" required>
                
            </div>
        </div>


        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Gender</label>
                <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>-->
                <select class="form-control" name="gender" id="validationCustom01" placeholder="First name" required>
                    <option></option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                    <option value="others">OTHERS</option>
                </select>
                
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Educational Level</label>
                <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="Highest Level" required> -->
                <select class="form-control" name="educational_background" id="validationCustom02" placeholder="Highest Level" required>
                    <option></option>
                    <option value="Highschool">Highschool</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Degree">Degree</option>
                    <option value="Masters">Masters</option>
                    <option value="Phd">PHD</option>
                </select>
                 
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Password</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control" id="validationCustomUsername" placeholder="****" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>


            <button class="btn btn-primary " type="submit">Submit form</button>
    </form>
  
    </div>
</div> 
     



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>