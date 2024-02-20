<?php
    include 'partials/header.php';
    //fetch user from database but not current user
    $current_admin_id = $_SESSION['user_id'];

    $query = "SELECT * FROM users WHERE NOT id = '$current_admin_id' ";
    $users = mysqli_query($connection, $query);

?>

<section class="dashboard">
<?php if(isset($_SESSION['add_user-success'])) : ?>
            <div class="alert_message success container">
                <p>
                <?= $_SESSION['add_user-success'];
                unset($_SESSION['add_user-success']);
                ?>
                </p>
            </div>
        <?php endif ?>
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
                <li><a href="index.php"><i class="fa-solid fa-newspaper"></i>
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
                <li><a href="manage_users.php" class="active"><i class="fa-solid fa-users" style="color: #ffffff;"></i></i></i>
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
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($user = mysqli_fetch_assoc($users)) :?>

                    <tr>
                        <td>
                            <?= $user['firstname'] . " ". $user['lastname'] ?>
                        </td>
                        <td>
                        <?= $user['username'] ?>
                        </td>
                        <td><a href="<?= ROOT_URL ?>admin/edit_user.php?id=<?= $user['id'] ?>" class="btn sm">Edit</a></td>
                        <td><a href="<?= ROOT_URL ?>admin/delete_user.php?id=<?= $user['id'] ?>" class="btn danger">Delete</a></td>
                        <td>
                            <?php if ($user['is_admin'] == 1) : ?>
                                Yes
                            <?php else : ?>
                                 No
                            <?php endif ?>
                        </td>
                    </tr>
                    <?php endwhile ?>
                   
                </tbody>
            </table>
        </main>
    </div>

</section>



<?php
    include '../partials/footer.php';
?>