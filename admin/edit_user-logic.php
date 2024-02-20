<?php 
 if(isset($_POST['submit'])){
    //get update user
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_SPECIAL_CHARS);  
    $is_admin = filter_var($_POST['user_role'], FILTER_SANITIZE_NUMBER_INT);

    //check for validate input
    if(!$firstname || !$lastname){
        $_SESSION['edit_user'] = "Invalid Form input on edit page";
    }
    else{
        $query = "UPDATE users SET firstname='$firstname', lastname='$lastname', is_admin='$is_admin'  WHERE id= $id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if(mysqli_errno($connection)){
            $_SESSION['edit_user'] = "Failed  to update user";
        }
        else{
            $_SESSION['edit_user-success'] = "Successed  to update user";
        }
    }
 }
?>