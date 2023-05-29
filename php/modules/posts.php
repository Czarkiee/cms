<h1>Posts</h1>
<a class="btn btn-primary" href="index.php?v=add_post">Dodaj posta</a>

<?php
    $result = $pdo->query('SELECT posts.id, posts.title, categories.name FROM `posts` LEFT JOIN categories ON posts.category_id = categories.id');
    $posts = $result->fetchAll();
?>

<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Category</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>View</th>
    </tr>
    <?php
    foreach($posts as $post) {
        ?>

            <tr>
                <td><?php echo $post['id'];?></td>
                <td><?php echo $post['title'];?></td>
                <td><?php ?></td>

                <td>
                    <a href="index.php?v=edit_post&id=<?php echo $post['id'] ?>" class="btn btn-success">Edit</a>
                </td>
                <td>
                    <a href="index.php?v=delete_post&id=<?php echo $post['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
                <td>
                    <a href="index.php?v=View_post&id=<?php echo $post['id'] ?>" class="btn btn-primary">View</a>
                </td>
            </tr>

        <?php } ?>
</table>