   
<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>


<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Banner</div>
                <a href="<?php echo site_url('admin/banner/save') ?>" style="float: right;" class="btn btn-primary">Add</a>
            </div>


            <div class="portlet-body">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="table-scrollable">
                    <table class="table" id="table2">
                        <thead>
                            <tr>

                                <th>Status</th>  
                                <th>Image</th>
                                <th>option<th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($list) && !empty($list)) {
                                foreach ($list as $val) {
                                
                                    ?>
                                    <tr class="odd gradeA">

                                        <td><?php echo ($val['status'] == '1') ? 'Active' : 'In-active'; ?></td>
                                        <td><img style="width: 100px;height:100px" src="<?php echo base_url('uploads/banner/' . $val['images']) ?>" alt="image"></td>
                                        <td class="center">
                                            <a href="<?php echo site_url('admin/banner/edit') . '?id=' . $val['id']; ?>" class="label label-primary"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Are you sure?')" href="<?php echo site_url('admin/banner/delete') . '?id=' . $val['id']; ?>" class="label label-danger"><i class="fa fa-trash-o"></i></a>
                                        </td>

                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div>

        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>
