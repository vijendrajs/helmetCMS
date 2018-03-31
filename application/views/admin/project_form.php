<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $image = $edit['images'];
    $project_name = $edit['project_name'];
    $type = $edit['type'];
    $size = $edit['size'];
    $description = $edit['description'];
    $available = $edit['available'];
    $photo = explode(',', $edit['images']); //for shows images
    $price = $edit['price'];
} else {
    $id = set_value('id');
    $image = set_value('temp_file');
    $project_name = set_value('project_name');
    $type = set_value('type');
    $size = set_value('size');
    $description = set_value('desc');
    $available = set_value('availableno');
    $price = set_value('price');
    $photo = array();
}
?>


<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i> Project Forms</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/products/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />

                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Type</label>
                            <div class="col-sm-6 input-group">
                                <select name="project_type" class="form-control">
                                    <?php foreach ($type_array as $pro_type) {
                                        ?>
                                        <option value="<?php echo $pro_type['id']; ?>" <?php echo ($pro_type['id'] == $type) ? 'selected' : ''; ?>> <?php echo $pro_type['project_type']; ?> </option>

                                    <?php }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-sm-6 input-group">
                                <input type="text"  name="project_name" class="form-control" value="<?php echo $project_name; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Price</label>
                            <div class="col-sm-6 input-group">
                                <input type="text"  name="price" class="form-control" value="<?php echo $price; ?>">
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <label class="col-md-3 control-label">Size</label>
                            <div class="col-sm-6 input-group">
                                <input type="text"  name="size" class="form-control" value="<?php echo $size; ?>">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9 input-group">
                                <textarea name="description" class="ckeditor form-control" id="ckeditor" ><?php echo $description; ?></textarea>
                                <span class="text text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Images</label>
                            <div class="col-sm-6 input-group">
                                <input type="file"  name="images[]" id="images" multiple="">

                                <span class="text text-danger"><?php echo form_error('temp_file'); ?></span>


                            </div>
                        </div>



  <!--<label for="basicForm">Keeep the Image Width as <span style="color: red">300px</span> and Height as <span style="color: red">168px</span></label>-->



                        <div class="form-group">
                            <label class="col-md-3 control-label" >Uploaded Images</label>
                            <div  class="col-sm-6 input-group" id="list">
                                <?php
                                if (isset($photo) && !empty($photo)) {

                                    foreach ($photo as $value) {
                                        ?> 

                                        <div style="float: left; margin: 5px;" class="single_image_div">
                                            <img style="width: 100px;height:100px" src="<?php echo base_url('uploads/projectimg/' . $value) ?>" alt="image">
                                            <input type="hidden" name="temp_file[]" value="<?php echo $value; ?>">
                                            <a href="javascript:;" class="delete_project">Delete</a>
                                        </div> 

                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group" style="display:none">
                        <label class="col-md-3 control-label">Available No</label>
                        <div class="col-sm-6 input-group">
                            <input type="text"  name="availableno" class="form-control" value="<?php echo $available; ?>">




                        </div>
                    </div>

                    <div style="text-align: center;" class="form-actions"> 
                        <div class="col-md-12">
                            <button class="btn blue submit_btn" type="submit" name="submit">Submit</button>
                        </div>

                    </div>

            </div>

            </form>
        </div>




    </div>
    <!-- END SAMPLE FORM PORTLET-->
</div>

</div> 

<!-- END PAGE CONTENT-->


<!-- END CONTENT -->

<!-- END CONTAINER -->




<?php include('include/footer.php'); ?>

<script>

    $(document).ready(function () {


        $('#images').change(function () {

            var length = $('.single_image_div').length;

//            if (length >= 1) {
//                alert("can't select more than 1 images");
//            } else {
            $('#loading').show();

            var phase_attachment = new FormData($('form[name="basicForm"]')[0]);
            $.ajax({
                url: '<?php echo site_url('admin/products/upload') ?>',
                type: 'POST',
                data: phase_attachment,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (res) {

                    $('#loading').hide();
                    for (i = 0; i < Object.keys(res).length; i++) {
                        console.log(res[i]);


                        var str = '<div class="single_image_div"><img  style="float: left; width: 100px; height: 100px;" src="<?php echo base_url() ?>uploads/projectimg/' + res[i] + '" title="' + res[i] + '"/><input type="hidden" name="temp_file[]" value="' + res[i] + '"><a href="javascript:;" class="delete_project">Delete</a></div>';
                        console.log(str);
                        $('#list').append(str);

                    }
                }
            });

        });

    });

</script>

<script>
    $(document).ready(function () {


        $(document).on("click", ".delete_project", function () {
            var r = "Are you sure you want to delete this Image. This can't be undone.";
            if (confirm(r)) {

                $(this).closest('.single_image_div').remove();
            }

        });

    });
</script>
<style>
    .single_image_div{float: left; margin: 5px;}
    .single_image_div a{display: none;margin-left: -15px;}
    .single_image_div:hover a{display: block;}

</style>