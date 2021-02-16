<?php include_once '../components/header.php'; ?>
<!-- main content -->
<div class="home-service-form booking_page">
    <section>
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <button class="btn back-btn" onclick="goBack()">Back</button>
                </div>
                <div class="text-center title-wrapper text-center">
                    <h1>BOOK FOR HOME SERVICE</h1>
                </div>
            </div>
        </div>
    </section>
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
                    <legend class="text-center text_capitalize">Payment Method</legend>
                </div>
                <div class="form-group">

                    <!--  -->

                    <div class="row p-3">
                        <div class="col-12 col-md-6">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="payment_method"
                                    id="bank_transfer">
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
                        <div class="col-12 col-md-6">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="payment_method"
                                    id="third_party">
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

            <div class="container text-center mb-5">
                <button type="submit" class="form_submit_btn btn btn-lg rounded-0 px-5">Confirm</button>
            </div>
        </form>
    </section>


</div>




<?php include_once '../components/footer.php'; ?>