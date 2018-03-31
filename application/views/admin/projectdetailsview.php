<?php include('include/header.php'); ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $image = $edit['images'];
    $project_details = $edit['project_details'];
    $project_info = $edit['project_info'];
    $projects_table = $edit['projects_table'];
    $available = $edit['available'];
    $size = $edit['size'];
    $desc = $edit['description'];
    $titlenew=$edit['title_new'];
    $photo = explode(',', $edit['images']); //for shows images
} else {


    $id = set_value('id');
    $image = set_value('temp_file');
    $project_details = set_value('project_details');
    $project_info = set_value('project_info');
    $projects_table = set_value('projects_table');
    $size = set_value('size');
    $desc = set_value('descriptn');
    $available = set_value('availableno');
    $titlenew=set_value('title_new');
    $photo = array();
}

if (isset($_GET['projects_table']) && !empty($_GET['projects_table'])) {
    $projects_table = $_GET['projects_table'];
}

if (isset($_GET['project_details']) && !empty($_GET['project_details'])) {
    $project_details = $_GET['project_details'];
}
?>


<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i> Projects Details Forms</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/projectdetails/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />

                    <div class="form-body">
                        <div class="form-group">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Project Name</label>
                                <div class="col-sm-6 input-group">
                                    <select name="projects_table" class="form-control">
                                        <?php foreach ($pn_name as $pname) { ?>
                                            <option value="<?php echo $pname['id']; ?>" <?php echo ($pname['id'] == $projects_table) ? 'selected' : ''; ?>> <?php echo $pname['project_name']; ?> </option>
                                        <?php }
                                        ?>

                                    </select>

                                </div>
                            </div>

                            <label class="col-md-3 control-label">Project Details</label>
                            <div class="col-sm-6 input-group">
                                <select name="project_details" class="form-control">
                                    <?php foreach ($type_array as $type) { ?>
                                        <option value="<?php echo $type['id']; ?>"<?php echo ($type['id'] == $project_details) ? 'selected' : ''; ?>> <?php echo $type['details']; ?>  </option>
                                    <?php }
                                    ?>

                                </select>

                            </div>
                        </div>


                        <div class="form-group" style="<?php echo ($project_details == 2) ? 'display:none;' : ''; ?>">
                            <label class="col-md-3 control-label">Project Info</label>
                            <div class="col-sm-6 input-group">
                                <select name="project_info" class="form-control">
                                    <?php foreach ($info as $in) { ?>
                                        <option value="<?php echo $in['id']; ?>" <?php echo ($in['id'] == $project_info) ? 'selected' : ''; ?>> <?php echo $in['project_dtls']; ?>  </option>
                                    <?php }
                                    ?>

                                </select>

                            </div>
                        </div>


                        <!--<div class="form-group">
                                                    <label class="col-md-3 control-label">Type</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="text"  name="type" class="form-control" value="">
                        
                                                    </div>
                                                </div>  -->
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-sm-6 input-group">
                                <input type="text"  name="title_new" class="form-control" value="<?php echo $titlenew ?>">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Size</label>
                            <div class="col-sm-6 input-group">
                                <input type="text"  name="size" class="form-control" value="<?php echo $size ?>">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9 input-group">
                                <textarea name="descriptn" class="ckeditor form-control" id="ckeditor"><?php echo $desc ?></textarea>
                                <span class="text text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Available No</label>
                            <div class="col-sm-6 input-group">
                                <input type="text"  name="availableno" class="form-control" value=" <?php echo $available ?> ">




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
                                            <img style="width: 100px;height:100px" src="<?php echo base_url('uploads/projectdetailsimg/' . $value) ?>" alt="image">
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
                url: '<?php echo site_url('admin/projectdetails/upload') ?>',
                type: 'POST',
                data: phase_attachment,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (res) {

                    $('#loading').hide();
                    for (i = 0; i < Object.keys(res).length; i++) {
                        console.log(res[i]);


                        var str = '<div class="single_image_div"><img  style="float: left; width: 100px; height: 100px;" src="<?php echo base_url() ?>uploads/projectdetailsimg/' + res[i] + '" title="' + res[i] + '"/><input type="hidden" name="temp_file[]" value="' + res[i] + '"><a href="javascript:;" class="delete_project">Delete</a></div>';
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