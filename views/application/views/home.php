<?php
$this->load->view('header');

$namel = $this->session->userdata('id');
if($namel>0){
    print_r($_SESSION);
    
}else{   
    //  echo "<script>javascript:alert('Please Log in');</script>";
    //   header('Location: '.base_url('index.php').'/admin/login');   exit;
    $uri=base_url('index.php/admin/login');
    echo "<script>javascript:alert('Please Login'); 
    window.location = '".$uri."'</script>";        
}
 

$this->load->view('footer');
?><br>
<a href="<?php echo base_url('index.php').'/admin/logout'; ?>"><button class="form-control">Sign out</button></a> 
        <hr>
   asasas