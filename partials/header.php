<?php
    require 'config/database.php';

    //fetch current user from  database
    if(isset($_SESSION['user_id'])){
        $id = filter_var($_SESSION['user_id'], FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT avatar FROM users WHERE id = '$id'";
        $result = mysqli_query($connection, $query);
        $avatar = mysqli_fetch_assoc($result);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog</title>
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Open+Sans:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Roboto+Mono:wght@300&family=Tilt+Neon&family=Ysabeau+Infant:wght@200&display=swap" rel="stylesheet">

    <!-- CSS STYLE -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!-- ICON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="<?= ROOT_URL?>" class="nav_logo">Ebook</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL?>contact.php">Contact</a></li>
                <li><a href="<?= ROOT_URL?>signin.php">Sign In</a></li>
                <?php if(isset($_SESSION['user_id'])) :?>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="<?= ROOT_URL. 'images/'. $avatar['avatar']?>" alt="avatar">
                    </div>
                    <ul class="submenu">
                        <li><a href="<?= ROOT_URL?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL?>logout.php">Log Out</a></li>
                    </ul>
                </li>
                <?php endif ?>
            </ul>
            <div class="btns">
                <a class="open_nav_btn"><i class="fa-solid fa-bars"  style="color: #ffffff;"></i></a>
                <a class="close_nav_btn"><i class="fa-regular fa-circle-xmark" style="color: #ffffff;"></i></a>
            </div>
            
        </div>
    </nav>
<!-- </body>
</html> -->