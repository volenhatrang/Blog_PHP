<?php
    include 'partials/header.php';
?>

<section class="dashboard">
    <div class="container dashboard_container">
        <button id="show_sidebar-btn" class="sidebar_toggle"></button>
        <button id="hide_sidebar-btn" class="sidebar_toggle"></button>
        <aside>
            <ul>
                <li><a href="add_post.php"><i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                    <h5>Add Post</h5>
                </a></li>
            </ul>
            <ul>
                <li><a href="index.php" class="active"><i class="fa-solid fa-newspaper"></i>
                    <h5>Manage Post</h5>
                </a></li>
            </ul>
            <?php if(isset($_SESSION['user_is_admin'])) :?>
            <ul>
                <li><a href="add_user.php"><i class="fa-solid fa-user"></i></i>
                    <h5>Add User</h5>
                </a></li>
            </ul>
            <ul>
                <li><a href="manage_users.php" ><i class="fa-solid fa-users" style="color: #ffffff;"></i></i></i>
                    <h5>Manage User</h5>
                </a></li>
            </ul>
            <ul>
                <li><a href="add_category.php"><i class="fa-solid fa-list"></i>
                    <h5>Add Category</h5>
                </a></li>
            </ul>
            <ul>
                <li><a href="manage_categories.php" ><i class="fa-solid fa-layer-group"></i>
                    <h5>Manage Category</h5>
                </a></li>
            </ul>
            <?php endif ?>
            
        </aside>

        <main>
            <h2>Manage Posts</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Henry Kissinger, who shaped world affairs under two presidents, dies at 100</td>
                        <td>Wild Life</td>
                        <td><a href="edit_post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-post.php" class="btn danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Henry Kissinger, who shaped world affairs under two presidents, dies at 100</td>
                        <td>Wild Life</td>
                        <td><a href="edit_post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-post.php" class="btn danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Henry Kissinger, who shaped world affairs under two presidents, dies at 100</td>
                        <td>Wild Life</td>
                        <td><a href="edit_post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-post.php" class="btn danger">Delete</a></td>
                    </tr>
                   

                </tbody>
            </table>
        </main>
    </div>

</section>

<?php
    include '../partials/footer.php';
?>
