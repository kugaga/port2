<?php require_once('data.php') ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>参考書</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
  <div class="container">
  <h1>SANKUSU</h1>
  <div>
</header>  
<body>
<div class="backgruoud">
  <div class="menu-wrapper container">
    <h1 class="logo">参考書掲示板</h1>
    <h1>みんなで解こう、話し合おう</h1>
    <div class="explanation">
    <p ><span>参考書ごとに掲示板があります</span></p>
    <p><span>解き方を教え合ってください<span></p>
    <div>
  <div>  

    <form method="post" action="confirm.php">

        <?php foreach ($books as $book): ?>
          <div class="menu-item">
            <img src="<?php echo $book->getImage() ?>" class="menu-item-image">
            <h5 class="menu-item-name"><?php echo $book->getName() ?></h3>
          </div>
        <?php endforeach ?>
    </form>
<div>  
</body>
</html>
