<?php
function urlImage($id, $folder, $type = "main")
{
    $file = $folder . sprintf('%04d', $id) . '-' . $type . '.jpg';
    if (file_exists($file))
        return "url(" . $file . ")";
    else if (file_exists($file = rtrim($file, "jpg") . "png"))
            return "url(" . $file . ")";
        else if (file_exists($file = rtrim($file, "png") . "jpeg"))
            return "url(" . $file . ")";
        else if (file_exists($file = rtrim($file, "jpeg") . "gif"))
            return "url(" . $file . ")";
        else
            return '"url(' . $folder . 'default.jpg)"';
}

function verifyLike($id, $type){
    if(isset($_COOKIE['cooking-likes-' . $id]) && $_COOKIE['cooking-likes-' . $id] == $type)
        return ' liked';
    else
        return '';
}