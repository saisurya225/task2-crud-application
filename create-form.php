<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>
    <form action="/php-crud-app/public/create-post.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
        
        <button type="submit">Create Post</button>
    </form>
</body>
</html>