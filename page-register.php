<?php
/*
Template Name: Register
*/
get_header('admin');
?>
<main>
    <h1>User Registration</h1>
    <h5>Password must be at least 8 characters long and contain at least one digit, one lowercase letter, one uppercase letter, and one special character.</h5>
    <form action="/wp-content/themes/ThetonioWP_V1.0/register.php" method="POST">
        <fieldset>
            <label for="username">Username:*</label>
            <input name="username" id="username" required type="email" placeholder="johndoe@email.com" />
        </fieldset>
        <fieldset>
            <label for="password">Password:*</label>
            <input type="password" name="password" id="password" required
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" />
        </fieldset>
        <fieldset>
            <label for="confirm">Confirm Password: *</label>
            <input type="password" name="confirm" id="confirm" required
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" onkeyup="return comparePasswords()" />
            <span id="pwMsg" class="error"></span>
        </fieldset>
        <button class="btn">Complete Registration</button>
    </form>
</main>