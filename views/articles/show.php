<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($article['titre']); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($article['titre']); ?></h1>
    <p><?php echo nl2br(htmlspecialchars($article['contenu'])); ?></p>
    <p>Publié le : <?php echo $article['date_creation']; ?></p>
    <p><a href="/">Retour à la liste</a></p>
</body>
</html>