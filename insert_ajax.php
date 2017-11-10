<?php

function delete($id)
{
    require('database.php');
    try {
        $db->exec('DELETE FROM recipes
                      WHERE ID = ' . $id);
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
    $db = null;
    header("Location:error.php?error=202");
    die();
}

function addRecipe()
{
    require('database.php');
    try {
        $db->exec('INSERT INTO recipes (name, description, ingredients, recipe)
              VALUES ("' . $_POST['i_name'] . '", "' . $_POST['i_description'] . '", "'
            . $_POST['i_ingredients'] . '", "' . $_POST['i_recipe'] . '");');
        $id = $db->lastInsertId();
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
    return $id;
}

function uploadImage($fileToUpload, $id, $type)
{
    $target_dir = "img/recipes/";
    $imageFileType = pathinfo(basename($fileToUpload["name"]), PATHINFO_EXTENSION);
    $fileName = sprintf('%04d', $id) . '-' . $type . "." . $imageFileType;
    $target_file = $target_dir . $fileName;
    $uploadOk = 1;
// Check if image file is a actual image or fake image
    $check = getimagesize($fileToUpload["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        // $uploadOk = 0;
    }
// Check file size
    if ($fileToUpload["size"] > 5000000) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        //echo "Sorry, your file was not uploaded.";
        delete($id);
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
            //echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            //echo "Sorry, there was an error uploading your file.";
        }
    }
}


if (! is_uploaded_file($_FILES["mainUpload"]["tmp_name"]) || ! is_uploaded_file($_FILES["extendedUpload"]["tmp_name"]))
{
    header("Location:error.php?error=202");
    die();
}
$id = addRecipe();
uploadImage($_FILES["mainUpload"], $id, "main");
uploadImage($_FILES["extendedUpload"], $id, "extended");
header("Location:index.php");
