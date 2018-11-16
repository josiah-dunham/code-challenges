

$(document).ready(function(){
	$('#zone_select').change(function(){
		alert('zone select changed!');
	});

	$('#when_select').change(function(){
		alert('when select changed!');
	});

	$('.location-radio').change(function(){
		alert('radio checked!');
	});
});


function getRateAPIURL() {
	return 'https://api.exchangeratesapi.io/latest?base=';
}

