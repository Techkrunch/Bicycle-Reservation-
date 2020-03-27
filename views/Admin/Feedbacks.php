<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/header');
?>



<table id="customers">
    <thead>
        <tr style="font-size:30px;">
            <th>#</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
    </thead>

    <?php
    foreach ($a as $row) { ?>
        <tr>
            <td> <?php echo $row->id; ?> </td>
            <td> <?php echo $row->email; ?> </td>
            <td> <?php echo $row->subject; ?> </td>
            <td> <?php echo $row->msg; ?> </td>
        </tr>
    <?php  }
    ?>


</table>


</main>

</div>








</body>

</html>
<?php
//  No footer to import
?>