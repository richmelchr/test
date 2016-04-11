<?php include 'head.php'; ?>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
<meta property='keywords' content='leaning snowmobile, yamaha snowmobile, leaning polaris, leaning technology, prototype snowmobile, prototype atv, leaning off-road, suspension technologie, leaning vehicle, leaning atv, tilting vehicle, wesll, wesllcorp, leaning motorcycle, leaning quad, leaning 4 wheeler, leaning prototype, carving snowmobile, new snowmobile' />
<meta property='description' content='Wesll develops leaning suspension technologies designed to increase the performance, safety and economy of vehicles used in nearly all forms of transportation.' />
<link href="screen.css" rel="stylesheet" type="text/css" media="screen" />
<title>Wesll | Leaning Suspension</title>
<?php include_once( "analyticstracking.php") ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<body id="home">
   <!--identifies current page for navigation bar underline-->
   <div class="wrapper">

      <?php include 'navigation.php'; ?>
         
      <div id="feature">
         <p><img src="images/maincontent3.png" width="960" height="414" /></p>
      </div>

      <div id="content">

         <div id="test-wrap">
            <div id="test-three" class="userSelect">
               <div id="test-left" onmouseenter="grow('test-drop-left')" onmouseleave="grow('test-drop-left')">
                  <a href="technology/">
                     <img src="images/main-16.png" width="280" height="150" class="hover2"/>
                  </a>
                  <!--<div id="test-drop-left">
                     <a href="/technology/">
                        <img src="/images/tech/jump.png" width="276" height="148" />
                     </a>
                  </div>-->
               </div>
               <p class="userSelectAll">Suspension Technology</p>
            </div>

            <div id="test-three" class="test-middle userSelect">
               <div id="test-left" onmouseenter="grow('test-drop-middle')" onmouseleave="grow('test-drop-middle')">
                  <a href="gallery/">
                     <img src="images/main-18.png" width="280" height="150" class="hover2"/>
                  </a>
                  <!--<div id="test-drop-middle">
                     <h1>Stainless roller bearings packed with krytox grease</h1>
                  </div>-->
               </div>
               <p class="userSelectAll">Innovative Components</p>
            </div>

            <div id="test-three" class="userSelect">
               <div id="test-left" onmouseenter="grow('test-drop-right')" onmouseleave="grow('test-drop-right')">
                  <a href="contact/">
                     <img src="images/main-3.png" width="280" height="150" class="hover2"/>
                  </a>
                  <!--<div id="test-drop-right">
                     <h1>Stay tuned, we've been working hard</h1>
                  </div>-->
               </div>
               <p class="userSelectAll">Updates Coming Soon</p>
            </div>
         </div>

         <div id="line1"></div>

         <div id="message">
         <!--
            <h1>Lean any suspension system.</h1>
            <h2>Brake, corner, and accelerate harder.</h2>
            <h3>Combine the best of all worlds.</h3>
         -->
            <h1>Balance the effects of gravity... Lean.</h1>
            <h3>Performance, Safety, Efficiency.</h3>
         </div>

         <div id="hero-wrap" class="userSelect">
            <div id="hero" class="shadow">
               <div id="slider">

                  <div class="items">
                     <img class="big" src="images/wesll7.jpg" width="925" height="434" />
                     <div class="info">
                        <h2><i>Wesll</i></h2>
                        <p><i>Leaning Technology Forward</i></p>
                     </div>
                  </div>

                  <div class="items">
                     <img class="big" src="images/event/event-4.jpg" width="925" height="434" />
                     <div class="info">
                        <h2><i>Wesll Event</i></h2>
                        <p><i>Michigan SnowMobile Show 2014</i></p>
                     </div>
                  </div>

                  <div class="items">
                     <img class="big" src="images/main-slider-1.jpg" width="925" height="434" />
                     <div class="info">
                        <h2><i>Wesll</i></h2>
                        <p><i>Leaning Technology Forward</i></p>
                     </div>
                  </div>

                  <div class="items">
                     <img class="big" src="images/main-slider-3.jpg" width="925" height="434" />
                     <div class="info">
                        <h2><i>Wesll Event</i></h2>
                        <p><i>2014 Yamaha Apex Snowmobile</i></p>
                     </div>
                  </div>

                  <div class="items">
                     <img class="big" src="images/main-slider-5.jpg" width="925" height="434" />
                     <div class="info ">
                        <h2><i>Wesll</i></h2>
                        <p><i>Snowmobile Outboard Suspension</i></p>
                     </div>
                  </div>

                  <div class="items">
                     <img class="big" src="images/main-slider-2.jpg" width="925" height="434" />
                     <div class="info last">
                        <h2><i>Wesll</i></h2>
                        <p><i>Leaning Technology Forward</i></p>
                     </div>
                  </div>

               </div>
            </div>

            <div id="pager">
               <a id="photo1" href="#" class="bar"><span></span></a>
               <a id="photo2" href="#" class="bar"><span></span></a>
               <a id="photo3" href="#" class="bar"><span></span></a>
               <a id="photo4" href="#" class="bar"><span></span></a>
               <a id="photo5" href="#" class="bar"><span></span></a>
               <a id="photo6" href="#" class="bar"><span></span></a>
            </div>

            <div id="thumb" class="pointer">
               <li onClick="trigger_action(1)"><img src="images/wesll7.jpg" id="thumb1" class="small activeSlide" width="150" height="70" /></li>
               <li onClick="trigger_action(2)"><img src="images/thumb/event-4-thumb.jpg" id="thumb2" class="small" width="150" height="70" /></li>
               <li onClick="trigger_action(3)"><img src="images/thumb/main-slider-1-thumb.jpg" id="thumb3" class="small" width="150" height="70" /></li>
               <li onClick="trigger_action(4)"><img src="images/main-slider-3.jpg" id="thumb4" class="small" width="150" height="70" /></li>
               <li onClick="trigger_action(5)"><img src="images/main-slider-5.jpg" id="thumb5" class="small" width="150" height="70" /></li>
               <li onClick="trigger_action(6)"><img src="images/thumb/main-slider-2-thumb.jpg" id="thumb6" class="small" width="150" height="70" /></li>
            </div>

            <div class="icon pointer" id="pause"></div>
            <div class="icon pointer playing" id="play"></div>
         </div>

         <!--<div id="line2"></div>-->

         <div id="message2">
            <h1>All Wesll suspension vehicles are capable of 50&#176;+ lean angle</h1>
         </div>

         <div id="video-wrap">
            <iframe id="player" width="925" height="520" src="https://www.youtube.com/embed/pgQDeYVJFcc?autoplay=1&amp;controls=0&amp;enablejsapi=1&amp;rel=0&amp;showinfo=0&amp;loop=1&amp;playlist=shNiLPbv6-M" frameborder="0" allowfullscreen></iframe>
         </div>

      </div>

      <div id="lower-wrap">
         <div id="lower-width">
            <div id="lower-text">
               <p>Leaning improves performance, efficiency and safety to all forms of transportation</p>
               <!--<p>The Wesll Suspension allows any vehicle to lean like a motorcycle, with stability</p>-->
            </div>

            <div id="lowerThree" class="userSelect">
               <div class="lower-l left">
                  <img src="images/index-three/1.jpg" width="308" height="170" class="left" />
                  <p>3 Wheels</p>
               </div>

               <div class="lower-c left">
                  <img src="images/index-three/2.jpg" width="308" height="170" class="right" />
                  <p>4 Wheels</p>
               </div>

               <div class="lower-r left">
                  <img src="images/index-three/4.jpg" width="308" height="170" class="left" />
                  <p>No Wheels</p>
               </div>
            </div>

            <div id="lower-text-2">
               <p>We're working on some cool new stuff</p>

               <?php 
                  if(isset($_POST[ 'submit'])) { 

                     $subject='update request' ; 

                     $message='Email: ' .$_REQUEST[ 'main-email']. "\n\n"

                     .'IP: '.$_SERVER['REMOTE_ADDR'] ."\n" 
                     .'Host: '.gethostbyaddr($_SERVER['REMOTE_ADDR']) ."\n"; 

                     mail( "contact@wesll.com", $subject, $message); 
                  } 
               ?>

               <div id="main-email-wrap">
                  <form id="cool-stuff" name="cool-stuff" method="POST" action="">
                     <input name="main-email" type="text" id="main-email" value="" />
                     <input id="email-button" value="Submit" type="submit" name="submit" class="pointer">
                     </button>
                  </form>
               </div>

               <h1>Stick your address here, we'll email you when we have updates</h1>
            </div>

         </div>
      </div>
   </div>
   
   <?php include 'footer.php'; ?>   

</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.carouFredSel.min.js" type="text/javascript"></script>
<script src="myscript.js"></script>