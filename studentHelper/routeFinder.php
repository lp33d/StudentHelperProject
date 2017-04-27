<?php
session_start();
if(!$_SESSION['loggedIn']) {
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Route Finder</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<style>
		#map {
			height: 400px;
			width: 80%;

		   }

		#floating-panel {
				position: absolute;
				top: 75%;
				left: 18%;

				background-color: #fff;
				padding: 5px;
				border: 1px solid #999;
				text-align: center;
				font-family: 'Roboto','sans-serif';
				line-height: 30px;
				padding-left: 20em;
				padding-right: 20em;
				color: black;
				font-size: 30;
			}
	</style>
	<!--<script src="Javascript/JS.js">-->
	</script>
</head>
<body>
	<section id="externalWrapper">
		<h2 style="display:none;">.</h2>
		<nav>
			<ul>
				<li>
					<a href="index.php" id="logo">Student Helper</a>
				</li>
				<li>
					<a href="createGroupPage.php">Create Group</a>
				</li>
				<li>
					<a href="joinGroup.php">Join Group</a>
				</li>
				<li>
					<a class="active" href="routeFinder.php">Route Finder</a>
				</li>
				<li>
					<a href="courseworkDropoffStud.php">Coursework Dropoff</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>

		<section id="internalWrapper">
			<div class="row cf">
					<div class="row cf">
						<div class="full">
							<h3>Route Finder</h3>
							<div style="margin:auto;"id="map">
								<script>
								  function initMap() {
									var directionsService = new google.maps.DirectionsService;
									var directionsDisplay = new google.maps.DirectionsRenderer;
									var map = new google.maps.Map(document.getElementById('map'), {
									  zoom: 6,
									  center: {lat: 53, lng: 0}
									});
									directionsDisplay.setMap(map);

									var onChangeHandler = function() {
									  calculateAndDisplayRoute(directionsService, directionsDisplay);
									};
									document.getElementById('start').addEventListener('change', onChangeHandler);
									document.getElementById('end').addEventListener('change', onChangeHandler);
								  }

								  function calculateAndDisplayRoute(directionsService, directionsDisplay) {
									directionsService.route({
									  origin: document.getElementById('start').value,
									  destination: document.getElementById('end').value,
									  travelMode: 'WALKING'
									}, function(response, status) {
									  if (status === 'OK') {
										directionsDisplay.setDirections(response);
									  } else {
										window.alert('Directions request failed due to ' + status);
									  }
									});
								  }
								</script>
						</div>
					</div>
					<div class="row cf">

							<div class="row cf">
								<div class="half">
									<b>Start Location: </b>
								</div>
								<div class="half">
									<select id="start">
										<option value="Buckingham Building, Portsmouth">Anglesea Building</option>
										<option value="Buckingham Building, Portsmouth">Buckingham Building</option>
										<option value="Portland Building, Portsmouth">Portland Building</option>
										<option value="James Watson Hall, Guildhall Walk, Portsmouth">James Watson Halls</option>
										<option value="Lion Gate Building, Portsmouth">Lion Gate Building</option>
										<option value="Spinnaker Sports Centre, Cambridge Road, Portsmouth">Spinnaker Sports Centre </option>
										<option value="Park Building, Portsmouth">Park Building</option>
										<option value="The University Library, University of Portsmouth, Cambridge Road, Portsmouth">UoP Library</option>
									</select>
								</div>
							</div>
							<div class="row cf">
								<div class="half">
									<b style="width:100%;">End Location: </b>
								</div>
								<div class="half">
									<select id="end">
										<option value="Buckingham Building, Portsmouth">Anglesea Building</option>
										<option value="Buckingham Building, Portsmouth">Buckingham Building</option>
										<option value="Portland Building, Portsmouth">Portland Building</option>
										<option value="James Watson Hall, Guildhall Walk, Portsmouth">James Watson Halls</option>
										<option value="Lion Gate Building, Portsmouth">Lion Gate Building</option>
										<option value="Spinnaker Sports Centre, Cambridge Road, Portsmouth">Spinnaker Sports Centre </option>
										<option value="Park Building, Portsmouth">Spinnaker Sports Centre </option>
										<option value="The University Library, University of Portsmouth, Cambridge Road, Portsmouth">UoP Library</option>

									</select>
								</div>
						<script
						src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFjgJpxvapWFwFlIl9pezwwWeb5YhutHs&callback=initMap">
						</script>
						</div>
					</div>
				</div>
			</div>
		</section>

	</section>
	<footer>
				<a href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px"
						src="http://jigsaw.w3.org/css-validator/images/vcss"
						alt="Valid CSS!" />
				</a>
			</footer>
</body>
</html>
