<!-- header -->
<?php
include_once '../components/header.php'; ?>
<div class="banner">
    <style>
    </style>
    <div class="container py-4">
        <ul class="breadcrumb bg-0">
            <li><a href="../">Home</a></li>
            <li>Contact Us</li>
        </ul>
        <h1 class="text-center text-white">Contact Us</h1>
    </div>
</div>

<!-- main content -->
<div class="contact_page my-5">
    <section class="">
        <div class="container">
            <h3 class="text-center my-4">Get in touch with us!</h3>

            <ul class="contact_media list_style_ul_children mt-5 p-0">
                <li class="text-center my-3 mx-2">
                    <div class="text_color_secondary">
                        <i class="fas fa-phone-alt fa-2x"></i>
                    </div>
                    <div class="text_color_secondary">Phone number: </div>
                    <div>+234 6890 456 3</div>
                </li>
                <li class="text-center my-3 mx-2">
                    <div class="text_color_secondary">
                        <i class="fas fa-envelope fa-2x"></i>
                    </div>
                    <div class="text_color_secondary">Email Address:</div>
                    <div>1ooopaaaa@yahoo.com</div>
                </li>
                <li class="text-center my-3 mx-2">
                    <div class="text_color_secondary">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <div class="text_color_secondary">Location:</div>
                    <div>23, adesanya street, iyolope lga, Lagos state.</div>
                </li>
                <li class="text-center my-3 mx-2">
                    <div class="text_color_secondary">
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                    <div class="text_color_secondary">Working Hours:</div>
                    <div>Monday–Saturday (8am – 5.30pm)</div>
                </li>
            </ul>
        </div>
    </section>


    <section>
        <div class="container">
            <h4 class="text-center mt-5">If you got any questions<br /> please do not hesitate to send us a message</h4>
            <div class="cotact_form_wrapper">
                <form action="#">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="6" id="message"></textarea>
                    </div>
                    <button type="submit" class="form_submit_btn btn rounded-0 px-5">Submit</button>
                </form>
            </div>
        </div>
    </section>

</div>


<!-- footer -->
<?php include_once '../components/footer.php'; ?>