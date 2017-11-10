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
    <link rel="stylesheet" href="./css/insert.css">
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
    <h1>Inserir Receita</h1>
    <h3>Nome</h3>
    <textarea form="insertForm" name="i_name" id="i_name" placeholder="Escreva o nome da receita."></textarea><br>
    <h3>Descrição</h3>
    <textarea form="insertForm" name="i_description" id="i_description"
              placeholder="Dê uma breve descrição para esta."></textarea><br>
    <div id="ing_and_prep">
        <div><h3>Ingredientes</h3>
            <textarea form="insertForm" name="i_ingredients" id="i_ingredients"
                      placeholder="Escreva os ingredientes."></textarea><br>
        </div>
        <div><h3>Preparo</h3>
            <textarea form="insertForm" name="i_recipe" id="i_recipe"
                      placeholder="Agora, escreva os passos para a confecção."></textarea>
        </div>
    </div>
    <form method="post" action="insert_ajax.php" enctype="multipart/form-data" id="insertForm">
        <h3>Imagem 4:3</h3>
        <input type="file" id="mainUpload" name="mainUpload"/><br>
        <h3>Imagem de topo</h3>
        <input type="file" id="extendedUpload" name="extendedUpload"/><br><br><br>
        <input type="submit" value="Concluir" id="submit" name="submit"/>
    </form>
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