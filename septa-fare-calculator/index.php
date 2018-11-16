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
					<img src="/septa-fares/lib/img/septa-img.png">
					Regional Rail Fares	
				</div>
				<div class="septa-container-content">
					<div class="form-group container-section" id="zone_request">
						<div class="container-section-header">
							Where are you going?
						</div>
						<div class="container-section-formfield">
							<select class="form-control" id="zone_select">
								<option>Zone 1</option>
								<option>Zone 2</option>
								<option>Zone 3</option>
								<option>Zone 4</option>
								<option>NJ</option>
							</select>
						</div>
					</div>
					<div class="form-group container-section" id="when_riding">
						<div class="container-section-header">
							When will you be riding?
						</div>
						<div class="container-section-formfield">
							<select class="form-control" id="when_select">
								<option>Weekday</option>
								<option>Evening</option>
								<option>Weekend</option>
							</select>
						</div>
						<div class="container-section-helper">
							This is an explanation about the above selected option
						</div>
					</div>
					<div class="form-group container-section" id="purchase_location">
						<div class="container-section-header">
							Where will you purchase the fare?
						</div>
						<div class="container-section-formfield">
							<div id="location_formfields">
								<div>
									<input type="radio" class="location-radio" id="location_kiosk" name="location" value="kiosk"><span class="location-text"> Station Kiosk</span>
								</div>
								<div>
									<input type="radio" class="location-radio" id="location_onboard" name="location" value="onboard"><span class="location-text"> Onboard</span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group container-section" id="number_of_rides">
						<div class="container-section-header">
							How many rides will you need?
						</div>
						<div class="container-section-formfield" id="number_of_rides_outterdiv">
							<div class="container-section-formfield" id="number_of_rides_innerdiv">
								<input type="text" class="form-control" id="number_of_rides_text" name="" value="">
							</div>
						</div>
					</div>
					<div class="container-section fare-total" id="fare_total">
						<div class="container-section-header">
							Your fare will cost
						</div>
						<div class="container-section-formfield">
							<span class="fare-total-text">$28.00</span>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>


<!--
<div class="container">
	<div class="row">
		<div class="page-header">
			<h1>Regional Rail Fares</h1>
		</div>
	</div>
	<div class="row">
		<div class="card col-md-5">
			<div class="card-body">
				<div class="row">
					<h6 class="card-subtitle mb-2 text-muted"><span id="base_amount_label">0</span> <span id="base_currency_label">USD</span></h6>
				</div>
				<div class="row">
					<h5 class="card-title"><span id="converted_amount_label">0</span> <span id="converted_currency_label">Euro</span></h5>
				</div>
				<div class="row">
					<div class="col-md-4">
						<form class="form-horizontal">
							<div class="form-group">
								<div class="row">
						    		<input type="text" class="form-control col-md-6 amount-input" data-convert-id="target_amount" id="base_amount" value="1">
									<select class="form-control col-md-5 currency-list" id="base_currency">
									</select>
								</div>
						  	</div>
						  	<div class="form-group">
						  		<div class="row">
					    			<input type="text" class="form-control col-md-6 amount-input" data-convert-id="base_amount" id="converted_amount" value="0.87">
									<select class="form-control col-md-5 currency-list" id="converted_currency">
									</select>
								</div>
						  	</div>
						</form>
					</div>
					<div class="col-md-3 switch-col">
						<div id="switch-wrapper">
							<button type="button" class="btn btn-primary switch-currencies">Switch! <i class="fas fa-arrows-alt-v"></i></button>
							<!-- <input type="button" class="btn btn-primary" value="Switch!"> 
						</div>
						<!-- 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		
		<!-- <div class="col-sm-12">
			<input type="text" name="base_currency" class="txtbox">
			<div>
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
		</div> 
	</div>
	<div class="row">
		<!-- <div class="col-sm-12">
			<input type="text" name="base_currency" class="txtbox">
			<div>
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
		</div> 
	</div>
</div>
-->

</body>

<footer>
</footer>

</html>