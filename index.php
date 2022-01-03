<?php
require 'users/users.php';

$users = getUsers();

include 'partials/header.php';
?>


<div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Create new User</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th>soura</th>
            <th>Readername</th>
            <th>sort</th>
            <th>audio</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['soura'] ?></td>
                <td><?php echo $user['Readername'] ?></td>
                <td><?php echo $user['sort'] ?></td>
                <td><?php echo $user['audio'] ?></td>
                <td>
                    <a href="view.php?soura=<?php echo $user['soura'] ?>&reader=<?php echo $user['Readername'] ?>&id=2" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>
