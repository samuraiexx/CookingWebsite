<?php
include('functions.php');
require_once('database.php');

try {
    $results = $db->query(
        'select recipes.id as id, recipes.name as name,
        recipes.description as description,
        recipes.likes as likes, recipes.deslikes as deslikes,
        recipes.views as views from recipes');
    $db = null;
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}
$recipes = $results->fetchAll(PDO::FETCH_ASSOC);
/*echo '<pre>';
var_dump($projects);
echo '</pre>';
die();*/
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <title>Cooking</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/index.css">
    <style>
    </style>
</head>
<body>
<div id="head">
    <a href="#" id="logo">
        <div></div>
        <span>COOKING</span>
    </a>
    <div id="menu">
        <span><a href="#">RECEITAS</a></span>
        <span><a href="feed.php">FEED</a></span>
        <span><a href="about.php">SOBRE</a></span>
        <a id="small-menu">+</a>
    </div>
</div>
<div id="container">
    <h1>Receitas</h1>
    <ul class="recipes-list">
        <?php
        for($i = 0; $i < 8; $i++){
            foreach($recipes as $recipe)
            {
                echo '<li style = "background-image: ' . urlImage($recipe["id"], "img/recipes/", "main") . '" class="recipe" data-id="' . $recipe["id"] . '">';
                echo '<a href="recipe.php?id='. $recipe["id"] . '" onclick="ajax_AddLike(' . $recipe["id"] . ', \'views\'); return false;" class="recipe-hover">';
                echo '<div>';
                echo '<div class="name">'. $recipe["name"] . '</div>';
                echo '<div class="description">'. $recipe["description"] . '</div>';
                echo '<div>
                <span class="likes">' . $recipe["likes"] . '</span>
                <span class="icon' . verifyLike($recipe["id"], 'likes') . '" onclick="ajax_AddLike(' . $recipe["id"] . ', \'likes\'); event.stopPropagation(); return false;">l</span>
                <span class="deslikes">' . $recipe["deslikes"]. '</span>
                <span class="icon' . verifyLike($recipe["id"], 'deslikes') . '" onclick="ajax_AddLike(' . $recipe["id"] . ', \'deslikes\'); event.stopPropagation(); return false;">d</span>
                <span class="views">' . $recipe["views"] . '</span>
                <span class="icon">g</span></div>';
                echo '</div></a></li>';
            }
        } ?>
    </ul>
</div>
<div id="foot">
    <div id="social-media"><div>y</div><div>f</div><div>t</div><div>h</div><div>A</div></div>
    <div id="rights"></div>
</div>
</body>
<script src="./js/jquery-1.11.3.js"></script>
<script src="./js/colorchange.js"></script>
<script src="./js/likes.js"></script>
<script>
    <?php
    ?>
</script>
</html>