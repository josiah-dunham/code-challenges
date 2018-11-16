
var ZONES;

var WIDGET = {};

$(document).ready(function(){
	appBegin();
	
	$('#zone_select').change(function(){
		setZone($(this).children(":selected").attr("id"));
		calculateFare();
		//console.log(getZoneObject()[zone_id]);
		
	});

	$('#when_select').change(function(){
		setTimeOfRide($(this).children(":selected").attr("id"));
		calculateFare();
		
		setTimeOfRideHelper(getZoneObject()[getWidget('zone')]['fares'][getWidget('time_of_ride')]['info']);
		
		updateRidesHelperText($(this).children(":selected").attr("id"));
	});

	$('.location-radio').change(function(){
		setPurchaseLocation($(this).val());
		calculateFare();
	});
	
	$('#number_of_rides_text').keyup(function(){
		setNumberOfTrips($(this).val());
		calculateFare();
	});
});

function begin(data) {
	zoneData = data;
	console.log('i deeeeed it');	
	//console.log(zoneData['zones'][0]['fares']);

	var html = '';
	var zone_map = {};
	
	$.each(zoneData['zones'], function(i, v) {
		var fares = {};
		$.each(zoneData['zones'][i]['fares'], function(x, y) {
			
			if(typeof fares[y['type']] === 'undefined') {
				fares[y['type']] = {};
				fares[y['type']]['info'] = zoneData['info'][y['type']];
			}
			
			if(typeof fares[y['type']][y['purchase']] === 'undefined') {
				fares[y['type']][y['purchase']] = {};
			}
			
			fares[y['type']][y['purchase']]['trips'] = y['trips'];
			fares[y['type']][y['purchase']]['price'] = y['price'];
			fares[y['type']][y['purchase']]['info'] = zoneData['info'][y['type']];
			
			
		});
		//console.log(fares);
		zone_map[v['zone']] = v;
		zone_map[v['zone']]['fares'] = fares;
		
		let zone = v;
		let zone_name = zone['name'];
		let zone_id = zone['zone'];
		
		$('#zone_select').append($('<option></option>').attr("id", zone_id).attr("value", zone_name).text(zone_name));
		
		
		
	});
		
	//console.log(getWidget())
	//console.log($('#zone_select option:selected').attr('id'))
	setZoneObject(zone_map);
	setWidget();
	calculateFare();
	console.log(zone_map)
}

function appBegin() {
	setupData(begin);
}


function getFaresURL() {
	return '/lib/js/fares.json';
}


function setupData(callback) {
	$.ajax({
		url: getFaresURL(),
		method: "GET",
		dataType: "JSON",
		success: callback,
		error: function() {
			alert('i have failed.');
		}
	});
}

function setZoneObject(data) {
	ZONES = data;
}

function getZoneObject() {
	return ZONES;
}



function setWidget(zone, time_of_ride, purchase_location, number_of_trips) {
	zone = zone || $('#zone_select option:selected').attr('id');
	time_of_ride = time_of_ride || $('#when_select option:selected').attr('id'); ;
	purchase_location = purchase_location || $('.location-radio:checked').val();
	number_of_trips = number_of_trips || $('#number_of_rides_text').val();

	setZone(zone);
	setTimeOfRide(time_of_ride);
	setPurchaseLocation(purchase_location);
	setNumberOfTrips(number_of_trips);
		
	setTimeOfRideHelper(getZoneObject()[getWidget('zone')]['fares'][getWidget('time_of_ride')]['info']);
	
	if(time_of_ride == 'anytime') {
		$('#number_of_packs_helper').removeClass('hide');
	}
	else {
		$('#number_of_rides_helper').removeClass('hide');
	}
}

function setZone(val) {
	WIDGET['zone'] = val;
}

function setTimeOfRide(val) {
	WIDGET['time_of_ride'] = val;
}

function setPurchaseLocation(val) {
	WIDGET['purchase_location'] = val;
}

function setNumberOfTrips(val) {
	WIDGET['number_of_trips'] = val;
}

function setFareTotal(val) {
	WIDGET['fare_total'] = val;
}

function setTimeOfRideHelper(val) {
	WIDGET['time_of_ride_helper'] = val;
	$('#time_of_ride_helper_text').html(val);
}

function getWidget(key) {
	key = key || -1;
	
	if(key == -1) {
		return WIDGET;
	}
	else {
		return WIDGET[key];
	}
}

function calculateFare() {
	let zone = getZoneObject()[getWidget('zone')];
	let fares = zone['fares'];
	let zone_fare_time = fares[getWidget('time_of_ride')];
	console.log(zone_fare_time)
	let zone_fare_amount = zone_fare_time[getWidget('purchase_location')];
	
	let zone_fare_total = zone_fare_amount['price'] * getWidget('number_of_trips');
	setFareTotal(zone_fare_total.toFixed(2));
	
	
	
	$('.fare-total-text').html('$' + getWidget('fare_total'));
}

function updateRidesHelperText(time_of_ride) {
	console.log('time ' + time_of_ride);
	if(time_of_ride == 'anytime') {
		$('#number_of_packs_helper').removeClass('hide');
		$('#number_of_rides_helper').addClass('hide');
	}
	else {
		$('#number_of_packs_helper').addClass('hide');
		$('#number_of_rides_helper').removeClass('hide');
	}
}
