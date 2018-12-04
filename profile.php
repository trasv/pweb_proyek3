<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="profile_style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
<link rel="icon" href="logoo.png" type="image/gif" sizes="16x16">
</head>

<body>
	<div class="container emp-profile">
		<form method="post">
			<div class="row">
				<div class="col-md-4">
					<div class="profile-img">
						<img src="21272160_1524989637521837_6561885418199331628_n.jpg" alt=""/>
						<div class="file btn btn-lg btn-primary">Change Photo
							<input type="file" name="file"/>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="profile-head">
						<h5>Insert name here</h5>
						<h6>Member</h6>
						<br>
						<br>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="profile-work">
						<a href="#"><p style="font-size: 15px">Reviewed</p></a>
						<a href="#"><p style="font-size: 15px">Favorite</p></a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content profile-tab" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row">
								<div class="col-md-6">
									<label>Name</label>
								</div>
								<div class="col-md-6">
									<p>Jenengmu cok</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
								</div>
								<div class="col-md-6">
									<p>jenengmucokehemailse@gmail.com</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Phone</label>
								</div>
								<div class="col-md-6">
									<p>0816969696969</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
					<a href="index.php" class="btn btn-danger">Back to home</a>
  			</div>
		</form>
		
	</div>
	
</body>
</html>
