<!-- header -->
<?php include_once '../components/header.php'; ?>
<div class="banner">
    <div class="container py-4">
        <ul class="breadcrumb bg-0">
            <li><a href="../">Home</a></li>
            <li>Diagnostic Home Service</li>
        </ul>
        <h1 class="text-center text-white">Diagnostic Home Service</h1>
    </div>
</div>
<!-- main content -->
<div class="diagnostic_home_service_page my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <section class="container mb-3">
                    <p>We offer a diagnostic service at the comfort of your home or office that saves you time. We utilize an
                        On-Board Diagnostics system which
                        is used to monitor emissions and diagnostic related information and thorough onboard diagnosis of a car’s
                        health.
                    </p>

                    <p>

                    <dl>
                        <dt>Benefits</dt>
                        <dd>It gives an instant analysis of engine problem and saves time from having to guess or manually search
                            for the fault when the check
                            engine light engages on the dashboard</dd>
                        <dd>Troubleshoot errors before they escalate into an expensive repair</dd>
                        <dd>Provide useful information about the engine, including a snapshot of the conditions which have lead up
                            to the error or physical
                            condition</dd>
                        <dd>We will provide real-time sensor readings and calculate fuel economy/usage</dd>
                    </dl>
                    </p>
                    <p>Our home diagnostic service is to ascertain issues that may be affecting your car and provide an efficient
                        and cost-effective solution

                        to it with an on-the-scene analysis and quotation.
                    </p>
                </section>
            </div>
            <div class="col-12 col-md-5">
                <section class="home-service-form">
                    <h4 class="text-center text_uppercase">Book for diagnostic home service</h4>
                    <form action="#">
                        <fieldset class="container">
                            <div class="page_title_wrapper">
                                <legend class="text-center text_capitalize">Personal Information</legend>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" id="lname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" id="lname" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <input type="email" class="form-control" id="lname" placeholder="Email">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="container">
                            <div class="page_title_wrapper">
                                <legend class="text-center text_capitalize">Preferred date and Time</legend>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <div class="date_input_wrapper special_input_wrapper fontawesome_pseudo_style">
                                        <!-- <input type="date" class="form-control" id="date"> -->
                                        <input type="text" class="form-control" id="date" placeholder="dd/mm/yyy">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="time_input_wrapper fontawesome_pseudo_style">
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="container">
                            <div class="page_title_wrapper">
                                <legend class="text-center text_capitalize">Car Information</legend>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <textarea class="form-control" rows="6" id="message" placeholder="Year, Maker and Model"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="container">
                            <div class="page_title_wrapper">
                                <legend class="text-center text_capitalize">Payment Method</legend>
                            </div>
                            <div class="form-group">
                                <!--  -->
                                <div class="row p-3">
                                    <div class="col-12">
                                        <div class="form_grp mb-3">
                                            <input type="radio" class="radio_rej d-block w-100" name="payment_method" id="bank_transfer">
                                            <label class="text_capital" for="bank_transfer">
                                                <span class="custom_radio"></span>
                                                <span>Bank Transfer</span>
                                            </label>
                                        </div>
                                        <div class="hide" id="seller_account_details">
                                            <ul>
                                                <li>
                                                    <p>Bank Account name:<br />
                                                        <span>#### #### #### ####</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>Bank Account Number:<br />
                                                        <span>#### #### #### ####</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form_grp mb-3">
                                            <input type="radio" class="radio_rej d-block w-100" name="payment_method" id="third_party">
                                            <label class="text_capital" for="third_party">
                                                <span class="custom_radio"></span>
                                                <span>Third-party payment interface</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <!--  -->
                            </div>
                        </fieldset>

                        <div class="container">
                            <button type="submit" class="form_submit_btn btn rounded-0 px-5">Submit</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>