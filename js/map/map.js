//http://gmaps-samples-v3.googlecode.com/svn/trunk/styledmaps/wizard/index.html?utm_medium=twitter
/*!
 * Map.js
 * Version: 1.0
 * Copyright 2014 Giovanni Flores
 */

var vib;
var current_plant;
(function ($) {
    $.fn.mapmarker = function (options) {
        var opts = $.extend({}, $.fn.mapmarker.defaults, options);

        return this.each(function () {
            // Apply plugin functionality to each element
            var map_element = this;
            addMapMarker(map_element, opts.zoom, opts.center, opts.markers);
        });
    };

    // Set up default values
    var defaultMarkers = {
        "markers": []
    };

    $.fn.mapmarker.defaults = {
        zoom: 8,
        center: "20.8720687,-103.0214674",
        markers: defaultMarkers
    }

    // Main function code here (ref:google map api v3)
    function addMapMarker(map_element, zoom, center, markers) {
        //console.log($.fn.mapmarker.defaults['center']);

        //Set center of the Map
        var myOptions = {
            zoom: zoom,
            mapTypeId: google.maps.MapTypeId.ROADAP,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        };
        var map = new google.maps.Map(map_element, myOptions);
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({'address': center}, function (results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                //In this case it creates a marker, but you can get the lat and lng from the location.LatLng
                map.setCenter(results[0].geometry.location);
            }
            else {
                console.log("Geocode no fue encontrado por la siguiente razón: " + status);
            }
        });

        //run the marker JSON loop here
        $.each(markers.markers, function (i, the_marker) {
            latitude = the_marker.latitude;
            longitude = the_marker.longitude;
            icon = the_marker.icon;
            var selected_plant = the_marker.baloon_text;
            current_plant = selected_plant;
            if (latitude != "" && longitude != "") {

                var marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(latitude, longitude),
                    animation: google.maps.Animation.DROP,
                    icon: icon
                });
                var boxText = document.createElement("div");
                boxText.style.cssText = "width: 100%;color:#fff ;border: 1px solid black; margin-top: 8px; background: #111; padding: 5px;";
                $.ajax({
                    url: "abd/Data.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        IdProcess: 24,
                        txtPlanta: selected_plant
                    }
                }).done(function (data) {
                    boxText.innerHTML = "<div id=\"result-plant-msg\"><blockquote>" + selected_plant + "<br>Combustible: " + data[0] + "<br>Aceite: " + data[1] + "<br>Batería: " + data[2] + "<br>Estatus: " + data[3] + "<br></blockquote></div>";
                });
                var var_infobox_props = {
                    content: boxText
                    , disableAutoPan: false
                    , maxWidth: 0
                    , pixelOffset: new google.maps.Size(-140, 0)
                    , zIndex: null
                    , boxStyle: {
                        background: "url('img/tipbox.gif') no-repeat"
                        , opacity: 0.75
                        , width: "280px"
                    }
                    , closeBoxMargin: "10px 2px 2px 2px"
                    , closeBoxURL: "img/close_sm.png"
                    , infoBoxClearance: new google.maps.Size(1, 1)
                    , isHidden: false
                    , pane: "floatPane"
                    , enableEventPropagation: false
                };
                // Set up markers with info windows  
                vib = new InfoBox(var_infobox_props);
                google.maps.event.addListener(marker, 'click', function (e) {
                    vib.setOptions(var_infobox_props);
                    if (vib)
                    {
                        vib.close();
                    }
                    vib.open(map, marker);
                    var callbacks = $.Callbacks();
                    callbacks.add(onClickPlant);
                    callbacks.fire(selected_plant); 
                    current_plant = selected_plant;
                });

            }
        });
    }

})(jQuery);
