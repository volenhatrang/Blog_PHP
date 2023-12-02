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
    <link rel="stylesheet" href="../css/style.css">
    <!-- ICON CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.html" class="nav_logo">Ebook</a>
            <ul class="nav_items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Sign In</a></li> -->
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="avatar">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <div class="btns">
                <a class="open_nav_btn"><i class="fa-solid fa-bars"  style="color: #ffffff;"></i></a>
                <a class="close_nav_btn"><i class="fa-regular fa-circle-xmark" style="color: #ffffff;"></i></a>
            </div>
            
        </div>
    </nav>

<section class="form_section" >
    <div class="container form_section-container">
        <h2>Add Post</h2>
        <div class="alert_message error">
            <p>This is an error message</p>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select>
                <option value="travel">Travel</option>
                <option value="art">Art</option>
                <option value="technology">Technology</option>
                <option value="food">Food</option>
                <option value="music">Music</option>
                <option value="wild_life">Wild Life</option>
            </select>
            <textarea  rows="10" placeholder="Content"></textarea>
            <div class="form_control inline" >
                <input type="checkbox"  id="is_featured" checked>
                <label for="is_featured"  >Featured</label>
            </div>
            <div class="form_control" >
                <label for="thumbnail"> Add Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button class="btn" type="submit">Add Post</button>
        </form>
    </div>
</section>


<footer>
    <div class="footer_socials">
        <a href="https://www.facebook.com/vlntrang/"><i class="fa-brands fa-facebook"></i></a>
        <a href="http://"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="http://"><i class="fa-brands fa-github"></i></a>
    </div>

    <div class="container footer_container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Music</a></li>
                <li><a href="">Wild Life</a></li>
                <li><a href="">Arts</a></li>
                <li><a href="">Travel</a></li>
                <li><a href="">Technology</a></li>
                <li><a href="">Food</a></li>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Number</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Socials Support</a></li>
                <li><a href="">Location</a></li>
            </ul>
        </article>
        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">Safety</a></li>
                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </article>
    </div>
    <div class="footer_copyright">
        <small>Copyright &copy; 2023</small>
    </div>
</footer>

<script src="main.js"></script>


</body>
</html>