<!DOCTYPE html>
<html>
<head>
  <title>Cibus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="logoo.png" type="image/gif" sizes="16x16">
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
/*	  background-image: url("10 Makanan Paling Enak Didunia.jpg");*/

  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  

.modal1 {
/*   position: absolute;*/
   top: 80px;
   right: 100px;
   bottom: 30px;
   left: 100px;
/*   z-index: 10040;*/
   overflow: auto;
   overflow-y: auto;
}
	  
  .jumbotron {
/*      background-color: #B10F11;*/
      background-image: url("10 Makanan Paling Enak Didunia.jpg");
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .contact {
	  background-image: url("10 Makanan Paling Enak Didunia.jpg");
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  color: white;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #B10F11;
      font-size: 50px;
  }
  .logo {
      color: #B10F11;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #B10F11;
  }
  .carousel-indicators li {
      border-color: #B10F11;
  }
  .carousel-indicators li.active {
	  background-color: #B10F11;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #B10F11; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #B10F11;
      background-color: #fff !important;
      color: #B10F11;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #B10F11 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #B10F11;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #B10F11;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #B10F11 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #B10F11;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		<a class="navbar-brand" href="index.php">
			<img src="logoo.png" class="img-circle" alt="Logo" style="width:25px">
		</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	 <ul class="nav navbar-nav navbar-left">
        <li><a data-toggle="modal" data-target="#login" href="#login">LOGIN</a></li>
		<li><a data-toggle="modal" data-target="#register" href="#register">REGISTER</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#Jenis">CUISINE</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
	
<!-- Modal Login-->
  <div class="modal modal1 fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
			<form>
			  <div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" placeholder="Enter email">
			  </div>
			  <div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>
				<div class="checkbox">
				  <label><input type="checkbox"> Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- Modal Register-->
  <div class="modal modal1 fade" id="register" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
			<form>
			  <div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" placeholder="Enter email">
			  </div>
			  <div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>
				<div class="form-group">
				  <label for="pwd">Re-Enter Password:</label>
				  <input type="password" class="form-control" id="pwd" placeholder="Re-Enter password">
				</div>
				<div class="form-group">
				  <label for="name">Name:</label>
				  <input type="name" class="form-control" id="name" placeholder="Enter name">
			  </div>
				<div class="form-group">
				  <label for="phonenumber">Phone Number:</label>
				  <input type="phonenumber" class="form-control" id="phonenumber" placeholder="Enter phone number">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!--jumbotron-->
<div class="jumbotron text-center">
  <img src="logo.png" class="img-circle slide" alt="logo" style="display: block; margin-left: auto; margin-right: auto; width: 300px">
	<br>
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Cari Tempat Makan Favoritmu !" required>
      <div class="input-group-btn">
        <a href="search.php"><button type="button" class="btn btn-danger slide">Search</button></a>
      </div>
    </div>
  </form>
</div>

<!-- Container Cuisine -->
<div id="Jenis" class="container-fluid text-center">
  <h2>CUISINE</h2><br>
<!--  <h4>What we have created</h4>-->
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="chinese_food-1200x628-facebook.jpg" alt="Chinesefood" height="auto">
        <p><strong>Chinese food</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="howcuttingdo.jpg" alt="Junkfood" height="auto">
        <p><strong>Junk food</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="5Seafood_a02cf72f-a540-429f-868c-977de095e977.jpg" alt="Seafood" height="auto">
        <p><strong>Sea food</strong></p>
      </div>
    </div>
	  <button class="btn btn-default btn-lg">More</button>
  </div><br>
  
</div>
	
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center bg-grey">
  <h2>Why Us ?</h2>
  <br>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-usd logo-small"></span>
      <h4>Worth the Money</h4>
      <p><i>Dining doesn't have to break a bank</i></p>
    </div>
    <div class="col-sm-4">
      <img src="baseline_location_city_black_18dp.png" style="height: 55px">
      <h4>Best in the town</h4>
      <p><i>The food you will crave for</i></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-bed logo-small"></span>
      <h4>Warm and Cozy</h4>
      <p><i>Keeping you stay a little longer</i></p>
    </div>
	  <br>
  </div>
  </div>
</div>
	
<div class="container-fluid">
  <div class="row">
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4><b>" Food is the most primitive form of comfort "</b><br>“Makanan adalah bentuk paling primitif dari kenyamanan”<hr><span>Sheila Graham</span></h4>
      </div>
      <div class="item">
        <h4><b>" Tell me what you eat, and I will tell you what you are "</b><br>“Katakan padaku apa makananmu, makan akan kuberitahu seperti apa dirimu.”<hr><span>Anthelme Brillat-Savarin</span></h4>
      </div>
      <div class="item">
        <h4><b>" There is no love sincerer than the love of food "</b><br>“Tak ada cinta yang lebih tulus dari pada cinta terhadap makanan.”<hr><span>George Bernard Shaw</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>
	
<!-- Container (About Section) -->
<div id="about" class="container-fluid bg-grey">
  <div class="row">
	<div class="col-sm-4">
      <span style="padding-left: 70pt" class="glyphicon glyphicon-cutlery logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>About Cibus</h2><br>
      <h4>Cibus adalah sebuah website yang menyediakan berbagai macam pilihan tempat makan yang pastinya memuaskan para pecinta makanan</h4><br>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid contact">
  <h2 class="text-center contact">CONTACT</h2>
  <div class="row">
    <div class="col-sm-12 slideanim text-center">
      <p><span class="glyphicon glyphicon-map-marker"></span>  Gedung Informatika ITS, Surabaya</p>
      <p><span class="glyphicon glyphicon-phone"></span>  081357581699</p>
      <p><span class="glyphicon glyphicon-envelope"></span>  Cibus@gmail.com</p>
    </div>
  </div>
</div>

<footer class="container-fluid text-center bg-grey">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
	<br>
	<img src="logoo.png" class="img-circle" alt="Logo" style="width:50px;">
  <p><b>Cibus</b> made by : "Masukkan Nama Tim"<br><b>M. Fatih<br>Samuel Marcellinus<br>Alfin Pradana</b></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
