<!DOCTYPE html>
<html>
<head>
    <title>Liste des articles</title>
</head>
<body>
    <h1>Liste des articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li><a href="/article/<?php echo $article['id']; ?>"><?php echo htmlspecialchars($article['titre']); ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>