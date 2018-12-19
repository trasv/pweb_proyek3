<!DOCTYPE html>
<html>
<head>
  <title>Resto</title>
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
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8">
      <h2>Resto1</h2>
      <div class="fakeimg">Fake Image</div>
      <br>
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs">
		  <li class="nav-item">
			  <a class="nav-link active" data-toggle="tab" href="#sekilas">At a glance</a>
		  </li>
		  <li class="nav-item">
			  <a class="nav-link" data-toggle="tab" href="#review">Review</a>
		  </li>
	  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="sekilas" class="container tab-pane active"><br>
      <h3>At a glance</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<div id="home" role="tabpanel" aria-labelledby="home-tab">
			<div class="row">
				<div class="col-md-4">
					<label>Address</label>
				</div>
				<div class="col-md-8">
					<p>Sepanjang Jalan Kenangan</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Rating</label>
				</div>
				<div class="col-md-8">
					<p>4</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Working Hour</label>
				</div>
				<div class="col-md-8">
					<p>XX:XX-XX:XX</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Average Price</label>
				</div>
				<div class="col-md-8">
					<p>Rp.xxx</p>
				</div>
			</div>
		</div>
    </div>
    <div id="review" class="container tab-pane fade"><br>
      <h3>Review</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	  <form action="#">
		<div class="form-group">
			<label for="comment">Review :</label>
			<textarea class="form-control" rows="5" id="review" name="text"></textarea>
		</div>
    <button type="submit" class="btn btn-danger">Send Review</button>
  </form>
    </div>
  </div>
    </div>
	<div class="col-sm-4">
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
