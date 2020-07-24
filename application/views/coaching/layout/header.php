<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo (isset($page_title))? $page_title . ': ' . $this->session->userdata ('site_title'): $this->session->userdata ('site_title'); ?></title>
    <meta name="author" content="Inovexia Software Services">    
    <meta name="description" content="<?php echo SITE_TITLE; ?> ">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Easy Coaching App">
    <meta name="apple-mobile-web-app-title" content="Easy Coaching App">
    <meta name="theme-color" content="#4285F4">
    <meta name="msapplication-navbutton-color" content="#4285F4">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="<?php echo site_url (''); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/font/iconsmind-s/css/iconsminds.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/font/simple-line-icons/css/simple-line-icons.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/font/fontawesome/fontawesome.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/bootstrap.rtl.only.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/fullcalendar.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/dataTables.bootstrap4.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/datatables.responsive.bootstrap4.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/select2.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/perfect-scrollbar.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/glide.core.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/bootstrap-stars.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/nouislider.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/bootstrap-datepicker3.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/vendor/component-custom-switch.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(THEME_PATH . 'assets/css/main.css'); ?>" />

    <!-- Custom JS (Dynamically included) -->
    <?php
    if (isset ($script_header) && !empty ($script_header)) {
        foreach ($script_header as $script) {
            echo '<script src="'.base_url($script).'" type="text/javascript"></script>';
        }
    }
    ?>
    <link rel="icon" href="<?php echo base_url(THEME_PATH . 'assets/img/fav-icon.png'); ?>" type="image/png" sizes="512x512">
    <link rel="manifest" href="<?php echo base_url ('manifest.json'); ?>">
</head>

<body id="app-container" class="menu-default show-spinner">
    <?php
        $coaching_id = $this->session->userdata ('coaching_id');
        $member_id = $this->session->userdata ('member_id');
        $member_name = $this->session->userdata ('user_name');
    ?>
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center" style="width:33%;">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>
        </div>


        <a class="navbar-logo text-center" href="#" style="width:33%;">
            <?php 
            $logo= '';
            if($logo == '') {
                echo '<span class="font-oswald fs-3">';
                    echo $this->session->userdata ('site_title');
                echo '</span>';
            }

            else {
               echo '<span class="logo-mobile d-block d-xs-none">';
               echo '</span>';

            } ?>

        </a>

        <div class="float-right text-right pr-3" style="width:33%;">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1"
                         data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>
                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll ps">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/profile-pic-l-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle">
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notification-thumb.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle">
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notification-thumb-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle">
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="img/notification-thumb-3.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle">
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </div>
                </div>
                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0 d-none" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name"><?php echo $member_name; ?></span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3 d-none">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
                <div class="profile-button">
                  <?php if ($this->session->userdata ('profile_image')) { ?>
                    <div class="dropdown ">
                      <a href="#" class=" dropdown-toggler d-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url ($this->session->userdata ('profile_image')); ?>" class="rounded-circle img-thumbnail m-0" width="30"> 
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <p class="text-center">
                            <img src="<?php echo base_url ($this->session->userdata ('profile_image')); ?>" class="rounded-circle img-thumbnail" width="80"> 
                            <div class="text-center" href="#"><?php echo $this->session->userdata ('user_name'); ?></div>
                        </p>
                        <hr>
                        <a class="dropdown-item" href="<?php echo site_url ('coaching/users/my_account/'.$coaching_id.'/'.$member_id); ?>"><i class="fa fa-user pr-1"></i>My Account</a>
                        <a class="dropdown-item" href="<?php echo site_url ('coaching/users/my_password/'.$coaching_id.'/'.$member_id); ?>"><i class="fa fa-lock pr-1"></i>Change Password</a>
                        <a class="dropdown-item" href="#" onclick="logout_user ()"><i class="fa fa-sign-out-alt pr-1"></i>Sign out</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="#dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="#layouts">
                            <i class="iconsminds-digital-drawing"></i> Pages
                        </a>
                    </li>
                    <li>
                        <a href="#applications">
                            <i class="iconsminds-air-balloon-1"></i> Applications
                        </a>
                    </li>
                    <li>
                        <a href="#ui">
                            <i class="iconsminds-pantone"></i> UI
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="iconsminds-three-arrow-fork"></i> Menu
                        </a>
                    </li>
                    <li>
                        <a href="Blank.Page.html">
                            <i class="iconsminds-bucket"></i> Blank Page
                        </a>
                    </li>
                    <li>
                        <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                            <i class="iconsminds-library"></i> Docs
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li class="active">
                        <a href="Dashboard.Default.html">
                            <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Analytics.html">
                            <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Ecommerce.html">
                            <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Content.html">
                            <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid">
            