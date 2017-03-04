var baloon_regions = new Array();

var point_coords = new Array();
var lengths = new Array();

var first_lon = 0;
var first_lat = 0;

var first_point = 0;

var coll_0 = 0;

ymaps.ready(init);

var myMap;

function init(){

	var init_lon = 37.590634;
	var init_lat = 55.765;

	if(first_lon != 0) {
		init_lon = first_lon;
	}

	if(first_lat != 0) {
		init_lat = first_lat;
	}

	myMap = new ymaps.Map ("map", {
			center: [init_lat, init_lon],
			zoom: 4
		}
	);

	myMap.controls.add('zoomControl');
	myMap.controls.add('typeSelector');
	myMap.controls.add('mapTools');
	myMap.controls.add(new ymaps.control.ScaleLine());

	coll_0 = new ymaps.GeoObjectCollection({}, {});

	setCollection(coll_0);

	myMap.geoObjects.add(coll_0);
}

var current_point = '';

function setCollection(coll) {
	var iLen = lengths.length;
	var temp_signs = new Array();

	for(var i = 0; i < iLen; i++) {
		temp_signs[lengths[i]] = new ymaps.Placemark([point_coords[lengths[i]][1], point_coords[lengths[i]][0]], {
				content: baloon_regions[lengths[i]],
				balloonContent: getBaloonContent(lengths[i])
			},
			{
				iconImageHref: 'img/karnasch_icon.png',
				iconImageSize: [27, 32],
				iconImageOffset: [-13, -16]
			}
		);

		temp_signs[lengths[i]].events.add('click', function (e) {
			var content = e.get('target').properties.get('balloonContent');
			var id = jQuery('#id_value', content).text();
			setCurrentPoint(id)
		});

		coll.add(temp_signs[lengths[i]]);
	}
}

function deleteColl(coll) {
	coll.removeAll();
}

// Функция для переключения Инфы :
function getBaloonContent(id) {
	
	var temp_content = jQuery('#content_' + id).html();

	if(temp_content.indexOf('map-info-right') != -1) {
		
		temp_content_1 = temp_content.slice(0, temp_content.indexOf('map-info-right') + 6);
		temp_content_2 = temp_content.slice(temp_content.indexOf('map-info-right') + 6);
		
		temp_content = temp_content_1 + ' hide ' + temp_content_2;
		
	}
	
	var result = '<div class="baloon">';
	result += '<div style="display: none;" id="id_value">' + id + '</div>';
	//result += '<div class="city_head">' + baloon_regions[id] + '</div>';
	result += '<div class="city_head">' + temp_content + '</div>';
	result += '</div>';
	
	return result;
	
}

function setCurrentPoint(id) {
	if(current_point != '') {
		jQuery('#content_' + current_point).hide();
	}

	jQuery('#content_' + id).show();
	current_point = id;
	//var y = jQuery('#content_' + id).offset().top;
	//$("html, body").animate({scrollTop:y},"slow")
}