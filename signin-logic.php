<?php
    require 'config/database.php';
    // get signin form data if button was clicked

    if(isset($_POST['submit'])){
        $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);

        if(!$username_email){
            $_SESSION['signin'] = "Username or Email required!";
        } elseif(!$password){
            $_SESSION['signin'] = "Password required!";
        } else {
            // fetch user from database
            $fetch_user_query = "SELECT * FROM users WHERE username = '$username_email' OR email = '$username_email'";
            $fetch_user_result = mysqli_query($connection, $fetch_user_query);

            if(mysqli_num_rows($fetch_user_result) == 1){
                // convert the record into the assoc array
                $user_record = mysqli_fetch_assoc($fetch_user_result);
                $db_password = $user_record['password'];
                // compare form password with database password
                if(password_verify($password, $db_password)){
                    // set session for access control
                    $_SESSION['user_id'] = $user_record['id'];
                    // set session if user is an admin
                    if($user_record['is_admin'] == 1) {
                        $_SESSION['user_is_admin'] = true;
                    }
                    // log user in
                    header('location: '.ROOT_URL.'admin/');
                    exit(); // Added exit() after header to stop script execution
                } else {
                    $_SESSION['signin'] = 'Incorrect username or password';
                }
            }else {
                $_SESSION['signin'] = 'User not found';
            }

            header('location: '.ROOT_URL.'admin/');

        }
//if any problem. redirect back to sigin page with login data
        if(isset($_SESSION['signin'])){
            $_SESSION['signin-data'] = $_POST;
            header('location: '. ROOT_URL. 'signin.php');
            die();
        }

    } else {
        header('location: '. ROOT_URL . 'signin.php');
        exit(); // Added exit() after header to stop script execution
    }
?>
