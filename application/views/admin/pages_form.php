<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $title = $edit['title'];
    $description = $edit['description'];
} else {
    $id = set_value('id');
    $title = set_value('title');
    $description = set_value('description');
}
?>


<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Pages</div>                        
            </div>
            <div class="portlet-body form">
                <form id="form_sample_1" name="basicForm" action="<?php echo site_url('admin/pages/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />
                    <div class="form-body">




                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $title; ?>">
                                <span class="text text-danger"><?php echo form_error('title'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>

                            <div class="col-sm-9 input-group">
                                <textarea class="ckeditor form-control" id="ckeditor" name="description" rows="6" ><?php echo $description; ?></textarea>
                                <span class="text text-danger"><?php echo form_error('description'); ?></span>
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

<script>
    $(document).ready(function () {
        // FormValidation.init();
    });
</script>

