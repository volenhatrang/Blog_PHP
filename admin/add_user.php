<?php
    include 'partials/header.php';
    $firstname = $_SESSION['add_user-data']['firstname'] ?? null;
    $lastname = $_SESSION['add_user-data']['lastname'] ?? null;
    $username = $_SESSION['add_user-data']['username'] ?? null ;
    $email = $_SESSION['add_user-data']['email'] ?? null;
    $createpassword = $_SESSION['add_user-data']['createpassword'] ?? null;
    $confirmpassword = $_SESSION['add_user-data']['confirmpassword'] ?? null;

    unset($_SESSION['add_user-data']);
?>

<section class="form_section" >
    <div class="container form_section-container">
        <h2>Add User</h2>
        <?php  if(isset($_SESSION['add_user'])) : ?>
                <div class = "alert_message error">
                    <p>
                        <?= $_SESSION['add_user'];
                        unset($_SESSION['add_user']);
                        ?>
                    </p> 
                </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add_user-logic.php" method="post" enctype="multipart/form-data">
        <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name"> 
            <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
            <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
            <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
            <input type="password" name="createpassword" value="<?= $createpassword?>"  placeholder="Create password">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm password">
            <select name='user_role'>
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form_control" >
                <label for="avatar"> Add Avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button class="btn" name='submit' type="submit">Add User</button>
        </form>
    </div>
</section>


<?php
    include '../partials/footer.php';
?>