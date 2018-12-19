<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="profile_style.css">
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" href="logoo.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container emp-profile">
		<div class="row">
			<div align="center" class="col-md-4">
				<a href="index.php"><img src="logoo.png" style="border-radius: 50%"></a>
			</div>
		<div style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'" class="col-md-8">
			<br>
			<h1><b>CIBUS</b><br></h1>
			<h3>The Sound of Food</h3>
		</div>
		</div>
		<br>
		<!-- Modal Edt-->
		<div class="modal modal1 fade" id="edit" role="dialog">
			<div class="modal-dialog">
				
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Profile</h4>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="email">Name:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter Name">
							</div>
							<div class="form-group">
								<label for="pwd">Email:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Enter Email">
							</div>
							<div class="form-group">
								<label for="pwd">Phone:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Enter Phone">
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
		
		<form method="post">
			<div class="row">
				<div class="col-md-4">
					<div class="profile-img" >
						<img src="1469219586_2.jpeg" alt="profilpicture">
						<div style="vertical-align: 20px" id= "change" class="file btn btn-danger">Change Photo</div>
					</div>
				</div>
				<div style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'" class="col-md-6">
					<div class="profile-head">
						<h5 style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'"><b>Member of Cibus</b></h5>
						<br>
						<div class="tab-content" id="myTabContent">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Bio</a>
							</li>
						</ul>
						<div id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row">
								<div class="col-md-4">
									<label>Name</label>
								</div>
								<div class="col-md-8">
									<p>Jenengmu cok</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Email</label>
								</div>
								<div class="col-md-8">
									<p>jenengmucokehemailse@gmail.com</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Phone</label>
								</div>
								<div class="col-md-8">
									<p>0816969696969</p>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-2">
					<a data-toggle="modal" data-target="#edit" href="#edit"><button class="btn-danger">Edit Profile</button></a>
				</div>
			</div>
<!--
			<div class="row">
				<div class="col-md-4">
					<div class="profile-work">
						<a href="#"><p style="font-size: 15px">Reviewed</p></a>
						<a href="#"><p style="font-size: 15px">Favorite</p></a>
					</div>
				</div>
				<div class="col-md-8">
					
				</div>
			</div>
-->
			<div>
					<a href="index.php" class="btn btn-danger">Back to home</a>
  			</div>
		</form>
		
	</div>
	
</body>
</html>
