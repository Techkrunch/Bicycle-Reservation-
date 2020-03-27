<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('admin/header');
?>

<div class="flex-grid">
    <div>
        <h2 align="center"><?php echo $this->session->flashdata('msg_register'); ?></h2>

        <div class="form-style-8">
            <h2 align="center">ADD A BICYCLE</h2><br>

            <?php
            echo form_open_multipart('welcome/uploadPic');
            echo '  <input type="text" name="Bicycle_name" placeholder="Bicycle Name" />';
            echo ' <input type="number" name="price" placeholder="Bicycle Price per hour" />';
            echo form_upload(['name' => 'userfile', 'value' => 'Save']);
            echo form_error('userfile', '<div class="text-danger">', '</div>');
            echo form_submit(['name' => 'submit', 'value' => 'SAVE Bicycle']);
            echo form_close();
            ?>


        </div>
    </div>
</div>
<script type="text/javascript">
    //auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight) + "px";
    }
</script>

<hr>
<table id="customers">
    <thead>
        <tr style="font-size:20px;">
            <th>Cycle Image</th>
            <th>Cycle Name</th>
            <th>Cycle Price</th>
            <th>State</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($a as $row) { ?>
            <tr class="del">
                <td><img class="img-polaroid" src="<?php echo $row->bicycle_pic; ?>" height="100px" width="100px"></td>
                <td><?php echo $row->bicycle_name ?></td>
                <td><?php echo $row->cycle_price ?></td>
                <td><?php echo $row->bicycle_state ?></td>

            </tr>
        <?php  }
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