//active line for navigation
$(function() {

    var $el, leftPos, newWidth,
        $mainNav = $("#navigation");
    
    $mainNav.append("<span id='highlight'></span>");
    var $magicLine = $("#highlight");
    
    $magicLine
        .width($(".active").width())
        .css("left", $(".active a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
        
    $("#navigation li a").hover(function() {
        $el = $(this);
        leftPos = $el.parent().position().left;
        newWidth = $el.parent().width();
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
    });
});

