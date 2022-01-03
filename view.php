<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials/not_found.php";
    exit;
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>soura:</th>
                <td><?php echo $user['soura'] ?></td>
            </tr>
            <tr>
                <th>Readername:</th>
                <td><?php echo $user['Readername'] ?></td>
            </tr>

            <tr>
                <th>sort:</th>
                <td><?php echo $user['sort'] ?></td>
            </tr>
            <tr>
                <th>audio:</th>
                <td>
                    <a target="_blank" href="http://<?php echo $user['audio'] ?>">
                        <?php echo $user['website'] ?>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php' ?>
