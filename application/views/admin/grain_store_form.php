<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $title = $edit['title'];
    $description = $edit['description'];
    $price = $edit['price'];
    $availability= $edit['availability'];
} else {
    $id = set_value('id');
    $title = set_value('title');
    $description = set_value('description');
    $price = set_value('price');
    $availability = set_value('availability');
}
?>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Grain Store</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/grain_store/save') ?>"enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />
                    <div class="form-body">




                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $title; ?>">
                                <span class="text text-danger"><?php echo form_error('title'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9 input-group">
                                <textarea name="description" class="ckeditor form-control" id="ckeditor" ><?php echo $description; ?></textarea>
                                <span class="text text-danger"><?php echo form_error('description'); ?></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Price</label>
                            <div class="col-sm-9 input-group">
                                 <input type="text" name="price" class="form-control" placeholder="Price" value="<?php echo $price; ?>">
                                <span class="text text-danger"><?php echo form_error('price'); ?></span>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Availability</label>
                            <div class="col-sm-9 input-group">

                                <?php
                                $options = array(
                                    '' => 'select',
                                    '1' => 'Yes',
                                    '2' => 'No'
                                );

                                echo form_dropdown('availability', $options, $availability, 'class="form-control"');
                                ?>

                                <span class="text text-danger"><?php echo form_error('availability'); ?></span>
                            </div>
                        </div>







                        <div class="form-group">
                            <label class="col-md-3 control-label">Images</label>
                            <div class="col-sm-6 input-group">
                                <input type="file"  name="images[]" id="images" multiple="">

                                <span class="text text-danger"><?php echo form_error('temp_file[]'); ?></span>


                            </div>
                        </div>



  <!--<label for="basicForm">Keeep the Image Width as <span style="color: red">300px</span> and Height as <span style="color: red">168px</span></label>-->



                        <div class="form-group">
                            <label class="col-md-3 control-label" style="visibility: hidden">Uploaded Images</label>
                            <div  class="col-sm-6 input-group" id="list">
                                <?php if (isset($photos) && !empty($photos)) { ?>
                                    <?php foreach ($photos as $key => $value) {
                                        ?>

                                        <div style="float: left; margin: 5px;" class="single_image_div">
                                            <a href="javascript:;" style="float: right;color: red;" class="delete_project"><i class="fa fa-trash"></i></a>
                                            <img style="width: 100px;height:100px" src="<?php echo base_url() ?>uploads/grain_store/<?php echo $value ?>" alt="image">
                                            <input type="hidden" name="temp_file[]" value="<?php echo $value ?>">
                                        </div> 

                                    <?php }
                                }
                                ?>
                            </div>
                        </div>

                        <div style="text-align: center;" class="form-actions">
                            <div class="col-md-12">
                                <button class="btn blue submit_btn" type="submit" name="submit">Submit</button>
                            </div>

                        </div>

                    </div>


            </div>



            </form>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>

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

            if (length >= 10) {
                alert("can't select more than 10 images");
            } else {
                $('#loading').show();

                var phase_attachment = new FormData($('form[name="basicForm"]')[0]);
                $.ajax({
                    url: '<?php echo site_url('admin/grain_store/upload') ?>',
                    type: 'POST',
                    data: phase_attachment,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function (res) {

                        $('#loading').hide();
                        for (i = 0; i < Object.keys(res).length; i++) {
                            console.log(res[i]);


                            var str = '<div class="single_image_div"><a href="javascript:;" style="float: right;color: red;" class="delete_project"><i class="fa fa-trash"></i></a><img  style="float: left; width: 100px; height: 100px;" src="<?php echo base_url() ?>uploads/grain_store/' + res[i] + '" title="' + res[i] + '"/><input type="hidden" name="temp_file[]" value="' + res[i] + '"></div>';
                            console.log(str);
                            $('#list').append(str);

                        }
                    }
                });
            }
        });

    });

</script>

<script>
    $(document).ready(function () {
        

       $(document).on("click",".delete_project", function(){
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