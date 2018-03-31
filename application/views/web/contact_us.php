<?php include('include/header.php'); ?>


<div class="blog">
    <div class="container">
        <ul class="tz-breadcrumbs">
            <li><a href="<?php echo site_url() ?>">Home</a></li>
            <li class="current">Contact</li>
        </ul>
        <div class="blog-container">
            <div class="row">
                <div class="col-md-4">

                    <!--Blog Sidebar-->
                    <div class="blog-sidebar">
                        <aside class="contact-info widget no-border">
                            <h4 class="widget-title">Contact info</h4>
                            <p><?php echo $this->contact_us['text']; ?></p>
                            <ul>
                                <li>
                                    <span>Address</span>
                                    <address><?php echo $this->contact_us['address']; ?></address>
                                </li>
                                <li>
                                    <span>Phone</span> <?php echo $this->contact_us['phone_no']; ?>
                                </li>
                                <li>
                                    <span>Email:</span> <?php echo $this->contact_us['email']; ?>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <!--End Blog Sidebar-->
                </div>
                <div class="col-md-8 tz-blog-content">
                    <h1 class="large-ttle">Contact Us</h1>
                    <div id="contact-form" class="contact-respond">
                        <h3 class="tz-title">Leave us a message</h3>
                        <form id="commentform" class="contact-form-7">
                            <p class="comment-for-author">
                                <input type="text" class="author" id='name' name='name' placeholder="Name">
                                <i class="fa fa-user"></i>
                            </p>
                            <p class="comment-for-email">
                                <input type="email" name='email' id='email' class="email" placeholder="Email">
                                <i class="fa fa-envelope"></i>
                            </p>
                            <p class="comment-for-url">
                                <input type="text" class="url" name='mobile' id='mobile' placeholder="Mobile" maxlength="10" onkeypress="return isNumberKey(event)">
                                <i class="fa fa-link"></i>
                            </p>
                            <p class="comment-for-content">
                                <textarea class="comment" name="message" id='message' placeholder="Message"></textarea>
                                <i class="fa fa-comment"></i>
                            </p>
                            <p class="comment-for-submit">
                                <input name="submit" type="submit" id="submit" class="submit sub" value="Submit form">
                                <span style="color: red;" id='status1'></span>
                            </p>
                        </form>
                    </div>
<!--                    <div class="map">
                        <h3 class="tz-title">Get in touch with us</h3>
                        <div class="map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d423284.59051352716!2d-118.41173249999996!3d34.020498899999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s123+Sky+Tower+address+name%2C+Los+Algeles%2C+USA%2C+Country%2C!5e0!3m2!1sen!2s!4v1430668657672"></iframe>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--Content end-->
<?php include('include/footer.php'); ?>

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
                    url: '<?php echo site_url('home/contact_info'); ?>',
                    data: $('#commentform').serialize(),
                    success: function (data) {
                        $('#status1').html(data);
                        alert(data);
                        if (data == 'Error !!') {
                            return false;
                        }
                        else {
                            $('#commentform')[0].reset();
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