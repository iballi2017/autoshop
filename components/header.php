<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <!-- <link rel="icon" href="./images/favicon.png" type="image/gif" sizes="16x16"> -->
    <title>Auto Shop</title>
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="../assets/plugins/OwlCarousel2-2.3.4/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/plugins/OwlCarousel2-2.3.4/owl.theme.default.min.css" />
    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets//plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-md-0">
            <div class="container">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <a class="navbar-brand" href="../">
                    <div class="logo_img_wrapper"><img src="../assets/images/brand_logo.png" class="img-fluid" alt="company brand logo"></div>
                </a>
                <button class="navbar-toggler border-0 focus_outline_0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown" id="customDropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- <a class="dropdown-item" href="#">Vehicle Analysis</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Steering & Suspension</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Oil & filter change</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Preventive maintenance</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">more..</a>
                                <div class="dropdown-divider"></div> -->
                                <ul class="list_style_ul_children p-0">
                                    <li><a class="dropdown-item" href="#">Vehicle Analysis</a></li>
                                    <li><a class="dropdown-item" href="#">Steering & Suspension</a></li>
                                    <li><a class="dropdown-item" href="#">Oil & filter change</a></li>
                                    <li><a class="dropdown-item" href="#">Preventive maintenance</a></li>
                                    <li class="nest_navList_parent" style="position: relative;"><a class="dropdown-item" href="#">more..</a>
                                        <ul class="list_style_ul_children next_nav_child first_nav_child px-0 bg-white">
                                            <li><a class="dropdown-item" href="#">Electrical Systems</a></li>
                                            <li><a class="dropdown-item" href="#">Batteries</a></li>
                                            <li><a class="dropdown-item" href="#">Brake system</a></li>
                                            <li><a class="dropdown-item" href="#">A/C Cooling & heating</a></li>
                                            <li class="nest_navList_parent" style="position: relative;"><a class="dropdown-item" href="#">more..</a>
                                                <ul class="list_style_ul_children next_nav_child second_nav_child px-0 bg-white">
                                                    <li><a class="dropdown-item" href="#">Alignment</a></li>
                                                    <li><a class="dropdown-item" href="#">Exhaust system</a></li>
                                                    <li><a class="dropdown-item" href="#">Fuel emission system</a></li>
                                                    <li><a class="dropdown-item" href="#">Pre-purchase inspections</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <!-- <a class="dropdown-item" href="#">Electrical Systems</a>
                                <div class="dropdown-divider"></div> -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Book an appointment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--/ Header -->

    <!-- Main -->
    <main>