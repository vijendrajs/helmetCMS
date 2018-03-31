<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $title = $edit['title'];
    $text = $edit['text'];
    $status = $edit['status'];
    $show_at_home=$edit['show_at_home'];
} else {
    $id = set_value('id');
    $title = set_value('title');
    $text = set_value('text');
    $status = set_value('status');
    $show_at_home=set_value('show_at_home');
    
}
?>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Plot and Bungalow Scheme Form</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/plot_and_bungalow_scheme/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
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
                            <label class="col-sm-3 control-label">TEXT</label>
                            <div class="col-sm-9 input-group">
                                <textarea name="text" class="ckeditor form-control" id="ckeditor" ><?php echo $text; ?></textarea>
                                <span class="text text-danger"><?php echo form_error('text'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9 input-group">

                                <?php
                                $options = array(
                                    '' => 'select',
                                    '1' => 'active',
                                    '2' => 'In-active'
                                );

                                echo form_dropdown('status', $options, $status, 'class="form-control"');
                                ?>

                                <span class="text text-danger"><?php echo form_error('status'); ?></span>
                            </div>
                        </div>



                              <div class="form-group">
                            <label class="col-md-3 control-label">Show At Home</label>
                            <div class="col-sm-6 input-group">
                          
                                
                                <input type="checkbox" name="show_at_home" id="show_at_home" value="1" <?php echo ($show_at_home == 1)? 'Checked' : '';?> />
                                

                                <span class="text text-danger"><?php echo form_error('show_at_home'); ?></span>


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
                                            <img style="width: 100px;height:100px" src="<?php echo base_url() ?>uploads/plot_and_bungalow_scheme/<?php echo $value ?>" alt="image">
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
                    url: '<?php echo site_url('admin/plot_and_bungalow_scheme/upload') ?>',
                    type: 'POST',
                    data: phase_attachment,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function (res) {

                        $('#loading').hide();
                        for (i = 0; i < Object.keys(res).length; i++) {
                            console.log(res[i]);


                            var str = '<div class="single_image_div"><a href="javascript:;" style="float: right;color: red;" class="delete_project"><i class="fa fa-trash"></i></a><img  style="float: left; width: 100px; height: 100px;" src="<?php echo base_url() ?>uploads/plot_and_bungalow_scheme/' + res[i] + '" title="' + res[i] + '"/><input type="hidden" name="temp_file[]" value="' + res[i] + '"></div>';
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