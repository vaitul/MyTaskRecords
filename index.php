<!DOCTYPE html>
<html>
<head>
	<title>MTR | home</title>
	<link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/126/126412.png" />

	<link rel="stylesheet" type="text/css" href="style-scripts/my-style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="nonet/bootstrap/cssbootstrap.min.css">-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">

	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" /> 
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
		<!--<script src="nonet/jQuery/jquery-1.5.min.js" type="text/javascript"></script>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
		<!--<script src="nonet/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>-->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="style-scripts/my-script.js"></script>
</head>
<body>
	<div id="header">
		<div class="row">
			<p class="col-lg-4 col-md-4 col-sm-5 col-xs-11">
				<img src="IMAGES/img.png" width="60px">
				My Task Records
			</p>
			<div class="col-xs-1">
				<i class="fa fa-bars"></i>
			</div>
			<div id="section">
				<div id="search-box" class="form-group col-lg-4 col-md-4 col-sm-5 col-xs-6">
					<div class="input-group">
						<span class="input-group-addon"> <i class="fa fa-search"></i></span>
						<input type="text" id="search-query" placeholder="Search Tasks" required class="form-control">
					</div>
	         	</div>
				<div id="menu" class=" col-lg-4 col-md-4 col-sm-7 col-xs-6">
					<ul>
						<li id="home"><a>Home</a></li>
						<li id="about"><a>About</a></li>
						<li id="account"><a>Account</a>
					</li>
				</ul>	
				</div>
			</div>
		</div>
		
	</div>
	<div class="row">
		<div id="main-page" class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-0 col-xs-12 ">
			<div id="downArrow" class="arrows"><a href="#footer"><i class="fa fa-arrow-down"></i></a></div>
			<div id="upArrow" class="arrows"><a href="#main-page"><i class="fa fa-arrow-up"></i></a></div>
		<center>
			<div id="pannel">
				<button id="addButton">Add New</button>
				<select name="viewby" id="viewby">
					<option>--Sort By--</option>
					<option value="all">All</option>
					<option value="1">Completed</option>
					<option value="0">Started</option>
					<option value="-1">Pending</option>
				</select>	
				<select id="deleteButton">
					<option>--Delete--</option>
					<option>Completed</option>
					<option>Pending</option>
					<option>Started</option>
				</select>
			</div>
		</center>
		<div id="RESULTS" class="col-lg-offset-0 col-lg-12 col-md-offset-0 col-md-12 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12"></div>
			<center><span  id="loader"><img src="IMAGES/loader.gif"><br><br>Loading...</span></center>

			<div class="row">
				<div id="footer" class="col-lg-offset-0 col-lg-12 col-md-offset-0 col-md-12 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 ">
					<p><a target="_blank" href="https://www.linkedin.com/in/vaitul-bhayani-833545154/"><i class="fab fa-linkedin"> </i> LinkedIn</a> | <a target="_blank" href="https://www.facebook.com/Vaitul-Bhayani-402876460076160/"><i class="fab fa-facebook"> </i> Facebook</a> | <a target="_blank" href="https://www.instagram.com/vaitul_bhayani/"><i class="fab fa-instagram"> </i> Instagram</a> | <a target="_blank" href="https://twitter.com/vaitulbhayani"><i class="fab fa-twitter-square"> </i> Twitter</a></p>
				</div>				
			</div>
		</div>
	</div>
	<div class="row" >
		<p><center>&copy; 2018 All Rights Reserved | A Product By Vaitul Bhayani</center></p>
	</div>
</body>
</html>