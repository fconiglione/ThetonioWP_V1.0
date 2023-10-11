<?php
require('inc/auth.php');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title>Thetonio - Admin Panel</title>
    <meta name="description" content="Software Engineer and Entrepreneur | Innovating at the Intersection of Technology and Business">
    <!-- JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-js.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/sortable.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Site Icon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/ThetonioSiteIcon.png" type="image/png">
</head>
<body>
<header class="admin-header">
    <div class="admin-header-content">
        <div class="admin-header-content-container-1">
            <div class="admin-header-top">
                <div>
                    <a href="https://thetonio.com/admin-dashboard/">
                        <img class="admin-logo-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/ThetonioAdminHeaderLogo.png" alt="Thetonio Admin Header Logo">
                        <img class="admin-logo-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/ThetonioHeaderLogo.png" alt="Thetonio Admin Header Logo">
                    </a>
                </div>
                <div class="admin-hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <div class="admin-links">
                <nav class="admin-nav">
                    <ul class="admin-ul">
                        <li><a href="https://thetonio.com/admin-dashboard/"><i class="fa-solid fa-gauge-high"></i> Dashboard</a></li>
                        <li><a href="https://thetonio.com/admin-portfolio/"><i class="fa-solid fa-folder-open"></i> Portfolio</a></li>
                        <li><a href="https://thetonio.com/wp-admin/edit.php"><i class="fa-solid fa-pen-nib"></i> Blog</a></li>
                        <li><a href="https://thetonio.com/admin-contact/"><i class="fa-solid fa-envelope-open-text"></i> Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="admin-header-content-container-2">
            <div class="admin-links">
                <nav class="admin-nav">
                    <ul class="admin-ul">
                        <li><a href="https://www.hostinger.com/cpanel-login"><i class="fa-solid fa-wrench"></i> Hostinger</a></li>
                        <li><a href="https://thetonio.com/wp-admin/admin.php?page=hostinger"><i class="fa-brands fa-wordpress"></i> WordPress</a></li>
                        <li><a href="https://thetonio.com/admin-reset-password"><i class="fa-sharp fa-solid fa-circle-question"></i>Reset Password</a></li>
                        <li><a href="/wp-content/themes/ThetonioWP_V1.0/log-out.php"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a></li>
                    </ul>
                </nav>
            </div>
            <div class="admin-footer">
                <h1>&copy; <?php echo date('Y'); ?> Thetonio. All Rights Reserved.</h1>
            </div>
        </div>
    </div>
    <?php $db = null; ?>
</header>
<header class="admin-header-mobile">
    <div class="admin-header-mobile-content">
        <div class="admin-header-mobile-content-container-1">
            <div class="admin-hamburger-mobile">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <hr>
            <div class="admin-header-mobile-icons">
                <a href="https://thetonio.com/admin-dashboard/"><i class="fa-solid fa-gauge-high"></i></a>
                <a href="https://thetonio.com/admin-portfolio/"><i class="fa-solid fa-folder-open"></i></a>
                <a href="https://thetonio.com/wp-admin/edit.php"><i class="fa-solid fa-pen-nib"></i></a>
                <a href="https://thetonio.com/admin-contact/"><i class="fa-solid fa-envelope-open-text"></i></a>
            </div>
        </div>
        <div class="admin-header-mobile-content-container-2">
            <div class="admin-header-mobile-icons">
                <a href="https://www.hostinger.com/cpanel-login"><i class="fa-solid fa-wrench"></i></a>
                <a href="https://thetonio.com/wp-admin/admin.php?page=hostinger"><i class="fa-brands fa-wordpress"></i></a>
                <a href="https://thetonio.com/admin-reset-password"><i class="fa-sharp fa-solid fa-circle-question"></i></a>
                <a href="/wp-content/themes/ThetonioWP_V1.0/log-out.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    </div>
    <?php $db = null; ?>
</header>