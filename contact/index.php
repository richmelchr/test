<?php include '../head.php'; ?>
<link href="../screen.css" rel="stylesheet" type="text/css" media="screen" />
<title>Contact | Wesll</title>
<?php include_once( "../analyticstracking.php") ?>

<?php 
   if(isset($_POST['submit'])) { 

      $subject = 'web message' ;

      $message = 'Subject: '.$_REQUEST['subject']."\n"
      .'First Name: '.$_REQUEST['firstName']."\n"
      .'Last Name: '.$_REQUEST['lastName']."\n" 
      .'Email: '.$_REQUEST['email']."\n" 
      .'Company: '.$_REQUEST['company']."\n" 
      .'Country: '.$_REQUEST['country']."\n" 
      .'YouTube: '.$_REQUEST['youtube']."\n" 
      .'Email: '.$_REQUEST['email2']."\n" 
      .'News: '.$_REQUEST['news']."\n" 
      .'Event: '.$_REQUEST['event']."\n" 
      .'Other: '.$_REQUEST['other']."\n" 
      .'Facebook: '.$_REQUEST['facebook']."\n\n"

      .'IP: '.$_SERVER['REMOTE_ADDR'] ."\n" 
      .'Host: '.gethostbyaddr($_SERVER['REMOTE_ADDR']) ."\n\n" 

      .'Comments: '.$_REQUEST['comments']."\n"; 

      mail("contact@wesll.com", $subject, $message); 
      $feedback = '&nbsp;Message Sent.'; 
   } 
?>

<body id="contact">
   <!--identifies current page for navigation bar underline.-->
   <div class="wrapper">
      <?php include '../navigation.php'; ?>
      
      <div id="logo" class="center">
         <a href="../"><img src="../images/logo42-white.png" width="350" height="83" /></a>
      </div>

      <div id="content">
         <div id="contact-wrap">
            <div id="contact-form">
               <h1>Contact Wesll</h1>
               <form id="frmContact" class="left" name="frmContact" method="POST" action="">
                  <fieldset id="personalInfo">
                     <h2>
                        <label for="subject" class="left" >Subject<h3>*</h3></label>
                        <select name="subject" id="subject" tabindex="100">
                           <option value=""></option>
                           <option value="Intellectual Assets &amp; Licensing">Intellectual Assets &amp; Licensing</option>
                           <option value="Issue, Public Affairs">Issue, Public Affairs</option>
                           <option value="Media Relations">Media Relations</option>
                           <option value="Product Information">Product Information</option>
                           <option value="Website Feedback">Website Feedback</option>
                           <option value="Suggestion">Suggestion</option>
                           <option value="Other">Other</option>
                        </select>
                     </h2>

                     <h4><span id="errorMessage1"></span></h4>

                     <h2>
                        <label for="comments" class="left" >Comments<h3>*</h3></label>
                        <textarea name="comments" id="comments" tabindex="150" ></textarea>  
                        <h4><span id="errorMessage2"></span></h4>
                                
                        <label for="firstName" class="left" >First Name<h3>*</h3></label>
                        <input name="firstName" type="text" class="text" id="firstName" tabindex="200" />
                        <h4><span id="errorMessage3"></span></h4>
                                 
                        <label for="lastName" class="left" >Last Name<h3>*</h3></label>
                        <input name="lastName" type="text" class="text" id="lastName" tabindex="250" />
                        <h4><span id="errorMessage4"></span></h4>
                                 
                        <label for="email" class="left" >Email<h3>*</h3></label>
                        <input name="email" type="text" class="text" id="email" tabindex="300" />   
                        <h4><span id="errorMessage5"></span></h4>
                                 
                        <label for="company" class="left" >Company</label>
                        <input name="company" type="text" class="text" id="company" tabindex="350" />             
                                    
                        <label for="country" class="left" >Country</label>
                        <input name="country" type="text" class="text" id="country" tabindex="400" />
                                                                  
                        <fieldset id="how"> 
                        
                           <h2>How did you hear out about us?</h2>
                              
                           <br />

                           <input type="checkbox" name="youtube" value="1" id="how_0" class="box" />
                           <label>YouTube</label>

                           <input type="checkbox" name="email2" value="1" id="how_1" class="box box2" />
                           <label>Email</label>

                           <input type="checkbox" name="news" value="1" id="how_2" class="box box3" />
                           <label>News</label>

                           <br />

                           <input type="checkbox" name="event" value="1" id="how_3" class="box" />
                           <label>Event</label>

                           <input type="checkbox" name="other" value="1" id="how_4" class="box box2" />
                           <label>Other</label>

                           <input type="checkbox" name="facebook" value="1" id="how_5" class="box box3" />
                           <label>&nbsp;Facebook</label>
                        </fieldset>

                        <input type="submit" name="submit" id="submitBtn" class="left" value="Submit" tabindex="0" />
                        <h5><?php echo $feedback; ?></h5>
                     </h2>
                  </fieldset>
               </form>
            </div>

            <div id="contact-img" class="left">
               <img src="../images/contact-img-2.jpg" width="408" height="590" />
            </div>

         </div>
      </div>
   </div>
   <div id="sock" class="left">
      <div id="con-foot" class="center">

         <div id="foot-left">
        <!--<p>Share us with your fr:</p>-->
            <div id="share-div">
               <div id="mover1">
                  <div class="fb-like" data-href="https://www.facebook.com/wesllcorp" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
               </div>
            </div>
            <p>Share Wesll with friends</p>
         </div>

         <div id="foot-right">
            <div id="mover4">
               <div class="g-ytsubscribe" data-channelid="UCD3pLP2CM-R3hL4-OR6e_3w" data-layout="default" data-theme="dark" data-count="default"></div>
            </div>
            <p>First place we'll update</p>
         </div>

      </div>
      
      <div id="copyright">
         <li>&copy; 2015 Wesll LLC |</li> 

         <div id="social-up">
            <a href="http://www.facebook.com/wesllcorp" target="_blank"><img src="../images/icons/1.png" width="30" height="30" /></a></li>
            <a id="youtube" href="http://www.youtube.com/wesllcorp" target="_blank"><img src="../images/icons/2.png" width="30" height="30" /></a></li>
            <a href="http://twitter.com/wesllcorp" target="_blank"><img src="../images/icons/4.png" width="30" height="30" /></a></li>
         </div>

         <li>|</li>
         <li><a href="../contact/"> Contact Us</a></li>
      </div>
      
   </div>
</body>

<script>
// handle the form submit event
function prepareEventHandlers() {
   document.getElementById("frmContact").onsubmit = function() {
      // prevent a form from submitting if no input.
      if (document.getElementById("subject").value == "") {
         document.getElementById("errorMessage1").innerHTML = "Please provide a subject";
         // to STOP the form from submitting
         return false;
      }

      if (document.getElementById("comments").value == "") {
         document.getElementById("errorMessage2").innerHTML = "Please provide some comments";
         // to STOP the form from submitting
         return false;
      }

      if (document.getElementById("firstName").value == "") {
         document.getElementById("errorMessage3").innerHTML = "Please provide your first name";
         // to STOP the form from submitting
         return false;
      }

      if (document.getElementById("lastName").value == "") {
         document.getElementById("errorMessage4").innerHTML = "Please provide your last name";
         // to STOP the form from submitting
         return false;
      }

      if (document.getElementById("email").value == "") {
         document.getElementById("errorMessage5").innerHTML = "Please provide an email address!";
         // to STOP the form from submitting
         return false;
      } 
      
      else {
         // reset and allow the form to submit
         document.getElementById("errorMessage").innerHTML = "";
         return true;
      }
   };
}

// when the document loads
window.onload = function() {
   prepareEventHandlers();
};
</script>

<script src="../myscript.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>
<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
