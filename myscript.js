//-----Parallax scrolling-----------------------------------
var parallax = function(height, speed, position) {
    return (height - ((position / speed) % (height + 1)));
}

window.onscroll = function() {
    var y = (document.documentElement.a) ? document.documentElement.a : window.pageYOffset;
    var k = parallax(1347, 10, y); //1347, 10, y                         
    page.style.backgroundPosition = "50% " + k + "px"; //<html id="page"> .css-style-sheet html{ background-position:50% 5px; updates background-position based off page scroll position}
};

//--------Drop Down Menu---------------------------------
function ddmenu(x) {
    var panel = document.getElementById(x),
        navarrow = document.getElementById("nav-arrow"),
        maxH = "120px"; //maxH = maximum height of panel after slide down
    if (panel.style.height == maxH) {
        panel.style.height = "0px";
        navarrow.innerHTML = "&#9660;";
        //panel.style.visibility = "hidden"; //for use with firefox fix
    } else {
        //panel.style.visibility = "visible"; //for use with firefox fix
        panel.style.height = maxH;
        navarrow.innerHTML = "&#9650;";
    }
}
//----------img slider-------------------------------
function grow(x) {
    var panel = document.getElementById(x),
        maxH = "40px"; //maxH = maximum height of panel after slide down
    if (panel.style.height == maxH) {
        panel.style.height = "0px";
    } else {
        panel.style.height = maxH;
    }
}
//--------------Slide Show------------------------
function trigger_action(id) {
    $("#photo" + id).trigger('click');
}
function prevTimers() {
    return allTimers().slice(0, $('#pager a.selected').index());
}
function allTimers() {
        return $('#pager a span');
    }
    //Pause
$('#pause').click(function() {
    $('#pause').addClass("paused");
    $('#slider').trigger('pause', true);
    $('#play').removeClass("playing");
    return false;
});
//Play  
$('#play').click(function() {
    $('#play').addClass('playing');
    $('#pause').removeClass("paused");
    $('#slider').trigger('resume');
    $('#slider').trigger("configuration", {
        auto: {
            play: true
        }
    });
});
//Action While Pause
$('#thumb img, #prev, #next, #pager span').click(function() {
    checkpause = $("#pause").attr("class");
    if (checkpause == "icon paused") {
        $('#slider').trigger("configuration", {
            auto: {
                play: false,
                pauseOnHover: false,
            },
        });
    }
});
//Slider and Bar
$('#slider').carouFredSel({
    next: '#next',
    prev: '#prev',
    pager: '#pager',
    direction: "left",
    auto: {
        pauseOnHover: false,
        progress: {
            bar: '#pager a:first span'
        }
    },
    scroll: {
        fx: 'fade',
        duration: 300,
        timeoutDuration: 4500,
        onAfter: function() {
            $(".small").removeClass("activeSlide");
            $(".selected").ready(function() {
                var thumbid = $(".selected").attr("id");
                var thumbid = thumbid.substring(5); //not the number of img's, will change the .activeSlide class to all thumbs
                $("#thumb" + thumbid).addClass('activeSlide');
            });

            allTimers().stop().width(0);
            prevTimers().width(150); //also update CSS #pager a {width: }
            $(this).trigger('configuration', ['auto.progress.bar', '#pager a.selected span']);

        }
    },
    pagination: {
        container: '#pager',
        anchorBuilder: false
    }
});
//-------------------gallery----------------------------
// (function(d, s, id) {
//   var js, fjs = d.getElementsByTagName(s)[0];
//   if (d.getElementById(id)) return;
//   js = d.createElement(s); js.id = id;
//   js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
//   fjs.parentNode.insertBefore(js, fjs);
// }(document, 'script', 'facebook-jssdk'));




//---------------------
