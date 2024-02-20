<?php
    require('config/constants.php');

    $username_email = $_SESSION['signin-data']['username_email'] ?? null;
    $password = $_SESSION['signin-data']['password'] ?? null ;
    unset($_SESSION['signin-data']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
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


<section class="form_section">
    <div class="container form_section-container">
        <h2>Sign In</h2>
        <?php if(isset($_SESSION['signup-success'])) : ?>
            <div class="alert_message success">
                <p>
                <?= $_SESSION['signup-success'];
                unset($_SESSION['signup-success']);
                ?>
                </p>
            </div>
        <?php elseif(isset($_SESSION['signin'])) : ?>
            <div class="alert_message error">
                <p>
                <?= $_SESSION['signin'];
                unset($_SESSION['signin']);
                ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" value="<?= $username_email?>" placeholder="Username or Email">
            <input type="password" name="password" value="<?= $password ?>" placeholder="Password">
            <button class="btn" name="submit" type="submit">Sign In</button>
            <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>
</body>
</html>
