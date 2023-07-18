<?php 
include_once('include/header.php'); 
include_once('include/navbar.php')
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <!-- <h1 class="display-3 text-uppercase text-white mb-3">Contact Us</h1> -->
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Contact Us</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class=" mb-4">Reach out to us   
                <span class="text-primary">and let's build</span> together </h2>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" style="height: 600px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.733853947333!2d79.80833417396168!3d11.923601036989824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5361990836265d%3A0xe5456647e8364c46!2s115%2C%20AFT%20Mill%20Rd%2C%20Bharathidasan%20Nagar%2C%20Mudaliarpet%2C%20Puducherry%2C%20605004!5e0!3m2!1sen!2sin!4v1689534020511!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
            <div class="col-lg-6">
                <div class="contact-form bg-light p-5">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0" placeholder="Subject" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php include_once('include/footer.php'); ?>