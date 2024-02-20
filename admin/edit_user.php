<?php
    include 'partials/header.php';

    //get id user selected
    if(isset($_GET['id'])){
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($connection, $query);
        $user =     mysqli_fetch_assoc($result);
    } else{
        header('location: ' . ROOT_URL . 'admin/manage_users.php');
        die();
    }
?>
<section class="form_section" >
    <div class="container form_section-container">
        <h2>Edit User</h2>
        <form action="<?= ROOT_URL?>admin/edit_user-logic.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?= $user['id'] ?>" name="id" >
            <input type="text" value="<?= $user['firstname'] ?>" name="firstname" placeholder="First name">
            <input type="text" value="<?= $user['lastname'] ?>" name="lastname" placeholder="Last name">
            <select name="user_role">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <button class="btn" name="submit" type="submit">Update User</button>
        </form>
    </div>
</section>


<?php
    include '../partials/footer.php';
?>