   
<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>


<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Setting</div>
                      
            </div>


            <div class="portlet-body">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="table-scrollable">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                               
                            <th>Facebook</th>
                            <th>Google</th>
                            <th>Twitter</th>
                            <th>LinkedIn</th>
                            <th>YouTube</th>  
                                <th>option<th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($list) && !empty($list)) {
                                foreach ($list as $val) {
                                    ?>
                                    <tr class="odd gradeA">
                                       
                                        <td> <?php echo $val['facebook'];?></td>
                                        <td> <?php echo $val['google'];?></td>
                                        <td> <?php echo $val['twitter'];?></td>
                                        <td> <?php echo $val['linkedin'];?></td>
                                        <td> <?php echo $val['youtube'];?></td>
                                       <td class="center">
                                            <a href="<?php echo site_url('admin/setting/edit') . '?id=' . $val['id']; ?>" class="label label-primary"><i class="fa fa-pencil"></i></a>
                                           
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
