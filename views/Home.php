 <?php
	defined('BASEPATH') or exit('No direct script access allowed');
	$this->load->view('header');
	?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="utf-8">
 </head>

 <body>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/css/images.css" />


 	<div class="main-container">
 		<div class="container">
 			<div class="row">
 				<br>
 				<div class=" ">
 					<?php
						$data1['a'] = $a;
						$this->load->view('content', $a);
						?>

 				</div>
 			</div>
 		</div>
 	</div>



 </body>

 </html>

 <?php

	$this->load->view('footer');

	?>