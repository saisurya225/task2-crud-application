<?php
require '../config/database.php';
require '../utils/session.php';

$stmt = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
?>

<a href="create.php">Create New Post</a>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <h2><?= htmlspecialchars($post['title']) ?></h2>
            <p><?= htmlspecialchars($post['content']) ?></p>
            <a href="edit.php?id=<?= $post['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $post['id'] ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>