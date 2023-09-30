<?php 

session_start();

if(!isset($_SESSION['admin_id'])){
    // header("location: ../login.php");

    header("location:404.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Kufa | Admin Dashboard</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <Style>
    .app-menu {
        padding-bottom: 200px important;
    }
    </Style>
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="../images/profile/<?= $_SESSION['admin_image'] ?>" style="border-radius: 50%;">
                        <span class="activity-indicator"></span>

                        <!--========================= dashboard profile name & email ==========================-->
                        <span class="user-info-text"><?= $_SESSION['admin_name'] ?><br>
                            <span class="user-state-info"><?= $_SESSION['admin_email']?></span></span>
                        <!--========================= dashboard profile name & email ==========================-->


                    </a>
                </div>
            </div>

            <!--========================= sidebar-title ==========================-->
            <div class="app-menu" style="padding-bottom: 300px;">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'active-page': '' ?>">
                        <a href="home.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'profile.php') ? 'active-page': '' ?>">
                        <a href="profile.php" class="active"><i class="material-icons-two-tone">
                                account_circle</i>Profile</a>
                    </li>

                    <!--==================== about session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'about_show.php') ? 'active-page': '' ?>">
                        <a href="about_show.php"><i class="material-icons-two-tone">feed</i>About</a>

                    </li>
                    <!--==================== education session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'about_post.php') ? 'active-page': '' ?>">
                        <a href="about_post.php"><i class="material-icons-two-tone">school</i>Education<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="education_add.php">Education add</a>
                            </li>
                            <li>
                                <a href="education_show.php">Education show</a>
                            </li>
                        </ul>
                    </li>

                    <!--==================== mailbox session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'mail_show.php') ? 'active-page': '' ?>">
                        <a href="mail_show.php" class="active"><i
                                class="material-icons-two-tone">contact_mail</i>Mailbox<span
                                class="badge rounded-pill badge-danger float-end">10</span></a>
                    </li>

                    <!--==================== social media session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'social_media_post.php') ? 'active-page': '' ?>">
                        <a href="social_media_post.php"><i class="material-icons-two-tone">link</i>Social Media
                            Contact<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="social_media_add.php">Social Media add</a>
                            </li>
                            <li>
                                <a href="social_media_show.php">Social Media show</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </li>

                    <!--==================== service session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'active-page': '' ?>">
                        <a href="services.php"><i class="material-icons-two-tone">home_repair_service</i>Services<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="service_add.php">Services add</a>
                            </li>
                            <li>
                                <a href="services.php">Services show</a>
                            </li>
                        </ul>
                    </li>

                    <!--==================== portfolio session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'portfolio_post.php') ? 'active-page': '' ?>">
                        <a href="portfolio_post.php"><i class="material-icons-two-tone">design_services</i>Portfolio<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="portfolio_add.php">Portfolio add</a>
                            </li>
                            <li>
                                <a href="portfolio_show.php">Portfolio show</a>
                            </li>
                        </ul>
                    </li>


                    <!--==================== facts session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'facts_post.php') ? 'active-page': '' ?>">
                        <a href="facts_show.php"><i class="material-icons-two-tone">info</i>Facts<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="facts_add.php">Fact add</a>
                            </li>
                            <li>
                                <a href="facts_show.php">Fact show</a>
                            </li>
                        </ul>
                    </li>

                    <!--==================== testimonial session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'testimonial_post.php') ? 'active-page': '' ?>">
                        <a href="testimonial_post.php"><i class="material-icons-two-tone">edit_note</i>Testimonial<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="testimonial_add.php">Testimonial add</a>
                            </li>
                            <li>
                                <a href="testimonial_show.php">Testimonial show</a>
                            </li>
                        </ul>
                    </li>
                    <!--==================== brand session ====================-->

                    <li class="<?= (basename($_SERVER['PHP_SELF']) == 'brand_post.php') ? 'active-page': '' ?>">
                        <a href="brand_post.php"><i class="material-icons-two-tone">branding_watermark</i>Brand<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="brand_add.php">Brand add</a>
                            </li>
                            <li>
                                <a href="brand_show.php">Brand show</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--========================= sidebar-title end ==========================-->
        </div>


        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                            class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu"
                                        aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i
                                                            class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i
                                                            class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="btn btn-light" href="http://localhost/batch-2304/project/kufa/"
                                        target=_blank;">KuFa view</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link active" href="#">Applications</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="#">Reports</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link btn btn-danger text-white btn-sm" href="logout.php">logout</a>
                                </li>
                                <li class=" nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown"
                                        data-bs-toggle="dropdown"><img src="../assets/images/flags/bd.png" alt=""
                                            class="rounded-circle"></a>
                                    <ul class="dropdown-menu dropdown-menu-end language-dropdown"
                                        aria-labelledby="languageDropDown">
                                        <li><a class="dropdown-item" href="#"><img src="../assets/images/flags/bd.png"
                                                    alt="" class="rounded-circle">Bangladesh</a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="../assets/images/flags/germany.png" alt="">German</a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="../assets/images/flags/italy.png" alt="">Italian</a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="../assets/images/flags/china.png" alt="">Chinese</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#"
                                        data-bs-toggle="dropdown">4</a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown"
                                        aria-labelledby="notificationsDropDown">
                                        <h6 class="dropdown-header">Notifications</h6>
                                        <div class="notifications-dropdown-list">
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-info text-white">
                                                            <i class="material-icons-outlined">campaign</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Donec tempus nisi sed erat
                                                            vestibulum, eu suscipit ex laoreet</p>
                                                        <small>19:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">bolt</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Quisque ligula dui, tincidunt
                                                            nec pharetra eu, fringilla quis mauris</p>
                                                        <small>18:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-success text-white">
                                                            <i class="material-icons-outlined">alternate_email</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../assets/images/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../assets/images/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin
                                                            velit sit amet auctor porta</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">