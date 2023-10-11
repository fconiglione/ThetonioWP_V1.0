<?php
/*
Template Name: Admin Reset Password
*/
get_header('admin');
require('inc/auth.php');
?>
        <section class="admin-reset-password">
            <div class="reset-password">
                <div class="reset-password-title">
                    <h3>Reset Admin Password</h3>
                </div>
                <div>
                    <form action="/wp-content/themes/ThetonioWP_V1.0/reset-password.php" method="POST">
                        <fieldset>
                            <label for="currentPassword">Current Password</label>
                            <input type="password" id="currentPassword" name="currentPassword" placeholder="Enter current password" required>
                        </fieldset>
                        <fieldset>
                            <label for="newPassword">New Password</label>
                            <input title="Passwords must be a minimum of 8 characters, including 1 digit, 1 upper-case letter, and 1 lower-case letter." type="password" id="newPassword" name="newPassword" placeholder="Enter new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        </fieldset>
                        <fieldset>
                            <label for="confirmPassword">Confirm New Password</label>
                            <input title="Passwords must be a minimum of 8 characters, including 1 digit, 1 upper-case letter, and 1 lower-case letter." type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        </fieldset>
                        <input type="submit" name="submit" class="reset-password-btn" value="Reset Password &boxh;&boxh;&boxh;">
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>

