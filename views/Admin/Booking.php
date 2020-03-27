<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/header');
?>

<p align="center" style="color:blue; font-size:30px;"> <?php echo $this->session->flashdata('msg_register'); ?></p>
<hr>
<table id="customers">
    <thead>
        <tr style="font-size:20px;">
            <th>User_id</th>
            <th>Bicycle_id</th>
            <th>Payment Code</th>
            <th>Booking Status</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php

        if (is_array($a) || is_object($a)) {
            foreach ($a as $row) {
        ?>

                <tr>

                    <td><?php echo $row->user ?></td>
                    <td><?php echo $row->bicycle ?></td>
                    <td><?php echo $row->state ?></td>
                    <td><?php echo $row->Mpesa ?></td>
                    <td><?php
                        if (($row->state) == 'pending') {
                        ?> <a class="btn btn-danger btn-post" href="<?php echo base_url('index.php') . '/welcome/updatedata/' . $row->id; ?>"><span class="fas fa-sign-in-alt"></span>&nbsp;Approve</a>
                        <?php
                        } else if (($row->state) == 'approved') {
                        ?> <p class="">Approved</p>
                        <?php
                        }
                        ?>




                    </td>
            <?php  }
        } else {
            echo "<h3 align='center' style='color:red;'>No data to display</h3>";
        }
            ?>


    </tbody>

</table>


</main>

</div>


</body>

</html>
<?php
//  No footer to import
?>