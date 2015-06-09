/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var geocodersuc = new google.maps.Geocoder();
var stylesSuc = [
    {"elementType": "geometry",
        stylers: [
            {hue: "#ff004c"},
            {"invert_lightness": true},
            {saturation: -20}
        ]
    }, {
        featureType: "road.local",
        elementType: "geometry",
        stylers: [
            {lightness: 100},
            {visibility: "simplified"}
        ]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers: [
            {visibility: "off"}
        ]
    }
];
function geocodePositionSuc(pos) {
    geocodersuc.geocode({
        latLng: pos
    }, function (responses) {
        if (responses && responses.length > 0) {
            updateMarkerAddressSuc(responses[0].formatted_address);
        } else {
            updateMarkerAddressSuc('No es posible determinar la dirección en este lugar.');
        }
    });
}
var styledMapSuc = new google.maps.StyledMapType(stylesSuc,
        {name: "Styled"});
function initializeSuc() {
    var myLatlng = new google.maps.LatLng(20.8720687, -103.0214674);
    var mapOptionsSuc = {
        zoom: 7,
        center: myLatlng,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE, 'map_styleSuc']
        }
    }
    var image = {
        url: 'img/pointer/success_old.png',
        // This marker is 20 pixels wide by 32 pixels tall.
        size: new google.maps.Size(35, 56),
        // The origin for this image is 0,0.
        origin: new google.maps.Point(0, 0),
        // The anchor for this image is the base of the flagpole at 0,32.
        anchor: new google.maps.Point(18, 48)
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptionsSuc);
//    map.mapTypes.set('map_styleSuc', styledMapSuc);
//    map.setMapTypeId('map_styleSuc');
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Elija la ubicación de la sucursal',
        draggable: true,
        icon: image
    });
    updateMarkerPositionSuc(myLatlng);
    geocodePositionSuc(myLatlng);
    // Add dragging event listeners.
    google.maps.event.addListener(marker, 'dragstart', function () {
        updateAddressSuc('Moviendo...');
    });

    google.maps.event.addListener(marker, 'drag', function () {
        updateMarkerStatusSuc('Moviendo...');
        updateMarkerPositionSuc(marker.getPosition());
    });

    google.maps.event.addListener(marker, 'dragend', function () {
        updateMarkerStatusSuc('Marcador colocado');
        geocodePositionSuc(marker.getPosition());
    });
}

function updateMarkerStatusSuc(str) {
    document.getElementById('markerStatusSuc').innerHTML = "Estado del marcador: " + str;
}

function updateMarkerPositionSuc(latLng) {
    document.getElementById('txtLatitud').value = latLng.lat();
    document.getElementById('txtLongitud').value = latLng.lng();
}

function updateMarkerAddressSuc(str) {
    document.getElementById('txtDireccionAprox').innerHTML = str;
}
//google.maps.event.addDomListener(window, 'load', initialize);
$('#mdlPlantas').on('shown.bs.modal', function () {
    initializeSuc();
});