<?php
    include 'partials/header.php';
?>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Add Category</h2>
        <div class="alert_message error">
            <p>This is an error message</p>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <textarea  rows="4" placeholder="Description"></textarea>
            <button class="btn" type="submit">Add categpry</button>
        </form>
    </div>
</section>


<?php
    include '../partials/footer.php';
?>