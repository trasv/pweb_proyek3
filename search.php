<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="icon" href="logoo.png" type="image/gif" sizes="16x16">
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
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
  </style>
</head>
<body>

<nav class="navbar navbar-default fixed-top">
  <a class="navbar-brand" href="index.php"><img src="logoo.png" class="img-circle" alt="Logo" style="width:30px"></a>
  <form>
    <div class="input-group">
      <input class="form-control" size="50" placeholder="Cari Tempat Makan Favoritmu !">
      <div class="input-group-btn">
        <a href="search.php"><button type="button" class="btn btn-danger slide">Search</button></a>
      </div>
    </div>
  </form>
	<div>
	  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Back to Home</a></li>
      </ul>
    </div>
</nav>
	<br>
	<br>
<div class="container row">
	<div class="col-md-10" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
		<div class="btn-group-vertical btn-group-toggle btn-group-lg position-fixed">
			<p style="font-size: 30px">Try Another Cuisine</p>
			<a href="search.php" class="btn btn-danger">Chinese</a>
			<a href="search.php" class="btn btn-danger">Cafe</a>
			<a href="search.php" class="btn btn-danger">Indonesian</a>
			<a href="search.php" class="btn btn-danger">Western</a>
			<a href="search.php" class="btn btn-danger">Japanese</a>
		</div>
<!--
      <h4>Sort</h4>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
	  <h4>Category</h4>
	  <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <hr class="d-sm-none">
-->
    </div>
    <div class="col-sm-8">
	  <a>
		  <h2>Resto1</h2>
	  </a>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <a>
	  <h2>Resto2</h2>
	  </a>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>
<div class="col-md-2">
	<br>
	<h4>Popular</h4>
		<div class="card" style="width:400px">
			<img class="card-img-top" src="contohresto.jpg" alt="Card image" style="width:100%">
			<div class="card-body">
				<h4 class="card-title">restoxxx</h4>
				<a href="#" class="btn btn-danger">See this resto</a>
			</div>
		</div>
		<div class="card" style="width:400px">
			<img class="card-img-top" src="contohresto.jpg" alt="Card image" style="width:100%">
			<div class="card-body">
				<h4 class="card-title">restoxxx</h4>
				<a href="#" class="btn btn-danger">See this resto</a>
			</div>
		</div>
		<div class="card" style="width:400px">
			<img class="card-img-top" src="contohresto.jpg" alt="Card image" style="width:100%">
			<div class="card-body">
				<h4 class="card-title">restoxxx</h4>
				<a href="#" class="btn btn-danger">See this resto</a>
			</div>
		</div>
</div>
</div>

<footer class="container-fluid text-center bg-light">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
	<br>
	<img src="logoo.png" class="img-circle" alt="Logo" style="width:50px;">
  <p><b>Cibus</b> made by : "Masukkan Nama Tim"<br><b>M. Fatih<br>Samuel Marcellinus<br>Alfin Pradana</b></p>
</footer>

</body>
</html>
