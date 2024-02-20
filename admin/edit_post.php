<?php
    include 'partials/header.php';
?>


<section class="form_section" >
    <div class="container form_section-container">
        <h2>Edit Post</h2>

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
                <label for="is_featured">Featured</label>
            </div>
            <div class="form_control" >
                <label for="thumbnail">Change Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button class="btn" type="submit">Update Post</button>
        </form>
    </div>
</section>


<?php
    include '../partials/footer.php';
?>

