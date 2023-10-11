<?php
/*
Template Name: Log In
*/
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
        <title>Thetonio - Log In</title>
        <meta name="description" content="Software Engineer and Entrepreneur | Innovating at the Intersection of Technology and Business">
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
        <section class="log-in">
            <div class="log-in-container">
                <div>
                    <div class="log-in-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ThetonioSiteIcon.png" alt="Thetonio Site Icon.">
                    </div>
                    <div>
                        <h3>Admin Access</h3>
                    </div>
                </div>
                <div>
                    <form action="/wp-content/themes/ThetonioWP_V1.0/validate.php" method="POST">
                        <fieldset>
                            <label for="username">Your Username</label>
                            <input type="email" id="username" name="username" placeholder="Enter your username" required>
                        </fieldset>
                        <fieldset>
                            <label for="password">Your Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        </fieldset>
                        <input type="submit" name="submit" value="Login" class="admin-submit-btn">
                    </form>
                </div>
                <div>
                    <h4>UNAUTHORIZED ACCESS IS PROHIBITED.</h4>
                </div>
            </div>
            <div class="log-in-footer">
                <div>
                    <h1>&copy; <?php echo date('Y'); ?> Thetonio. All Rights Reserved.</h1>
                </div>
            </div>
        </section>
    </body>
</html>
