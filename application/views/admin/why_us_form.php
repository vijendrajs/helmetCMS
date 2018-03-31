<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $description = $edit['description'];
} else {
    $id = set_value('id');
    $description = set_value('description');
}
?>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Why Us?</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/why_us/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
                    <div class="form-body">

                    

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9 input-group">
                                <textarea name="description" class="ckeditor form-control" id="ckeditor" ><?php echo $description; ?></textarea>
                                <span class="text text-danger"><?php echo form_error('description'); ?></span>
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

    </div>

</div> 



<?php include('include/footer.php'); ?>
