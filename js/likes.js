function ajax_AddLike(recipe_id, type) { //type must be likes, deslikes or views
    $.ajax({
        method: "POST",
        url: "js/likes_ajax.php",
        data: {recipe_id: recipe_id, type: type},
        success: function (response) {
            //Update like status
            var $item = $(".recipes-list").find("[data-id='" + recipe_id + "']");
            if (response == 'IS VIEWED')
                window.location = 'recipe.php?id=' + recipe_id;
            else if (response == 'CHANGE') {
                $item.find("." + type).next(".icon").css('color', color);
                $item.find("." + type).text(parseInt($item.find("." + type).first().text()) + 1);
                if (type == 'likes') {
                    $item.find(".deslikes").next(".icon").css('color', 'white');
                    $item.find(".deslikes").text(parseInt($item.find(".deslikes").first().text()) - 1);
                } else {
                    $item.find(".likes").next(".icon").css('color', 'white');
                    $item.find(".likes").text(parseInt($item.find(".likes").first().text()) - 1);
                }
            } else if (response == 'UNDO') {
                $item.find("." + type).next(".icon").css('color', 'white');
                $item.find("." + type).text(parseInt($item.find("." + type).first().text()) - 1);
            } else {
                if (type != 'views') {
                    $item.find("." + type).next(".icon").css('color', color);
                    $item.find("." + type).text(parseInt($item.find("." + type).first().text()) + 1);
                }   else window.location = 'recipe.php?id=' + recipe_id;
            }
        }
    });
}