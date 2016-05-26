<?php include '../head.php'; ?>
<link href="../screen.css" rel="stylesheet" type="text/css" media="screen" />
<title>Gallery | Wesll</title>
<?php include_once( "../analyticstracking.php") ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<body id="gallery">
   <!--identifies current page for navigation bar underline.-->
   <div class="wrapper">

      <?php include '../navigation.php'; ?>
      <div id="logo"><a href="../"><img src="../images/logo42-white.png" width="350" height="83" /></a></div>
      
      <div id="gallery-wrap">
         <div id="media-wrap" class="userSelect">
            <div id="media">
               <div id="media-main">

                  <div id="selector" class="item">
                     <a id="sel-pictures" onclick="swap_focus('pictures')" class="active-media">pictures</a>
                     <a id="sel-renders" onclick="swap_focus('renders')">renders</a>
                     <a id="sel-videos" onclick="swap_focus('videos')">videos</a>
                     <a id="sel-footage" onclick="swap_focus('footage')"><h2>Snowmobile video</h2><h1>...First Test</h1></a>
                  </div>

                  <div id="event">
                     <img src="../images/media/snow/snow-0030.jpg" ></img>
                  </div>

                  <div id="arrow-l" onclick="flip('left')" >
                     <img src="../images/media/left9.png" width="17" height="30" id="arrow-l-w" class="show"/>
                     <!--<img src="../images/media/left1.png" width="17" height="30" id="arrow-l-r" class="hide"/>-->
                  </div>
                  
                  <div id="arrow-r" onclick="flip('right')">
                     <img src="../images/media/right9.png" width="17" height="30" id="arrow-r-w" class="show"/>
                     <!--<img src="../images/media/right1.png" width="17" height="30" id="arrow-r-r" class="hide"/>-->
                  </div>

                  <div id="gal-page">
                     <div id="page-vid1"><a href="http://www.youtube.com/embed/qSMWEd54NcA?rel=0&amp;showinfo=0" class="preview-select"></a></div>
                     <div id="page-vid2"><a href="http://www.youtube.com/embed/85vfwqMiRFQ?rel=0&amp;showinfo=0" class="preview-select"></a></div>
                     <div id="page-vid3"><a href="http://www.youtube.com/embed/2sRi7hIgK-Q?rel=0&amp;showinfo=0" class="preview-select"></a></div>
                     <div id="page-vid4"><a href="http://www.youtube.com/embed/_yjSPKCC4bY?rel=0&amp;showinfo=0" class="preview-select"></a></div>

                     <div id="page-footage3"><a href="https://www.youtube.com/embed/KXhIoymiv54?rel=0&amp;showinfo=0" class="preview-select"></a></div>
                     <div id="page-footage2"><a href="https://www.youtube.com/embed/-tlUQCcIyXA?rel=0&amp;showinfo=0" class="preview-select"></a></div>

                     <div id="page-aprillia">
                        <a href="../images/media/aprillia/aprillia-1.jpg" class="preview-select"></a>
                        <a href="../images/media/aprillia/aprillia-2.jpg"></a>
                        <a href="../images/media/aprillia/aprillia-3.jpg"></a>
                        <a href="../images/media/aprillia/aprillia-4.jpg"></a>
                        <a href="../images/media/aprillia/aprillia-5.jpg"></a>
                        <a href="../images/media/aprillia/aprillia-6.jpg"></a>
                     </div>

                     <div id="page-ducati">
                        <a href="../images/media/ducati/ducati-1.jpg" class="preview-select"></a>
                        <a href="../images/media/ducati/ducati-2.jpg"></a>
                        <a href="../images/media/ducati/ducati-3.jpg"></a>
                        <a href="../images/media/ducati/ducati-4.jpg"></a>
                        <a href="../images/media/ducati/ducati-5.jpg"></a>
                        <a href="../images/media/ducati/ducati-6.jpg"></a>
                        <a href="../images/media/ducati/ducati-7.jpg"></a>
                     </div>

                     <div id="page-harley">
                        <a href="../images/media/harley/harley-1.jpg" class="preview-select"></a>
                        <a href="../images/media/harley/harley-2.jpg"></a>
                        <a href="../images/media/harley/harley-3.jpg"></a>
                        <a href="../images/media/harley/harley-4.jpg"></a>
                        <a href="../images/media/harley/harley-5.jpg"></a>
                        <a href="../images/media/harley/harley-6.jpg"></a>
                        <a href="../images/media/harley/harley-7.jpg"></a>
                        <a href="../images/media/harley/harley-8.jpg"></a>
                        <a href="../images/media/harley/harley-9.jpg"></a>
                     </div>

                     <div id="page-honda">
                        <a href="../images/media/honda/honda-1.jpg" class="preview-select"></a>
                        <a href="../images/media/honda/honda-2.jpg"></a>
                        <a href="../images/media/honda/honda-3.jpg"></a>
                        <a href="../images/media/honda/honda-4.jpg"></a>
                        <a href="../images/media/honda/honda-5.jpg"></a>
                        <a href="../images/media/honda/honda-6.jpg"></a>
                     </div>

                     <div id="page-kawasaki">
                        <a href="../images/media/kawasaki/kawasaki-1.jpg" class="preview-select"></a>
                        <a href="../images/media/kawasaki/kawasaki-2.jpg"></a>
                        <a href="../images/media/kawasaki/kawasaki-3.jpg"></a>
                        <a href="../images/media/kawasaki/kawasaki-4.jpg"></a>
                        <a href="../images/media/kawasaki/kawasaki-5.jpg"></a>
                        <a href="../images/media/kawasaki/kawasaki-6.jpg"></a>
                     </div>

                     <div id="page-prototype">
                        <a href="../images/media/prototype/prototype-1.jpg" class="preview-select"></a>
                        <a href="../images/media/prototype/prototype-2.jpg"></a>
                        <a href="../images/media/prototype/prototype-3.png"></a>
                        <a href="../images/media/prototype/prototype-4.png"></a>
                        <a href="../images/media/prototype/prototype-5.jpg"></a>
                        <a  href="../images/media/prototype/prototype-6.jpg"></a>
                        <!--<a href="../images/media/prototype/prototype-7.jpg"></a>-->
                        <!--<a href="../images/media/prototype/prototype-8.jpg"></a>-->
                        <a href="../images/media/prototype/prototype-9.jpg"></a>
                        <a href="../images/media/prototype/prototype-10.jpg"></a>
                        <a href="../images/media/prototype/prototype-11.jpg"></a>
                        <a href="../images/media/prototype/prototype-12.jpg"></a>
                        <a href="../images/media/prototype/prototype-13.jpg"></a>
                        <a href="../images/media/prototype/prototype-14.jpg"></a>
                        <a href="../images/media/prototype/prototype-15.jpg"></a>
                        <a href="../images/media/prototype/prototype-16.jpg"></a>
                        <!--<a href="../images/media/prototype/prototype-17.jpg"></a>-->
                        <!--<a href="../images/media/prototype/prototype-18.jpg"></a>-->
                        <!--<a href="../images/media/prototype/prototype-19.jpg"></a>-->
                        <a href="../images/media/prototype/prototype-20.jpg"></a>
                        <a href="../images/media/prototype/prototype-21.jpg"></a>
                     </div>

                     <div id="page-snow" class="pager-active">
                        <a href="../images/media/snow/snow-0030.jpg" class="preview-select"></a>
                        <a href="../images/media/snow/snow-0019.jpg"></a>
                        <a href="../images/media/snow/snow-0023.jpg"></a>
                        <a href="../images/media/snow/snow-0026.jpg"></a>
                        <a href="../images/media/snow/snow-0032.jpg"></a>
                        <a href="../images/media/snow/snow-0050.jpg"></a>
                        <a href="../images/media/snow/snow-0052.jpg"></a>
                        <a href="../images/media/snow/snow-0053.jpg"></a>
                        <a href="../images/media/snow/snow-0057.jpg"></a>
                        <a href="../images/media/snow/snow-0066.jpg"></a>
                        <a href="../images/media/snow/snow-0076.jpg"></a>
                        <a href="../images/media/snow/snow-0078.jpg"></a>
                        <a href="../images/media/snow/snow-0094.jpg"></a>
                     </div>

                     <div id="page-box">
                        <a href="../images/media/box/box-0152.jpg" class="preview-select"></a>
                        <a href="../images/media/box/box-0150.jpg"></a>
                        <a href="../images/media/box/box-0153.jpg"></a>
                        <a href="../images/media/box/box-0157.jpg"></a>
                        <a href="../images/media/box/box-0162.jpg"></a>
                        <a href="../images/media/box/box-0167.jpg"></a>
                        <a href="../images/media/box/box-0170.jpg"></a>
                        <a href="../images/media/box/box-0174.jpg"></a>
                     </div>

                     <div id="page-triumph">
                        <a href="../images/media/triumph/triumph-1.jpg" class="preview-select"></a>
                        <a href="../images/media/triumph/triumph-2.jpg"></a>
                        <a href="../images/media/triumph/triumph-3.jpg"></a>
                        <a href="../images/media/triumph/triumph-4.jpg"></a>
                        <a href="../images/media/triumph/triumph-5.jpg"></a>
                        <a href="../images/media/triumph/triumph-6.jpg"></a>
                     </div>

                     <div id="page-wesll">
                        <a href="../images/media/wesll/wesll-1.jpg" class="preview-select"></a>
                        <a href="../images/media/wesll/wesll-2.jpg"></a>
                        <a href="../images/media/wesll/wesll-3.jpg"></a>
                        <a href="../images/media/wesll/wesll-4.jpg"></a>
                        <a href="../images/media/wesll/wesll-5.jpg"></a>
                        <a href="../images/media/wesll/wesll-6.jpg"></a>
                        <a href="../images/media/wesll/wesll-7.jpg"></a>
                        <a href="../images/media/wesll/wesll-8.jpg"></a>
                     </div>             

                     <div id="page-wing">
                        <a href="../images/media/wing/wing-1.jpg" class="preview-select"></a>
                        <a href="../images/media/wing/wing-2.jpg"></a>
                        <a href="../images/media/wing/wing-3.jpg"></a>
                        <a href="../images/media/wing/wing-4.jpg"></a>
                        <a href="../images/media/wing/wing-5.jpg"></a>
                        <a href="../images/media/wing/wing-6.jpg"></a>
                        <a href="../images/media/wing/wing-7.jpg"></a>
                        <a href="../images/media/wing/wing-8.jpg"></a>
                     </div>

                     <div id="page-yamaha">
                        <a href="../images/media/yamaha/yamaha-1.jpg" class="preview-select"></a>
                        <a href="../images/media/yamaha/yamaha-2.jpg"></a>
                        <a href="../images/media/yamaha/yamaha-3.jpg"></a>
                        <a href="../images/media/yamaha/yamaha-4.jpg"></a>
                        <a href="../images/media/yamaha/yamaha-5.jpg"></a>
                        <a href="../images/media/yamaha/yamaha-6.jpg"></a>
                     </div>

                     <div id="page-event">
                        <a href="../images/media/events/event-1.jpg" class="preview-select"></a>
                        <a href="../images/media/events/event-2.jpg"></a>
                        <a href="../images/media/events/event-3.jpg"></a>
                        <a href="../images/media/events/event-4.jpg"></a>
                     </div>

                     <div id="page-raw">
                        <a href="../images/media/raw/raw-1.jpg" class="preview-select"></a>
                        <a href="../images/media/raw/raw-2.jpg"></a>
                     </div>

                     <div id="page-zoom">
                        <a href="../images/media/zoom/zoom-1.jpg" class="preview-select"></a>
                        <a href="../images/media/zoom/zoom-2.jpg"></a>
                        <a href="../images/media/zoom/zoom-3.jpg"></a>
                        <a href="../images/media/zoom/zoom-4.jpg"></a>
                        <a href="../images/media/zoom/zoom-5.jpg"></a>
                     </div>
                  </div>

               </div>

               <div id="preview">
                  <div id="preview-pictures">
                     <a onclick="swap_box('pictures','snow')"/><img src="../images/media/snow/snow-0003.jpg" id="pictures" class="snow preview active-preview"/></a><br />
                     <a onclick="swap_box('pictures','raw')"/><img src="../images/media/raw/raw-1.jpg" id="pictures" class="raw preview"/></a><br />
                     <a onclick="swap_box('pictures','prototype')"/><img src="../images/media/prototype/prototype-1.jpg" id="pictures" class="prototype preview"/></a><br />
                     <a onclick="swap_box('pictures','event')"/><img src="../images/media/events/event-1.jpg" id="pictures" class="event preview"/></a><br />
                     <a onclick="swap_box('pictures','zoom')"/><img src="../images/media/zoom/zoom-1.jpg" id="pictures" class="zoom preview"/></a><br />
                     <a onclick="swap_box('pictures','box')"/><img src="../images/media/box/box-0152.jpg" id="pictures" class="box preview"/></a>
                  </div>

                  <div id="preview-renders">
                     <a onclick="swap_box('renders','wesll')"/><img src="../images/media/wesll/wesll-1.jpg" id="renders" class="wesll preview active-preview"/></a><br />
                     <a onclick="swap_box('renders','ducati')"/><img src="../images/media/ducati/ducati-1.jpg" id="renders" class="ducati preview"/></a><br />
                     <a onclick="swap_box('renders','wing')"/><img src="../images/media/wing/wing-1.jpg" id="renders" class="wing preview"/></a><br />
                     <a onclick="swap_box('renders','kawasaki')"/><img src="../images/media/kawasaki/kawasaki-1.jpg" id="renders" class="kawasaki preview"/></a><br />
                     <a onclick="swap_box('renders','yamaha')"/><img src="../images/media/yamaha/yamaha-1.jpg" id="renders" class="yamaha preview"/></a><br />
                     <a onclick="swap_box('renders','harley')"/><img src="../images/media/harley/harley-1.jpg" id="renders" class="harley preview"/></a><br />
                     <a onclick="swap_box('renders','aprillia')"/><img src="../images/media/aprillia/aprillia-1.jpg" id="renders" class="aprillia preview"/></a><br />
                     <a onclick="swap_box('renders','triumph')"/><img src="../images/media/triumph/triumph-1.jpg" id="renders" class="triumph preview"/></a>
                  </div>

                  <div id="preview-videos">
                     <a onclick="swap_box('videos','vid1')"/><img src="../images/media/video1-red.jpg" id="videos" class="vid1 preview active-preview"/></a><br />
                     <a onclick="swap_box('videos','vid2')"/><img src="../images/media/video2-red.jpg" id="videos" class="vid2 preview"/></a><br />
                     <a onclick="swap_box('videos','vid3')"/><img src="../images/media/video3-red.jpg" id="videos" class="vid3 preview"/></a><br />
                     <a onclick="swap_box('videos','vid4')"/><img src="../images/media/video4-red.jpg" id="videos" class="vid4 preview"/></a>
                  </div>

                  <div id="preview-footage">
                     <a onclick="swap_box('footage','footage3')"/><img src="../images/media/footage3-red.png" id="footage" class="footage3 preview active-preview"/></a><br />
                     <a onclick="swap_box('footage','footage2')"/><img src="../images/media/footage2-red.png" id="footage" class="footage2 preview"/></a>
                  </div>
               </div>

            </div>
         </div>

         <div id="link-footage3" >download:&nbsp; <a href="../images/media/raw/suspension_2.mov" >suspension_2.mov - 447MB - 120fps</a></div>
         <div id="link-footage2" >download:&nbsp; <a href="../images/media/raw/track_1.mov" >track_1.mov - 428MB - 120fps</a></div>

      </div>
     
   </div>
   <?php include '../footer.php'; ?>
</body>

<script>
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
   $("#page-" + panel).css("display", "block").siblings().css("display", "none");//pager of selected
   $("#page-" + panel).addClass("pager-active").siblings().removeClass("pager-active");//for arrows to know what is not selected
}
function swap_event(tab,panel) {
   if (tab == 'videos' || tab == 'footage') {
      var frameString = '<div id="event"><iframe width="750" height="422" src="" frameborder="0" allowfullscreen></iframe></div>';
      $("#event").replaceWith(frameString);
      $("#event iframe").attr("src", $("#page-" + panel).find(".preview-select").attr("href"));
      $("#arrow-l,#arrow-r").css("display", "none");
   } else {
      var imgString = '<div id="event"><img src=""></div>';
      $("#event").replaceWith(imgString);
      $("#event img").attr("src", $("#page-" + panel).find(".preview-select").attr("href"));
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
   $("#gal-page a").mouseenter(function() {
       $("#event").html($("<img>").attr("src", this.href));
       $(this).addClass('preview-select').siblings().removeClass('preview-select');
       return false;
   })
   $("#gal-page a").click(function() {//when a user clicks on the leaning button | used for mobile
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
})
//---------------------------------------------------------------------
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
//---------------------------------------------------------------------------------
</script>
<script src="../myscript.js"></script>