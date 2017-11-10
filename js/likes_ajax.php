<?php
function updateLikes($type, $recipe_id, $amount)
{
    require('../database.php');
    try {
        if ($type != 'likes' && $type != 'deslikes' && $type != 'views') {
            echo 'Sorry, a project could not be found with the provided id.';
            die();
        }
        $results = $db->prepare('UPDATE recipes SET ' . $type . ' = ' . $type . ' + ' . $amount . ' WHERE ID = :id');
        $results->bindParam(':id', $recipe_id, PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
    $db = null;
}

if ( ! empty($recipe_id = $_POST["recipe_id"]) && ! empty($type = $_POST["type"])) {
    if ($type == 'views' && isset($_COOKIE['cooking-views-' . $recipe_id])) {
        echo 'IS VIEWED';
    } else if (isset($_COOKIE['cooking-likes-' . $recipe_id]) && $type != 'views') {
        if ($_COOKIE['cooking-likes-' . $recipe_id] != $type) {
            updateLikes($type, $recipe_id, 1);
            updateLikes($_COOKIE['cooking-likes-' . $recipe_id], $recipe_id, -1);
            setcookie('cooking-likes-' . $recipe_id, $type, time() + 86400 * 365, '/');
            echo 'CHANGE';
        } else {
            updateLikes($type, $recipe_id, -1);
            setcookie('cooking-likes-' . $recipe_id, "", time() - 3600, '/');
            echo 'UNDO';
        }
    } else {
        updateLikes($type, $recipe_id, 1);
        if ($type == 'views')
            setcookie('cooking-views-' . $recipe_id, strtotime(date('Y-m-d')), time() + 3600, '/');
        else
            setcookie('cooking-likes-' . $recipe_id, $type, time() + 86400 * 365, '/');
        echo 'ADDED';
    }
}