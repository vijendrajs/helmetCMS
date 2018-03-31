<?php include('include/header.php'); ?>
<!--header end--> 

<!--slider--> 
<div class="banner">
    <img src="images/career.jpg" class="img-responsive" alt=""/> </div>
<!--main head end-->
<!--Content-->



<div class="float main content">
    <div class="container">



        <?php if (isset($why_us) && !empty($why_us)) { ?>
            <h3 class="profile">Why Us</h3>
            <p class=""><?php echo $why_us[0]['description'] ?></p><br>

        <?php } ?>
    </div>
</div>

<div class="float main content">
    <div class="container">
        <h3 class="profile">Current Openings</h3>
        <?php
        if (isset($openings) && !empty($openings)) {
            $i = 1;
            foreach ($openings as $key => $val) {
                ?>
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse_<?php echo $i;?>"><?php echo $val['title']; ?></a></h4><span class="plus"><i class="fa fa-plus"></i></span>
                        </div>
                        <div id="collapse_<?php echo $i;?>" class="panel-collapse collapse">
                            <div class="panel-body">

                                <p class="req_qua">Required Qualification</p>
                                <ul>

                                    <li><?php echo $val['description']; ?></li>

                                </ul>
                                <p class="req_qua">Profile</p>
                                <ul>
                                    <li><?php echo $val['profile']; ?></li>


                                </ul>

                                <p class="req_qua">Salary</p>
                                <ul>
                                    <li><?php echo $val['salary']; ?></li>

                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
        }
        ?>

    </div>
</div>

<div class="float main content">
    <div class="container">
        <h3 class="profile">Interviews</h3>
        <?php
        if (isset($interviews) && !empty($interviews)) {
            $i=1;
            foreach ($interviews as $key => $val) {
                ?>
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion4" href="#abc_<?php echo $i;?>"><?php echo $val['title'] ?></a></h4><span class="plus"><i class="fa fa-plus"></i></span>
                        </div>
                        <div id="abc_<?php echo $i;?>" class="panel-collapse collapse">
                            <div class="panel-body">

                                <p class="req_qua">Required Qualification</p>
                                <ul>
                                    <li><?php echo $val['description'] ?></li>

                                </ul>
                                <p class="req_qua">Profile</p>
                                <ul>
                                    <li><?php echo $val['profile'] ?></li>


                                </ul>

                                <p class="req_qua">Salary</p>
                                <ul>
                                    <li><?php echo $val['salary'] ?></li>

                                </ul>

                                <p class="req_qua">Date</p>
                                <ul>
                                    <li><?php echo $val['date'] ?></li>

                                </ul>

                                <p class="req_qua">Time</p>
                                <ul>
                                    <li><?php echo $val['time'] ?></li>

                                </ul>



                            </div>
                        </div>
                    </div>

                </div>
            <?php
            
            $i++;
            }
        }
        ?>

    </div>
</div>


<!--Content end-->

<!--Footer-->
<?php include('include/footer.php'); ?>
<!--Footer end-->

</body>
</html>