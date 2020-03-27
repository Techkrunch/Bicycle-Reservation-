<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('header');
?>
<!DOCTYPE html>
<html lang="en">



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/css/image.css" />

</head>

<body>

    <?php foreach ($job_array as $employee) {
        echo '<br>';
    ?>
        <section id="basic-responsive-image">


            <h2 align="center"><?php echo $employee->bicycle_name ?></h2>
            <h1 align="center" style="color:red;"><?php echo $this->session->flashdata('msg_update'); ?></h1>
            <div class="container border">
                <img class="img_a" src="<?php echo $employee->bicycle_pic ?>" />
                <BR></BR>
                <?php
                if ($this->session->userData('fname')) { ?>
                    <form role="form" class="login-form" method="post" action="<?php echo base_url('index.php') ?>/welcome/apply">
                        <div class="form-group">
                            <div class="input-icon">
                                <input type="text" name="Mpesa" placeholder="MPESA CODE" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <input type="text" name="Bike_id" value="<?php echo $employee->id; ?>" hidden>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-common log-btn">Submit</button>
                    </form>
                <?php
                } else { ?>
                    <a href="<?php echo base_url('index.php') . '/welcome/login'; ?>">
                        <h4 style="color:red;"> Please Login to Continue</h4>
                    </a><?php
                    }
                        ?>



            </div>
        </section>

    <?php }

    ?>



</body>

</html>





<?php

$this->load->view('footer');

?>