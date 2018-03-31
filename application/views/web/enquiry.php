<?php include('include/header.php'); ?>
<!--slider--> 
<div class="banner">
    <img src="<?php echo base_url() ?>web_theme/images/enquiry1.jpg" class="img-responsive" alt=""/> </div>
<!--main head end-->
<!--Content-->





<div class="float main content">
    <div class="container">
        <h3 class="profile">Enquiry Form</h3><br>

        <div class="row">
            <div class="col-lg-6">
                <div class="enquiry">
                    <form name="enquiry_form" method="post" action="" id="enquiry_form">
                        <div id="status1" style="color: red;"></div>
                        <div class="form-group">
                            <input type="text" placeholder="Name" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Mobile" maxlength="10" id="mobile" name="mobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" name="message" id="message" rows="5" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn sub">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo base_url() ?>web_theme/images/enquiry.jpg" class="img-responsive" title="" alt="" />
            </div>
        </div>
    </div>
</div>
</div>


<!--Content end-->

<!--Footer-->
<?php include('include/footer.php'); ?>

<!--Footer end-->


<script type="text/javascript">

    $(document).ready(function () {
        $('.sub').click(function () {
            var err = '';
            $('#name').css('border', '1px solid #CCCCCC');
            $('#email').css('border', '1px solid #CCCCCC');
            $('#mobile').css('border', '1px solid #CCCCCC');
            $('#message').css('border', '1px solid #CCCCCC');


            var reg = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i;

            var temp = $('#name').val();
            if (temp == '') {
                err += 'Please Enter  Name \n';
                $('#name').css('border', '1px solid red');
            }
            var temp = $('#email').val();
            if (temp == '') {
                err += 'Please Enter Your Email \n';
                $('#email').css('border', '1px solid red');
            }


            var temp = $('#mobile').val();
            if (temp == '') {
                err += 'Please Enter Mobile Number \n';
                $('#mobile').css('border', '1px solid red');
            }

            var temp = $('#message').val();
            if (temp == '') {
                err += 'Please Enter Message \n';
                $('#message').css('border', '1px solid red');
            }

            if (err != '') {
                alert(err);
                return false;
            } else {
                $('#status1').html('Please wait ......');
                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url('home/enquiry_info'); ?>',
                    data: $('#enquiry_form').serialize(),
                    success: function (data) {
                         $('#status1').html(data);
                        alert(data);
                         if (data == 'Error !!') {
                            return false;
                        }
                        else{
                                $('form[name="enquiry_form"]')[0].reset();
                        }

                    }
                });
                return false;
            }

        });
    });

    function isNumberKey(e) {
        var unicode = e.charCode ? e.charCode : e.keyCode
        if (unicode != 8)
        {
            if ((unicode < 48 || unicode > 57) && unicode != 9 && unicode != 13 && unicode != 15 && unicode != 14 && unicode != 127 && (unicode < 35 || unicode > 40) && unicode != 46)
                return false
        }
    }
</script>



</body>
</html>