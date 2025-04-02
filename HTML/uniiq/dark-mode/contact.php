<?php $pageId = 'contact'; ?>
<?php
include("header.php");
?>

 


        <!-- Main -->
        <main class="d-flex justify-content-center">
            <div class="item-wrapper">

                <div class="caption">

                    <h2>Get In Touch <br>Let’s Work <span>Together!</span></h2>

                </div>

                <div class="about-image d-flex justify-content-center">

                    <img src="../assets/images/contact.png" alt="">

                </div>

                <div class="form-content row justify-content-between">

                    <form class="d-flex flex-column col-md-6" method="POST" action="../assets/js/mailer.php" data-aos="fade-up" data-aos-duration="1500">
                        <div class="alert alert-success messenger-box-contact__msg" style="display: none;" role="alert">

                            Your message was sent successfully.

                        </div>

                        <input placeholder="Name" name="name" id="full-name">
                        <input type="tel" id="phone" name="phone" placeholder=" Phone No." required>
                        <!-- <input placeholder="Email" name="email" id="email">
                        <input placeholder="Subject" name="subject"> -->
                        <textarea placeholder="Message" name="message"></textarea>
                        <button type="submit">SEND</button>
                    </form>
                    <div class="para col-md-5" data-aos="fade-up" data-aos-duration="1500">

                        <p>Thank you for your interest in reaching out to us. We welcome inquiries, feedback,
                            collaboration opportunities you may have. Please feel free to get in touch with us using the
                            contact detail information provided below. We look forward to hearing from you!</p>


                        <p> Connect with us on social media for updates, inspiration, and insights.  We encourage you to follow, engage, and share our content. We love
                            hearing from our community!</p>


                    </div>


                </div>

                <footer class="row justify-content-between">

                    <div class="reach col-md-3" data-aos="fade-up" data-aos-duration="1500">

                        <div class="">
                            Phone
                        </div>

                        <div class="">
                            + 1-987-654-300<br>+ 1-923-654-800
                        </div>


                    </div>

                    <div class="reach col-md-3" data-aos="fade-up" data-aos-duration="1500">

                        <div class="">
                            Email
                        </div>

                        <div>
                            bluebase@gmail.com<br>bluebasesupport@gmail.com
                        </div>


                    </div>

                    <div class="reach col-md-3" data-aos="fade-up" data-aos-duration="1500">

                        <div class="">
                            Address
                        </div>

                        <div class="">
                            31st Avenue, Downtown<br>754/18 New Jersey, United States
                        </div>


                    </div>

                </footer>

            </div>

        </main>
        <!-- End Main -->

      

       



        <?php
        include("footer.php");
        ?>