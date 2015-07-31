$(document).ready(function(){

    //alert('Hi!');
    $.ajax({
        type:'GET',
        url:'plejsa.json',
        dataType: 'json',
        success: jsonParser
    });
    
    //alert('Hi!');

});

function jsonParser(json){
        $.getJSON('plejsa.json', function(data){

        	$.each(data.plejses.plejs, function(k,v){
    			var plejs_name = v.plejs_name;
    			var plejs_long = v.plejs_long;
	            var plejs_lat = v.plejs_lat;
	            var plejs_desc = v.plejs_desc;

	            $('#jsonData').append('<div class="plejs"><strong>' + plejs_name + '</strong><p>' + plejs_desc + '</p><div class="coordinates"><span class="longitude">Longitude: ' + plejs_long + '</span><span class="latitude">Latitude: ' + plejs_lat + '</span></div>');
        	});

            
            /*var plejs_name = data.plejses.plejs_name;
            var plejs_long = data.plejses.plejs_long;
            var plejs_lat = data.plejses.plejs_lat;
            var plejs_desc = data.plejses.plejs_desc;

            $('#jsonData').html("" + plejs_name + "<br>" + plejs_long + "<br>" + plejs_lat + "<br>" + plejs_desc + "<br>");*/
            
        });
        
    }


$(function() {

    var Geo={};

    if (navigator.geolocation) {
       navigator.geolocation.getCurrentPosition(success, error);
    }

    //Get the latitude and the longitude;
    function success(position) {
        Geo.lat = position.coords.latitude;
        Geo.lng = position.coords.longitude;
        populateHeader(Geo.lat, Geo.lng);
    }

    function error(){
        console.log("Geocoder failed");
    }

    function populateHeader(lat, lng){
    	//alert('Hi!');
        $('#lat').html(lat);
        $('#long').html(lng);

        $('#plejs_lat').val(lat);
        $('#plejs_long').val(lng);
    }

});