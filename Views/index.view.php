<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 1:34 PM
 */
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="css/styles.css" rel="stylesheet" />
    <title>MicroCMS - Home</title>
</head>
<body>
<?php require("header.view.php"); ?>
<?php
foreach ($articles as $article): ?>
    <article>
        <h2><?php echo $article['title'] ?></h2>
        <p><?php echo $article['html_content'] ?></p>
    </article>
<?php endforeach ?>
<?php require("footer.view.php"); ?>
</body>
</html>