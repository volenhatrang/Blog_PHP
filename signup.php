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
    <link rel="stylesheet" href="./css/style.css">
    <!-- ICON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>


<section class="form_section">
    <div class="container form_section-container">
        <h2>Sign Up</h2>
        <div class="alert_message error">
            <p>This is an error message</p>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="First name">
            <input type="text" placeholder="Last name">
            <input type="text" placeholder="Username">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Create password">
            <input type="password" placeholder="Confirm password">
            <div class="form_control">
                <label for="avatar">Upload your avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button class="btn" type="submit">Sign Up</button>
            <small>Already have an account? <a href="./signin.html">Sign In</a></small>
        </form>
    </div>
</section>
</body>
</html>
