<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $facebook = $edit['facebook'];
    $google = $edit['google'];
    $twitter = $edit['twitter'];
    $linkedin = $edit['linkedin'];
    $youtube = $edit['youtube'];
    $whatsapp = $edit['whatsapp'];
} else {
    $id = set_value('id');
    $facebook = set_value('facebook');
    $google = set_value('google');
    $twitter = set_value('twitter');
    $linkedin = set_value('linkedin');
    $youtube = set_value('youtube');
    $whatsapp = set_value('whatsapp');
}
?>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Setting</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/setting/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />

                    <div class="form-body">


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Facebook</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="facebook" class="form-control" placeholder="facebook" value="<?php echo $facebook; ?>">
                                <span class="text text-danger"><?php echo form_error('facebook'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Google </label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="google" class="form-control" placeholder="google" value="<?php echo $google; ?>">
                                <span class="text text-danger"><?php echo form_error('google'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Twitter</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="twitter" class="form-control" placeholder="twitter" value="<?php echo $twitter; ?>">
                                <span class="text text-danger"><?php echo form_error('twitter'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Linkedin</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="linkedin" class="form-control" placeholder="linkedin" value="<?php echo $linkedin; ?>">
                                <span class="text text-danger"><?php echo form_error('linkedin'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">YouTube</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="youtube" class="form-control" placeholder="youtube" value="<?php echo $youtube; ?>">
                                <span class="text text-danger"><?php echo form_error('youtube'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Whatsapp</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="whatsapp" class="form-control" placeholder="whatsapp" value="<?php echo $whatsapp; ?>">
                                <span class="text text-danger"><?php echo form_error('whatsapp'); ?></span>
                            </div>
                        </div>


  <!--<label for="basicForm">Keeep the Image Width as <span style="color: red">300px</span> and Height as <span style="color: red">168px</span></label>-->

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

