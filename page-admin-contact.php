<?php
/*
Template Name: Admin Contact
*/
get_header('admin');
require('inc/auth.php');
?>
        <section class="admin-contact">
            <div class="admin-contact-container">
                <div class="admin-contact-title">
                    <h3>Contact Form Submissions</h3>
                </div>
                <div class="admin-contact-table">
                    <?php
                    require('inc/db.php');
                    $sql = "SELECT * FROM contact_submissions";
                    $cmd = $db->prepare($sql);
                    $cmd->execute();
                    $submissions = $cmd->fetchAll();
                    ?>
                    <table class="sortable">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach ($submissions as $submission) { ?>
                        <tr>
                            <td><?php echo $submission['name'] ?></td>
                            <td><?php echo $submission['email'] ?></td>
                            <td><?php echo $submission['message'] ?></td>
                            <td class="actions">
                                <a href="https://thetonio.com/admin-view-contact?id=<?php echo $submission['id']; ?>" title="View"><i class="fa-solid fa-eye"></i></a>
                                <a href="https://thetonio.com/admin-delete-contact?id=<?php echo $submission['id']; ?>" title="Delete" onclick="return confirmDelete();"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    <?php $db = null; ?>
                </div>
            </div>
        </section>
    </body>
</html>