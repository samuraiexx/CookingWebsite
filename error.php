<?php
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <title>Cooking</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/styles.css">
    <style>
    </style>
</head>
<body>
<div id="head">
    <a id="logo" href="index.php">
        <div></div>
        <span>COOKING</span>
    </a>
    <div id="menu">
        <span><a href="index.php">RECEITAS</a></span>
        <span><a href="feed.php">FEED</a></span>
        <span><a href="about.php">SOBRE</a></span>
        <a id="small-menu">+</a>
    </div>
</div>
<div id="container">
    <?php
        if(!isset($_GET["error"]))
            echo '<h1 style="border: none;">Página não encontrada :(</h1>';
        if($_GET["error"] == 202)
            echo '<h1 style="border: none;">ERRO: Algum dos espaços não foi devidamente preenchido</h1>';
        else
            echo '<h1 style="border: none;">Página não encontrada :(</h1>';
    ?>
</div>
<div id="foot">
    <div id="social-media"><div>y</div><div>f</div><div>t</div><div>h</div><div>A</div></div>
    <div id="rights"></div>
</div>
</body>
<script src="./js/jquery-1.11.3.js"></script>
<script src="./js/colorchange.js"></script>
<script>
</script>
</html>