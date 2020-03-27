<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/header');
?>

<p align="center" style="color:blue; font-size:30px;"> <?php echo $this->session->flashdata('msg_register'); ?></p>
<div align="center">
    <p style="color:blue; font-size:30px;" id="demo"></p>
    <button class="btn btn-danger btn-post" onclick="myFunction()">Get todays Sales</button>
</div>

<hr>
<table id="customers">
    <thead>
        <tr style="font-size:20px;">
            <th>User_id</th>
            <th>Bicycle_id</th>
            <th>Payment Code</th>
            <th>Booking Status</th>


        </tr>
    </thead>
    <tbody>
        <?php
        if (is_array($aa) || is_object($aa)) {
            foreach ($aa as $row) {
        ?>
                <tr>
                    <td><?php echo $row->applicant_id ?></td>
                    <td><?php echo $row->cycle_id ?></td>
                    <td><?php echo $row->application_status ?></td>
                    <td><?php echo $row->payment_code ?></td>

            <?php  }
        } else {
            echo "<h3 align='center' style='color:red;'>No data to display</h3>";
        }
            ?>

    </tbody>

</table>





<script>
    function myFunction() {
        var x = document.getElementById("customers").rows.length;
        document.getElementById("demo").innerHTML = 'Todays sales Equals  ' + (x - 1) * 50 + ' Kshs';
    }
</script>

</main>

</div>


</body>

</html>
<?php
//  No footer to import
?>