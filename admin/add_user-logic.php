<?php
   require 'config/database.php';

//get signup form data if sign up button was clicked!

if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['user_role'], FILTER_SANITIZE_NUMBER_INT);
    $avatar =  $_FILES['avatar'];

    //validate input values
    if (!$firstname){
        $_SESSION['add_user'] = 'Please enter your First Name';
    }elseif(!$lastname){
        $_SESSION['add_user'] = 'Please enter your Last name';
    }elseif(!$username){
        $_SESSION['add_user'] = 'Please enter your User name';
    }elseif(!$email){
        $_SESSION['add_user'] = 'Please enter your Email';
    }elseif(!$createpassword){
        $_SESSION['add_user'] = 'Please enter your password';
    }elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8 ){
        $_SESSION['add_user'] = 'Password should be 8+ characters';
    }elseif(!$confirmpassword){
        $_SESSION['add_user'] = 'Please confirm your password';
    }elseif(!$avatar['name']){
        $_SESSION['add_user'] = 'Please add your Avatar';
    }
    else{
        //check if password don't match
        if($createpassword !== $confirmpassword){
            $_SESSION['add_user'] = "Passwords do not match";
            echo"Passwords do not match";
        }else{
            //hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            // check if username or email already exist in database
            $user_check_query = "SELECT * FROM users WHERE
            username = '$username' OR email = '$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0){
                $_SESSION['signup'] = "Username or Email already exist";
            }else {
                //WORK ON AVATAR
                //RENAME AVATAR
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = '../images/' . $avatar_name;
                //Make sure file is an image

                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)){
                    //make sure image is not too large (1mb)
                    if($avatar['size'] < 1000000){
                        //upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    }
                    else{
                        $_SESSION['add_user'] = 'File size too big. Should be less than 1mb';

                    }
                }else{
                    $_SESSION['add_user'] = "File should be png, jpg or jpeg";
                }
            }
        }
    }

    //Redirect back to signup pag eif there was any problem
    if(isset($_SESSION['add_user'])){
        //pass form data back to sign up page
        $_SESSION['add_user-data'] = $_POST;
        header('location: '.ROOT_URL.'admin/add_user.php');
        die();
    }else{
        //insert new user into users table
        $insert_user_query = "INSERT INTO users SET firstname = '$firstname', lastname = '$lastname', username = '$username', email = '$email', password = '$hashed_password', avatar = '$avatar_name', is_admin='$is_admin'";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)){
            //redirect to login  page with  success message
            $_SESSION['add_user-success'] = "New user " . $firstname. " ".$lastname . " added successfully";
            header('location: '. ROOT_URL . 'admin/manage_users.php');
            die();
        }
    }
}else{
    //if button wasn't clicked, bounce back to sign up page
    header(('location: ' . ROOT_URL . 'admin/add_user.php'));
    die();
}

?>