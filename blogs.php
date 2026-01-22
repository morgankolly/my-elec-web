<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../my-elec-website/my-elec-web/admin/config/connection.php';
require_once __DIR__ . '/../my-elec-website/my-elec-web/admin/models/ContentModel.php';

$contentModel = new ContentModel($pdo);
$blogPosts = $contentModel->getContentByCategory(2); // Assuming category_id 2 is for blog posts
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Up Electric - Professional Electrical Services</title>
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo"> <a href="index.php">Light Up Electric </a></div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

<?php foreach ($blogPosts as $post): ?>
    <article class="blog-card">
        <img src="<?= htmlspecialchars($post['photo']) ?>" alt="">
        <h3><?= htmlspecialchars($post['title']) ?></h3>
        <p><?= htmlspecialchars($post['description']) ?></p>
        <a href="blog-single.php?id=<?= $post['category_id'] ?>"</a>
    </article>
<?php endforeach; ?>

</body>
</html>