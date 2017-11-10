<?php
include('functions.php');
require_once('database.php');
if ( ! isset($_GET['id']))
    header("Location:notFound.php");
try {
    $results = $db->query(
        'select recipes.name as name,
        recipes.recipe as recipe, recipes.ingredients as ingredients,
        recipes.likes as likes, recipes.deslikes as deslikes,
        recipes.views as views from recipes where recipes.id=' . $_GET['id']);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
$recipe = $results->fetch();
/*echo '<pre>';
var_dump($recipe);
echo '</pre>';
die();*/
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <title>Cooking</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/recipe.css">
    <style>
    </style>
</head>
<body>
<div id="head">
    <a href="index.php" id="logo">
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
    <?php echo '<div ' . 'style = "background-image: ' . urlImage($_GET['id'], "img/recipes/", "extended") . '" id="photo"></div>'; ?>
    <h1><?php echo $recipe['name']; ?>
    </h1>
    <div id="recipe-container">
        <div id="ingredients">
             <?php echo '<p1>' . nl2br($recipe['ingredients']) . '</p1>'; ?>
        </div><div id="preparation">
            <?php echo '<p1>' . nl2br($recipe['recipe']) . '</p1>'; ?></div>
    </div>
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