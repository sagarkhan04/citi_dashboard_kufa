<?php
    include('./config/db.php');

    $id = $_GET["id"];
    $get_query = "SELECT * FROM  portfolios WHERE id = '$id' AND status='active'";
    $connect = mysqli_query($db_connect, $get_query);
    $single_data = mysqli_fetch_assoc($connect);

    $users_select_query ="SELECT * FROM users";
    $users_connect = mysqli_query($db_connect,$users_select_query);
    $users = mysqli_fetch_assoc($users_connect);

    $select_service = "SELECT * FROM  services";
    $services = mysqli_query($db_connect,$select_service);

    $select_facts = "SELECT * FROM  facts";
    $facts = mysqli_query($db_connect,$select_facts);

    $select_portfolios = "SELECT * FROM  portfolios WHERE status='active'";
    $portfolios = mysqli_query($db_connect,$select_portfolios);

    
    $select_testimonial = "SELECT * FROM testimonials";
    $testimonials = mysqli_query($db_connect,$select_testimonial);

    $contact_select = "SELECT * FROM contacts";
    $contact_select_connect = mysqli_query($db_connect,$contact_select);
    $contact_data = mysqli_fetch_assoc($contact_select_connect);

    $social_media_select = "SELECT * FROM social_medias";
    $social_media_select_connect = mysqli_query($db_connect,$social_media_select);

    $select_about = "SELECT * FROM  abouts";
    $abouts = mysqli_query($db_connect,$select_about);
    $about = mysqli_fetch_assoc($abouts);

    $select_education = "SELECT * FROM  educations";
    $educations = mysqli_query($db_connect,$select_education);

    $select_brands = "SELECT * FROM  brands";
    $brands = mysqli_query($db_connect,$select_brands);

?>
<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio Single Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="./frontend_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./frontend_assets/css/animate.min.css">
    <link rel="stylesheet" href="./frontend_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./frontend_assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./frontend_assets/css/flaticon.css">
    <link rel="stylesheet" href="./frontend_assets/css/slick.css">
    <link rel="stylesheet" href="./frontend_assets/css/aos.css">
    <link rel="stylesheet" href="./frontend_assets/css/default.css">
    <link rel="stylesheet" href="./frontend_assets/css/style.css">
    <link rel="stylesheet" href="./frontend_assets/css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.php" class="navbar-brand logo-sticky-none"><img
                                        src="./frontend_assets/img/logo/logo.png" alt="Logo"></a>
                                <a href="index.php" class="navbar-brand s-logo-none"><img
                                        src="./frontend_assets/img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="http://localhost/batch-2304/project/kufa/dashboard/home.php"
                                                target=_blank;>Dashboard
                                                Login</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index.php">
                    <img src="./frontend_assets/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p><?=$contact_data["address"];?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p></span><a href="tel:<?=$contact_data["phone"];?>"><?=$contact_data["phone"];?></a></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p></span><a href="mailto:<?=$contact_data["email"];?>"><?=$contact_data["email"];?></a></p>
                </div>
            </div>
            <div class="social-icon-right mt-20">

                <?php foreach ($social_media_select_connect as $data): ?>
                <a href="<?=$data["link"];?>" target="_blank"><i class="<?=$data["icon"];?>"></i></a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="breadcrumb-content text-center">
                            <h2>PORTFOLIO SINGLE POST</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- portfolio-details-area -->
        <section class="portfolio-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="single-blog-list">
                            <div class="blog-list-thumb mb-35">
                                <img src="./images/portfolio/<?= $single_data["image"] ?>" alt="img"
                                    style="height:600px; width:1000px;">
                            </div>
                            <div class="blog-list-content blog-details-content portfolio-details-content">
                                <h2><?= $single_data["design_name"] ?></h2>
                                <div><?= $single_data["description_long"] ?></div>
                                <div class="blog-list-meta">
                                    <ul>
                                        <li class="blog-post-date">
                                            <h3>Share On</h3>
                                        </li>
                                        <li class="blog-post-share">
                                            <?php foreach ($social_media_select_connect as $data): ?>
                                            <a href="<?=$data["link"];?>" target="_blank"><i
                                                    class="<?=$data["icon"];?>"></i></a>
                                            <?php endforeach; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="avatar-post mt-70 mb-60">
                                <ul>
                                    <li>
                                        <div class="post-avatar-img">
                                            <img src="./images/profile/<?= $users['image'] ?>" alt="img"
                                                style="height:80px; width:80px;">
                                        </div>
                                        <div class="post-avatar-content">
                                            <h5><?= $users['name'] ?></h5>
                                            <p>Vehicula dolor amet consectetur adipiscing elit. Crassollicitudin,tellus
                                                vitae condimem egestliberos dolor auctor tellus.</p>
                                            <div class="post-avatar-social mt-15">
                                                <?php foreach ($social_media_select_connect as $data): ?>
                                                <a href="<?=$data["link"];?>"><i class="<?=$data["icon"];?>"></i></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio-details-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap primary-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->



    <!-- JS here -->
    <script src="./frontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./frontend_assets/js/popper.min.js"></script>
    <script src="./frontend_assets/js/bootstrap.min.js"></script>
    <script src="./frontend_assets/js/isotope.pkgd.min.js"></script>
    <script src="./frontend_assets/js/one-page-nav-min.js"></script>
    <script src="./frontend_assets/js/slick.min.js"></script>
    <script src="./frontend_assets/js/ajax-form.js"></script>
    <script src="./frontend_assets/js/wow.min.js"></script>
    <script src="./frontend_assets/js/aos.js"></script>
    <script src="./frontend_assets/js/jquery.waypoints.min.js"></script>
    <script src="./frontend_assets/js/jquery.counterup.min.js"></script>
    <script src="./frontend_assets/js/jquery.scrollUp.min.js"></script>
    <script src="./frontend_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="./frontend_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./frontend_assets/js/plugins.js"></script>
    <script src="./frontend_assets/js/main.js"></script>
</body>


</html>