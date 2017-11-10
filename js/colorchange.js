color = "";
var rand = Math.floor(Math.random() * 5); // Between 0 e 4
if (rand == 0) {
    color = "#5FCF80";
} else if (rand == 1) {
    color = "#CF5090";
} else if (rand == 2) {
    color = "#9043CF";
} else if (rand == 3) {
    color = "#66BACF";
} else if (rand == 4) {
    color = "#CFC147";
}
if(color != "") {
    $("#logo").css("background-color", color);
    $("#foot").css("background-color", color);
    $("#menu span a").css("border-color", color);
    $(".liked").css("color", color);
    $(".recipes-list").find(".liked").removeClass("liked"); // Class used just for the first verification
    $("#menu span a").hover( function () {
            $(this).css("color", color);
        },
        function () {
            $(this).css("color", "rgb(133,133,133)");
        }
    );
}