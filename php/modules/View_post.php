<?php
if(!isset($_GET['id'])) {
    header('location: index.php?v=posts');
}

$result = $pdo->prepare('SELECT title, body FROM posts WHERE id = :id');
$result->bindParam(':id', $_GET['id']);
$result->execute();
$post = $result->fetch();

?>
<h1><?php echo $post['title']?></h1><br>
<h2><?php echo $post['body']?></h2>