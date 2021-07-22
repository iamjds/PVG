jQuery.noConflict();
jQuery(document).ready(function ($) {
    $("#grow").hide();
    $("#images").hide();
    $("#more").hide();
    
    var currentdiv = $("#overview");
    var prevlink = $("#overview-nav");
    $("#close-btn").click(function () {
        $(this).parent().hide();
    });
    $("#overlay").click(function () {
        $("#overlay").toggle();
    });
    $("#overview-nav").click(function () {
        if (currentdiv) {
            currentdiv.toggle();
        }
        $("#overview").toggle(500);
        currentdiv = $("#overview");
        prevlink.removeClass("active-nav");
        $("#overview-nav").addClass("active-nav");
        prevlink = $("#overview-nav");
    });
    $("#grow-nav").click(function () {
        if (currentdiv) {
            currentdiv.toggle();
        }
        $("#grow").toggle(500);
        currentdiv = $("#grow");
        prevlink.removeClass("active-nav");
        $("#grow-nav").addClass("active-nav");
        prevlink = $("#grow-nav");
    });
    $("#images-nav").click(function () {
        if (currentdiv) {
            currentdiv.toggle();
        }
        $("#images").toggle(500);
        currentdiv = $("#images");
        prevlink.removeClass("active-nav");
        $("#images-nav").addClass("active-nav");
        prevlink = $("#images-nav");
    });
    $("#more-nav").click(function () {
        if (currentdiv) {
            currentdiv.toggle();
        }
        $("#more").toggle(500);
        currentdiv = $("#more");
        prevlink.removeClass("active-nav");
        $("#more-nav").addClass("active-nav");
        prevlink = $("#more-nav");
    });
});
