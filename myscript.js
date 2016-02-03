function swap_focus(tab) {
    var curPanel = $('#preview-'+tab).find('.active-preview').attr('class').replace(/^(\S*).*/, '$1');//magic
    $("#preview-" + tab).css("display", "block").siblings().css("display", "none");//preview scoll boxes
    $("#sel-" + tab).addClass('active-media').siblings().removeClass('active-media');//pictures, renders, videos
    swap_event(tab,curPanel);
    swap_pager(curPanel);
    link_show(tab,curPanel);
}
function swap_box(tab,panel) {
    swap_event(tab,panel);
    swap_pager(panel);
    link_show(tab,panel);
    $("." + panel + ", #" + tab).removeClass("active-preview");//box around all non selected previews
    $("." + panel).addClass("active-preview");//box around selected preview
}
function swap_pager(panel) {
    $("#page-" + panel).addClass("pager-active").css("display", "block").siblings().css("display", "none").removeClass("pager-active");//pager of selected
    //$("#page-" + panel).addClass("pager-active").siblings()//for arrows to know what is not selected
}
function swap_event(tab,panel) {
    if (tab == 'videos' || tab == 'footage') {
        var frameString = '<div id="event"><iframe width="750" height="422" src="" frameborder="0" allowfullscreen></iframe></div>';
        $("#event").replaceWith(frameString);
        $("#event").find("iframe").attr("src", $("#page-" + panel).find(".preview-select").attr("href"));
        $("#arrow-l,#arrow-r").css("display", "none");
    } else {
        var imgString = '<div id="event"><img src=""></div>';
        $("#event").replaceWith(imgString);
        $("#event").find("img").attr("src", $("#page-" + panel).find(".preview-select").attr("href"));
        $("#arrow-l,#arrow-r").css("display", "block");
    }
}
function link_show(tab,panel) {
    if (tab == 'footage') {
        $("#link-footage2,#link-footage3").css("display", "none");
        $("#link-" + panel).css("display", "block");
    } else {
        $("#link-footage2,#link-footage3").css("display", "none");
    }
}
//--------------------------------------------------------------------------------------------------------
$(document).ready(function() {//swap img on mouse enter function
    $("#gal-page").find('a').mouseenter(function() {
        $("#event").html($("<img>").attr("src", this.href));
        $(this).addClass('preview-select').siblings().removeClass('preview-select');
        return false;
    })
    $("#gal-page").find('a').click(function() {//when a user clicks on the leaning button | used for mobile
        $("#event").html($("<img>").attr("src", this.href));
        return false;
    })
//   $("#arrow-l").hover(function() {
//    $("#arrow-l-w").toggle();
//     $("#arrow-l-r").toggle();
//   })
//   $("#arrow-r").hover(function() {
//     $("#arrow-r-w").toggle();
//     $("#arrow-r-r").toggle();
//   })
})//---------------------------------------------------------------------
function flip(arrow) {//left and right arrow buttons
    var curPage = $('#gal-page').find('.pager-active').attr('id');
    var curSel = $("#"+curPage).find('.preview-select');
    var chopPage = $('#gal-page').find('.pager-active').attr('id').slice(5);

    if (arrow == 'left') {//if left button clicked
        var preId = curSel.prev().attr('href');
        if (preId == undefined) {//if cant go left anymore, goto last
            $("#"+curPage+' a:last-child').addClass('preview-select').siblings().removeClass('preview-select');
        } else {//go left
            curSel.prev().addClass('preview-select').siblings().removeClass('preview-select');
        }
    }  else {//when another button besides 'left' clicked
        var nextId = curSel.next().attr('href');
        if (nextId == undefined) {//if cant go right anymore, goto first
            $("#"+curPage+' a:first-child').addClass('preview-select').siblings().removeClass('preview-select');
        } else {//go right
            curSel.next().addClass('preview-select').siblings().removeClass('preview-select');
        }
    }
    swap_event("img",chopPage);
}