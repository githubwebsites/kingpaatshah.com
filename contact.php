<!DOCTYPE html>
<html lang="en">

<head>
    <title>kingpaatshah</title>
    <meta name="description" content="Rice  for wholesale deal of non-basmati rice.">
    <?php
    include_once('header.php');
    ?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/contact.jpg);">
            <h2>CONTACT US</h2>
        </div>
        <!-- ##### Breadcrumb Area End ##### -->

        <!-- ##### Contact Area Start ##### -->
        <section class="contact-area section-padding-100-0">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-7 col-md-8">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>GET IN TOUCH</h2>
                            <p>Send us a message, we will call back later</p>
                        </div>
                        <!-- Contact Form Area -->
                        <div class="contact-form-area mb-100">
                            <form action="thanks.html" method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                            <input type="hidden" name="mail_to" value="riceexport@trickuweb.com">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="mail_msg" id="message" cols="30" rows="10" placeholder="Message" onkeyup="we1()"></textarea>
                                            <input type="hidden" name="mail_sub" id="4" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn alazea-btn mt-15" onclick="we1()" name="btnSubmit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>CONTACT US</h2>
                            <p>You can send mail or contact blow number, we will respond as soon as possible.</p>
                        </div>
                        <!-- Contact Information -->
                        <div class="contact-information">
                            <p><span>Address:</span>
                            2760 Derry Road<br />
                            West Mississauga<br />
                            ON  L5N 2R4</p>
                            <p><span>Phone:</span> +647 554 5574<br />
                            </p>
                            <p><span>Email:</span> admin@kingpaatshah.com </p>
                            <p><span>Email (For any enquery related to rice export):</span> admin@kingpaatshah.com </p>
                            <p><span>Open hours:</span> Mon - Sun: 10 AM to 6 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Contact Area End ##### -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.6519294641316!2d-79.76447639999999!3d43.5929659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b6a5dc872f373%3A0xb8865f2876b8658b!2s2760%20Derry%20Rd%20W%2C%20Mississauga%2C%20ON%20L5N%202R4%2C%20Canada!5e0!3m2!1sen!2sin!4v1696252716868!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            

        <?php
        include_once('mail.php');
        include_once('footer.php');
        ?>