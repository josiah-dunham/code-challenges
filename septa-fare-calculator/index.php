<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link rel="stylesheet" href="lib/css/styles.css">

	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="lib/js/site.js"></script>
</head>

<body>


<div class="container">
	<div class="row">
		<form class="septa-fare-form">
			<div class="septa-container">
				<div class="septa-container-header">
					<img src="/lib/img/septa-img.png">
					Regional Rail Fares	
				</div>
				<div class="septa-container-content">
					<div class="form-group container-section" id="zone_request">
						<div class="container-section-header">
							Where are you going?
						</div>
						<div class="container-section-formfield">
							<select class="form-control" id="zone_select">
							</select>
						</div>
					</div>
					<div class="form-group container-section" id="when_riding">
						<div class="container-section-header">
							When will you be riding?
						</div>
						<div class="container-section-formfield">
							<select class="form-control" id="when_select">
								<option id="weekday" value="Weekday">Weekday - Single Trip</option>
								<option id="evening_weekend" value="Evening">Evening/Weekend - Single Trip</option>
								<option id="anytime" value="anytime">Anytime - Pack of 10</option>
							</select>
						</div>
						<div class="container-section-helper" id="time_of_ride_helper_text"></div>
					</div>
					<div class="form-group container-section" id="purchase_location">
						<div class="container-section-header">
							Where will you purchase the fare?
						</div>
						<div class="container-section-formfield">
							<div id="location_formfields">
								<div>
									<input type="radio" checked class="location-radio" id="location_kiosk" name="location" value="advance_purchase"><span class="location-text"> Station Kiosk</span>
								</div>
								<div>
									<input type="radio" class="location-radio" id="location_onboard" name="location" value="onboard_purchase"><span class="location-text"> Onboard</span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group container-section" id="number_of_rides">
						<div class="container-section-header">
							<span class="toggleable-div hide" id="number_of_rides_helper">
								How many rides will you need?
							</span>
							<span class="toggleable-div hide" id="number_of_packs_helper">
								How many packs will you need?
							</span>
						</div>
						<div class="container-section-formfield" id="number_of_rides_outterdiv">
							<div class="container-section-formfield" id="number_of_rides_innerdiv">
								<input type="text" class="form-control" id="number_of_rides_text" name="" value="1">
							</div>
						</div>
					</div>
					<div class="container-section fare-total" id="fare_total">
						<div class="container-section-header">
							Your fare will cost
						</div>
						<div class="container-section-formfield">
							<span class="fare-total-text">-</span>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>

</body>

<footer>
</footer>

</html>