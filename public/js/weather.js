(function () {

'use strict';
var newPosition = {
	lat: 29.42,
	lng: -98.49
}
function weather () {
	$.get('http://api.openweathermap.org/data/2.5/forecast/daily', {
	APPID: '16d4c1bdb3097dd5a2e01eebdba6fe53',
	lat: newPosition.lat,
	lon: newPosition.lng,
	units: 'imperial',
	cnt: 3
}).done(function(forecast) {
	var forecastInfo = '';
	console.log(forecast);
	var forecastDisplay = $('#forecast-display');
	if (forecast.list[0].weather[0].icon == '10d') {
		$('body').css({'background-image': 'url(/img/raindrops-window.jpeg)', 'background-size': 'cover', 'background-repeat': 'no-repeat'});
	} else if (forecast.list[0].weather[0].icon == '01d') {
		$('body').css({'background-image': 'url(/img/blue-sky-sun.jpg)', 'background-size': 'cover', 'background-repeat': 'no-repeat'});
	} else if (forecast.list[0].weather[0].icon == ('02d' || '03d')) {
		$('body').css({'background-image': 'url(/img/clouds.jpeg)', 'background-size': 'cover', 'background-repeat': 'no-repeat'});
	} else if (forecast.list[0].weather[0].icon == '04d') {
		$('body').css({'background-image': 'url(/img/dark-clouds.jpeg)', 'background-size': 'cover', 'background-repeat': 'no-repeat'});
	}
	forecast.list.forEach(function(day) {
		var forecastDay = new Date(day.dt * 1000);
		forecastInfo += '<div class="forecast-box col-sm-4">';
		forecastInfo += '<div class="forecast col-lg-4">';
		forecastInfo += '<p>' + forecastDay.toString().substr(0, 10) + '</p>';
		forecastInfo += '<p class="temperature">' + 'High: ' + Math.round(day.temp.max) + '&deg; Low: ' + Math.round(day.temp.min) + '&deg;</p>';
		forecastInfo += '<img src="http://openweathermap.org/img/w/' + day.weather[0].icon + '.png">';
		forecastInfo += '<p>Clouds: ' + day.clouds + '%</p>';
		forecastInfo += '<p>Humidity: ' + day.humidity + '%</p>';
		forecastInfo += '<p>Wind: ' + day.speed + 'mph</p>';
		forecastInfo += '</div>';
		forecastInfo += '</div>';
	});
	forecastDisplay.html(forecastInfo);
	place.html(forecast.city.name);
});
};

weather();

var mapOptions = {
	zoom: 5,
	center: {
		lat: 29.4241,
		lng: -98.4936
	}
};
var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

var marker = new google.maps.Marker({
		position: {
			lat: mapOptions.center.lat,
			lng: mapOptions.center.lng
		},
		map: 'map-canvas',
		draggable: true,
		title: 'Drag me!',
		animation: google.maps.Animation.DROP
});
marker.setMap(map);

var updateButton = $('#btn-update');
var place = $('#place');
var placeInput = $('#place-input');

updateButton.click(function() {
	var geocoder = new google.maps.Geocoder();

	geocoder.geocode({ "address": placeInput.val() }, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			newPosition = results[0].geometry.location;
			console.log(results[0]);
			place.html(results[0].address_components[0].long_name);
			weather();
		} else {
			alert("Geocoding was not successful - STATUS: " + status);
		}
	});		
});

placeInput.keydown(function(event) {
	if (event.keyCode == 13) {
		updateButton.click();
	}
})

marker.addListener('dragend', function(event) {
	newPosition = event.latLng;
	weather();
})
	
}());