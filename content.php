<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../my-elec-website/my-elec-web/admin/config/connection.php';

$id = (int) ($_GET['content_id'] ?? 0);

$stmt = $pdo->prepare("SELECT * FROM Content WHERE content_id = ?");
$stmt->execute([$id]);
$content = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$content) {
    die("Content not found");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($content['title']) ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div style="display: flex; align-items: flex-start; gap: 20px;">
<h1><?= htmlspecialchars($content['title']) ?></h1>
<div>

<img src="<?= htmlspecialchars($content['photo']) ?>"
     alt="<?= htmlspecialchars($content['title']) ?>"
     style="max-width:50%; height:auto;">
</div>
<p><?= nl2br(htmlspecialchars($content['description'])) ?></p>
</div>

</body>
</html>
