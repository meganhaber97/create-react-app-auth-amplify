<?php require_once('login.php'); ?>

<!DOCTYPE html>
<html>
<title>Justin & Liz</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href = "eboard/swe_gear.jpg" type = "image/icon" rel = "shortcut icon" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #000000;
    line-height: 1.8;
    scroll-behavior: smooth;
}

@font-face {
  font-family: "lemon-brush";
  src: url("LemonBrush.otf")
}

h2 {
  font-size: 100px;
}

/* If the screen size is 601px wide or more, set the font-size of <div> to 80px */
@media screen and (min-width: 601px) {
  .sectionTitle {
    font-size: 100px;
  }
}

/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
  .sectionTitle {
    font-size: 75px;
  }
}

.button {
  border:none;display:inline-block;
  padding:8px 16px;
  vertical-align:middle;
  overflow:hidden;
  text-decoration:none;
  text-align:center;
  cursor:pointer;
  white-space:nowrap;
}

.center-row {
  display: inline-block;
  margin: 0 auto;
}

.row {
  display: -webkit-flex; /* Safari */
  -webkit-align-items: center; /* Safari 7.0+ */
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  margin-bottom: 20px;
}

.w3-bottombar{
  border-bottom:6px solid #000000!important}

.main-color{
  color:#fff!important;
  background-color:#000000!important;
}

.main-border-color {
  border-color:#000000!important;
}

.main-footer-colors {
    color:black;
    background-color: #f1f1f1!important;
}

.main-hover-color:hover{
  color: #000000!important;
  background-color: #FFFFFF!important;
}

.main-footer-hover-opacity:hover{
  color:#DBC554; 
  opacity:1;
}

.container {
  margin-left: 33%;
}

.black-background{
  color:#fff!important;
  background-color:#000000!important;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4{
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
/* Slides */
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}

a {
  text-decoration: none;
}

/* First image */
.bgimg-1 {
    background-image: url('picture1.JPG');
    min-height: 100%;
}

/* Second image */
.bgimg-2 {
    background-image: url("picture1.JPG");
    min-height: 400px;
}

/* Third image */
.bgimg-3 {
    background-image: url("picture1.JPG");
    min-height: 400px;
}

/* Fourth image */
.bgimg-4 {
  background-image: url("picture1.JPG");
  min-height: 400px;
}

.itinerary {
  display: none;
}

.w3-wide {letter-spacing: 10px;}
/*.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div>

    <!-- Left -->
    <a href="#home" class="button w3-hide-small" style="font-family:lemon-brush; font-size:60px; padding-top:0px; padding-left:65px;">Justin & Liz</a>

    <!-- Right -->
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#rsvp" class="button w3-hide-small w3-right" style="padding-top:40px;">RSVP</a>
    <a href="#favoriteplaces" class="button w3-hide-small w3-right" style="padding-top:40px;">FAVORITE PLACES</a>
     <a href="#yourstay" class="button w3-hide-small w3-right" style="padding-top:40px;">YOUR STAY</a>
     <a href="#ourstory" class="button w3-hide-small w3-right" style="padding-top:40px;">OUR STORY</a>
     <a href="#thewedding" class="button w3-hide-small w3-right" style="padding-top:40px;">THE WEDDING</a>
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#thewedding" class="w3-bar-item w3-button" onclick="toggleFunction()">THE WEDDING</a>
    <a href="#ourstory" class="w3-bar-item w3-button" onclick="toggleFunction()">OUR STORY</a>
    <a href="#yourstay" class="w3-bar-item w3-button" onclick="toggleFunction()">YOUR STAY</a>
    <a href="#favoriteplaces" class="w3-bar-item w3-button" onclick="toggleFunction()">FAVORITE PLACES</a>
    <a href="#rsvp" class="w3-bar-item w3-button" onclick="toggleFunction()">RSVP</a>
  </div>
</div>

<!-- First Parallax Image with Justin & Liz Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min w3-center" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-hide-medium w3-hide-large" style="font-family:lemon-brush; font-size: 100px; color: white; text-shadow: 2px 2px black;">Justin & Liz</span>
  </div>
</div>

<!-- The Wedding -->

<div class="w3-content w3-container w3-padding-64" id="thewedding">
  <h2 class="w3-center sectionTitle" style="font-family:lemon-brush; margin-bottom:-50px; margin-top:-40px;">It's Official!</h2>
  <h3 class="w3-center" style="margin-bottom:-40px;">Justin and Liz are getting married on Friday, September 18, 2020.</h3>

  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large w3-hide-small">
      <br>
      <br>
      <img src="picture1.JPG" class="w3-round w3-image w3-hover-opacity" alt="Picture" width="500" height="333">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <p style="padding-top:70px;">Mark your calendars because the date has been set! Join us on our big day at the place where our relationship began, the Jersey Shore. With a full itinerary set from Friday, September 18 to Saturday, September 19, we know you'll love the shore just as much as we do. You can find all wedding, reception, and morning after details below.</p>
      <p style="font-family:lemon-brush; font-size:30px; margin-top:-20px; padding-left: 35px;">xoxo, Justin & Liz</p>
    </div>
  </div>

  <!-- Menu Container -->
  <div class="w3-center">
    <h2 class="sectionTitle w3-hide-small" style="font-family:lemon-brush; margin-bottom:-50px;">The Best is Yet to Come!</h2>
    <h3 style="margin-bottom:30px;">The Itinerary</h3>
  </div>

  <div class="w3-container" id="itinerary">
    <div class="w3-content w3-center" style="max-width:700px">
    
      <div class="w3-row w3-center w3-card w3-padding">
        <a href="javascript:void(0)" onclick="openMenu(event, 'Sept18');" id="myLink">
          <div class="w3-col s6 tablink">Friday, September 18, 2020</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Sept19');">
          <div class="w3-col s6 tablink">Saturday, September 19, 2020</div>
        </a>
      </div>

      <div id="Sept18" class="w3-container itinerary w3-padding-48 w3-card">
        <h5>The Ceremony</h5>
        <div class="w3-text-grey">
          <p>St. Thomas Aquinas Church</p>
          <p>Address</p>
          <p>Time</p><br>
        </div>
      
        <h5>Something</h5>
        <div class="w3-text-grey">
          <p>Place</p>
          <p>Address</p>
          <p>Time</p><br>
        </div>
      
        <h5>The Reception</h5>
        <div class="w3-text-grey">
          <p>Parker's Garage & Oyster Saloon</p>
          <p>Address</p>
          <p>Time</p><br>
        </div>
      
        <h5>The After Party</h5>
        <div class="w3-text-grey">
          <p>Place</p>
          <p>Address</p>
          <p>Time</p><br>
        </div>
      </div>

      <div id="Sept19" class="w3-container itinerary w3-padding-48 w3-card">
        <h5>Brunch</h5>
        <div class="w3-text-grey">
          <p>Place</p>
          <p>Address</p>
          <p>Time</p><br>
        </div>
      </div>  
    </div>
  </div>

  <!-- The Wedding Party -->
  <!-- class="w3-bottombar" -->

  <div class="w3-container w3-padding-64 w3-center">
    <h2 class="sectionTitle" style="font-family:lemon-brush; margin-bottom:-50px; margin-top:-40px;">The Wedding Party</h2>
    <h3>The Bridesmaids</h3>

    <div class="center-row">
      <div class="row"><br>

        <div>
          <img src="bridesmaids/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
          </a>
        </div>

        <div>
          <img src="bridesmaids/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="bridesmaids/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="bridesmaids/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="bridesmaids/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

      </div>
    </div>

    <h3>The Groomsmen</h3>

    <div class="center-row">
      <div class="row"><br>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

      </div>
    </div>

    <h3>The Ring Bearer & Flower Girl</h3>
    
    <div class="center-row">
      <div class="row"><br>

  	   <div>
  	     <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
  	     <h3>Name</h3>
  	     <p>Title</p>
  	   </div>

  	   <div>
  	     <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
  	     <h3>Name</h3>
  	     <p>Title</p>
  	   </div>

      </div>
    </div>

    <h3>The Parents of the Bride</h3>

    <div class="center-row">
      <div class="row"><br>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

      </div>
    </div>

    <h3>The Parents of the Groom</h3>

    <div class="center-row">
      <div class="row"><br>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

        <div>
          <img src="groomsmen/icon.png" alt="Name" style="width:45%" class="w3-circle w3-hover-opacity">
          <h3>Name</h3>
          <p>Title</p>
        </div>

      </div>
    </div>

  </div>

</div>

<!-- Second Parallax Image with Our Story Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min w3-center" id="ourstory">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">OUR STORY</span>
  </div>
</div>

<!-- Their Story -->
<div class="w3-content w3-container w3-padding-64">
  <h2 class="w3-center sectionTitle w3-hide-small" style="font-family:lemon-brush; margin-top: -40px;">It was the summer of 2014...</h2>
  <h2 class="w3-center sectionTitle w3-hide-medium w3-hide-large" style="font-family:lemon-brush; margin-top: -40px;">2014...</h2>
  <p class="w3-center">Insert Story Here.</p>
  <br>
  <p class="w3-center">Insert Slide Show??</p>
  <br>
  <br>

  <!-- Slideshow
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="slide_show/nx.jpeg" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">NX Workshop</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="slide_show/selfDefense1.JPG" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Self Defense Training</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="slide_show/arizona1.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Arizona Headquarters Visit</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="slide_show/eyo1.JPG" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Explore Your Opportunities EYO</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="slide_show/icecream1.jpg" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Ice Cream Social</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="slide_show/akf1.JPG" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">AKF Site Visit</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="slide_show/mentorprogram.jpg" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Mentor Program</span>
      </div>
    </div>
    -->
    

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>

      </div>
    </div>
  </div>
</div>

<!-- Third Parallax Image with Your Stay Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min w3-center" id="yourstay">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">YOUR STAY</span>
  </div>
</div>

<!-- Where to Stay -->
<div class="w3-content w3-container w3-padding-64">
  <div class="w3-center">
    <h2 class="sectionTitle w3-hide-small" style="font-family:lemon-brush; margin-bottom:-50px; margin-top:-40px;">Beach Haven, Long Beach Island</h2>
    <h2 class="sectionTitle w3-hide-large w3-hide-medium" style="font-family:lemon-brush; margin-bottom:-70px; margin-top:-40px;">Beach Haven,</h2>
    <h2 class="sectionTitle w3-hide-large w3-hide-medium" style="font-family:lemon-brush; margin-bottom:-50px; margin-top:-40px;">Long Beach Island</h2>
    <h3>Where to Stay</h3>
  </div>

  <!-- First Row -->
  <div class="w3-center">

    <div class="center-row">
      <div class="row"><br>

        <div style="margin-right: 20px;">
          <h3>Hotel 1</h3>
          <p class="w3-opacity">Address<br>$$<br>Other</p>
          <p>Great option.</p>
          <p><a href="" target="_blank"><button class="w3-button main-color main-hover-color">Visit Website!</button></a></p>
        </div>

        <div style="margin-left: 20px;">
          <h3>Hotel 2</h3>
          <p class="w3-opacity">Address<br>$$<br>Other</p>
          <p>Great option, too.</p>
          <p><a href="" target="_blank"><button class="w3-button main-color main-hover-color">Visit Website!</button></a></p>
        </div>

      </div>
    </div>

  </div>

    <!--
    <div class="w3-row-padding w3-center">
      Info Block Template 
      <div class="w3-col l3 m6 w3-margin-bottom">
        <h3>Hotel 1</h3>
        <p class="w3-opacity">Address<br>$$<br>Other</p>
        <p>Great option.</p>
        <p><a href="" target="_blank"><button class="w3-button main-color main-hover-color">Visit Website!</button></a></p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <h3>Hotel 2</h3>
        <p class="w3-opacity">Address<br>$$<br>Other</p>
        <p>Great option, too.</p>
        <p><a href="" target="_blank"><button class="w3-button main-color main-hover-color">Visit Website!</button></a></p>
      </div>
    </div>
  -->

    <!--
    <div class="w3-col l3 m6 w3-margin-bottom">
      <h3>Explore Your Opportunities (EYO)</h3>
      <p class="w3-opacity">Saturday, March 30<br>9:00 AM (8AM, Meet @ Kelly)<br>Mount Saint Vincents</p>
      <p>AAUW is hosting EYO (Explore Your Opportunities), the annual hands-on STEM conference to explore careers in science, technology, engineering, and math for 7th grade girls in New York City and Westchester County, and has asked for MC SWE's assistance. Join us as we introduce more girls to STEM! FREE Breakfast, lunch, and transportation will be provided.</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <h3>SWE for Scouts</h3>
      <p class="w3-opacity">Saturday, April 6<br>9:00 AM<br>LEO Hall</p>
      <p>SWE welcomes the Girl Scouts of America to Manhattan College! Join us as we introduce Brownie and Junior Girl Scouts to all 5 disciplines of engineering plus computer science through fun and engaging workshops.</p>
      <p><a href=""><button class="w3-button swe-purple swe-hover-purple" style="padding-left: 90px; padding-right: 90px;">I'm in!</button></a></p>
    </div>
  </div>
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <h3>Northrop Grumman Lecture</h3>
      <p class="w3-opacity">Saturday, April 9<br>3:30 - 5:30 PM<br>TBD</p>
      <p></p>
    </div>
  -->
  </div>
  

</div>

<!-- Fourth Parallax Image with Favorite Places Text -->
<div class="bgimg-4 w3-display-container w3-opacity-min w3-center" id="favoriteplaces">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">FAVORITE PLACES</span>
  </div>
</div>

 <!--LBI Suggestions-->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center"><em>LBI suggestions</em></h3>
  <p class="w3-center">Pin Point All Places on Map</p>
  <!-- Grey Scale? w3-greyscale -->
    <div id="googleMap" class="w3-center w3-round-large w3-hide-small">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3075.70880089708!2d-74.24675068484639!3d39.56617311485061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c1003cf8ce820d%3A0xb91f12afe86156e9!2sParker&#39;s%20Garage%20%26%20Oyster%20Saloon!5e0!3m2!1sen!2sus!4v1569033737105!5m2!1sen!2sus"  frameborder="0" width="600" height="300" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="button"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/MCSWE2.0/" target="_blank"><i class="fa fa-facebook-official swe-footer-hover-opacity"></i></a>
    <a href="https://www.instagram.com/swemanhattan/?hl=en" target="_blank"><i class="fa fa-instagram w3-hover-opacity swe-footer-hover-opacity"></i></a>
    <!--<i class="fa fa-snapchat w3-hover-opacity swe-footer-hover-opacity"></i> 
    <i class="fa fa-pinterest-p w3-hover-opacity swe-footer-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity swe-footer-hover-opacity"></i> -->
    <a href="https://www.linkedin.com/groups/8741657/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity swe-footer-hover-opacity"></i></a>
  </div>
</footer>

<script>
// Change style of navbar on scroll by using id = "myNavbar"
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " swe-purple-no-opacity" + "swe-hover-purple";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white swe-purple", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Tabbed Menu
function openMenu(evt, itineraryDate) {
  var i, x, tablinks;
  x = document.getElementsByClassName("itinerary");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" black-background", "");
  }
  document.getElementById(itineraryDate).style.display = "block";
  evt.currentTarget.firstElementChild.className += " black-background";
}
document.getElementById("myLink").click();

// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

// Google Map - set pin

function myMap()
{
  myCenter=new google.maps.LatLng(40.88848, -73.90299);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

</script>

</body>
</html>

