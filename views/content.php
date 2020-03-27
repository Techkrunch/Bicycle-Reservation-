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

    <?php foreach ($a as $employee) {
        if (($employee->bicycle_state) == 'available') {
    ?>
            <section id="basic-responsive-image">
                <h2><?php echo $employee->bicycle_name ?></h2>
                <div class="container border">

                    <a href="<?php echo base_url('index.php/welcome/cycle_get') . '/' . $employee->id; ?>">
                        <img src="<?php echo $employee->bicycle_pic ?>" /></a>
                </div>
            </section>

    <?php } else {
        }
    } ?>



</body>

</html>