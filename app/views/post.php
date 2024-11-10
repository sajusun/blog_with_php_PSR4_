<?php ob_start(); ?>
<h1><?= htmlspecialchars($post['title']) ?></h1>
<p><?= htmlspecialchars($post['content']) ?></p>
<a href="/">Back to Home</a>
<?php $content = ob_get_clean(); ?>
<?php include 'layouts/main.php'; ?>
