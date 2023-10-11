<?php
/*
Template Name: View Contact
*/
require('inc/auth.php');
get_header('admin');

$contactId = $_GET['id'];

if (empty($contactId) || !is_numeric($contactId)) {
    header('Location: https://thetonio.com/404/');
    exit();
}

require('inc/db.php');

$sql = "SELECT * FROM contact_submissions WHERE id = :id";
$cmd = $db->prepare($sql);
$cmd->bindParam(':id', $contactId, PDO::PARAM_INT);
$cmd->execute();
$submission = $cmd->fetch();

$name = $submission['name'];
$email = $submission['email'];
$message = $submission['message'];

?>
        <section class="admin-contact-view-section">
            <div class="admin-contact-container-view">
                <div class="admin-contact-title-view">
                    <h3>View Contact Form Submission</h3>
                </div>
                <div>
                    <form>
                        <fieldset>
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" value="<?php echo $name ?>" readonly>
                        </fieldset>
                        <fieldset>
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" value="<?php echo $email ?>" readonly>
                        </fieldset>
                        <fieldset>
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" readonly><?php echo $message ?></textarea>
                        </fieldset>
                        <a href="https://thetonio.com/admin-delete-contact?id=<?php echo $contactId; ?>" class="delete-contact-btn" onclick="return confirmDelete();">Delete Contact <i class="fa-solid fa-delete-left"></i></a>
                    </form>
                </div>
            </div>
            <?php
            $db = null;
            ?>
        </section>
    </body>
</html>
