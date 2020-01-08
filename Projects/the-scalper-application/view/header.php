<?php
 session_start();
    if (isset($_SESSION['user'])) /** @var User $user */
        $user = $_SESSION['user'];
        ?>
<!DOCTYPE html>
<html lang="en">
<!--
Controller: <?php var_dump($controller) ?>

Action: <?php var_dump($action) ?>

Params: <?php var_dump($params) ?>

-->
<head>
    <title>
        <?php
            $controller_display = array('category');
            if ($action !== 'home') {
                if (in_array($controller, $controller_display)) {
                    echo ucfirst($controller) . ' / ' . ucfirst($action);
                } else {
                    echo ucfirst($action);
                }
                echo ' - ';
            }
        ?>
        Scalper Tickets
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mixtape template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <?php if ($controller == 'events' && $action != 'error'): ?>
        <link rel="stylesheet" type="text/css" href="/assets/styles/about.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/about_responsive.css">
    <?php elseif ($action != 'home' || empty($action)): ?>
        <link rel="stylesheet" type="text/css" href="/assets/styles/contact.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/contact_responsive.css">
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="/assets/styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/extras.css">
        <link rel="stylesheet" type="text/css" href="/assets/styles/responsive.css">
    <?php endif; ?>
    <style>
        pre {
            color: #fff;
        }
        .dropdown-menu {
            background-color: #212529;
        }

        .nav-link {
     padding: 0;
}

.main_nav ul li:not(:last-child) {
    margin-right: 0;
}
    </style>
</head>
<body>

<div class="super_container">

    <!-- Header -->
    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-center">
            <div class="logo"><a href="/" class="font-weight-bold">Scalper Tickets</a></div>
            <div class="log_reg">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <?php
                        /** @var User $user */
                        if (isset($user)):
                            ?>
                            <li>Welcome, <?php echo $user -> getFirstname(); ?></li>
                            <?php if ($user -> getRole() == Constants::ADMIN): ?>
                            <li><a href="/management">Management</a></li><?php endif; ?>
                            <li><a href="/core.php?logout">Logout</a></li>
                        <?php
                        else:
                            ?>
                            <li><a href="/auth/login">Login</a></li>
                            <li><a href="/auth/register">Register</a></li>
                        <?php
                        endif;

                    ?>
                </ul>
                <div><!-- search bar/open -->
                    <form class="form-inline md-form mr-auto mb-4">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning btn-rounded btn-sm my-0" type="submit">Search</button>
                    </form>
                </div><!-- search bar/close -->
            </div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li class="active"><a href="/frontend/home">Home</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Events
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="/category/sports">Sports</a>
                        <a  class="dropdown-item" href="/category/concerts">Concerts</a>
                        <a  class="dropdown-item" href="/category/theater">Arts & Theater</a>
                        <a  class="dropdown-item" href="/category/comedy">Comedy</a>
                        <a  class="dropdown-item" href="/category/movies">Movies</a>
                        <a  class="dropdown-item" href="/events">All</a>
                    </div>
                  </li>
                  <li><a href="/frontend/contact">Contact us</a></li>
                  <li><a href="/cart/list">Cart</a></li>
                </ul>
            </nav>
            <div class="hamburger ml-auto">
                <div class="d-flex flex-column align-items-end justify-content-between">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <div class="menu">
        <div>
            <div class="menu_overlay"></div>
            <div class="menu_container d-flex flex-column align-items-start justify-content-center">
                <div class="menu_log_reg">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <?php
                            /** @var User $user */
                            if (isset($user)):
                                ?>
                                <li>Welcome, <?php echo $user -> getFirstname(); ?></li>
                                <?php if ($user -> getRole() == ADMIN): ?>
                                <li><a href="/management">Management</a></li><?php endif; ?>
                                <li><a href="/auth/logout">Logout</a></li>
                            <?php
                            else:
                                ?>
                                <li><a href="/auth/login">Login</a></li>
                                <li><a href="/auth/register">Register</a></li>
                            <?php
                            endif;

                        ?>
                    </ul>
                </div>
                <nav class="menu_nav">
                    <ul class="d-flex flex-column align-items-start justify-content-start">
                        <li class="active"><a href="/frontend/home">Home</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Events
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="/category/sports">Sports</a>
                        <a  class="dropdown-item" href="/category/concerts">Concerts</a>
                        <a  class="dropdown-item" href="/category/theater">Arts & Theater</a>
                        <a  class="dropdown-item" href="/category/comedy">Comedy</a>
                        <a  class="dropdown-item" href="/category/movies">Movies</a>
                        <a  class="dropdown-item" href="/events">All</a>
                    </div>
                  </li>
                  <li><a href="/frontend/contact">Contact us</a></li>
                  <li><a href="/cart/list">Cart</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <?php if (isset($params['error'])): ?>
    <div class="container mt-5 mb-2" style="padding-top: 4rem;">
        <div class="alert alert-<?php echo ($params['error'] ? 'danger' : 'success') ?>" role="alert">
            <?php echo $params['msg'] ?>
        </div>
    </div>
    <?php endif; ?>