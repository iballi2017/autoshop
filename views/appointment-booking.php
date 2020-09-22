<!-- header -->
<?php
include_once '../components/header2.php'; ?>
<div class="banner">
    <style>
    </style>
    <div class="container py-4">
        <ul class="breadcrumb bg-0">
            <li><a href="../">Home</a></li>
            <li>Book an Appointment</li>
        </ul>
        <h1 class="text-center text-white">Book an Appointment</h1>
    </div>
</div>

<!-- main content -->
<div class="booking_page my-5">
    <section>
        <form action="#">
            <fieldset class="container">
                <div class="page_title_wrapper my-4">
                    <legend class="text-center text_capitalize">Personal Information</legend>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" id="fname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname">
                    </div>
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
            </fieldset>
            <fieldset class="container">
                <div class="page_title_wrapper my-4">
                    <legend class="text-center text_capitalize">Preferred date and Time</legend>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <div class="date_input_wrapper special_input_wrapper fontawesome_pseudo_style">
                            <!-- <input type="date" class="form-control" id="date"> -->
                            <input type="text" class="form-control" id="date" placeholder="dd/mm/yyy">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">Time</label>
                        <div class="time_input_wrapper fontawesome_pseudo_style">
                            <input type="time" class="form-control" id="time">
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="container">
                <div class="page_title_wrapper my-4">
                    <legend class="text-center text_capitalize">Car Information</legend>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="fname">Year, Maker and Model</label>
                        <input type="text" class="form-control" id="fname">
                    </div>
                </div>
            </fieldset>
            <fieldset class="container">
                <div class="page_title_wrapper my-4">
                    <legend class="text-center text_capitalize">Reason for appointment</legend>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="6" id="message"></textarea>
                </div>
            </fieldset>

            <div class="container">
                <button type="submit" class="form_submit_btn btn rounded-0 px-5">Submit</button>
            </div>
        </form>
    </section>


</div>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>