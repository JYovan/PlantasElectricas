/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var geocoder = new google.maps.Geocoder();
    function geocodePosition(pos) {
        geocoder.geocode({
            latLng: pos
        }, function (responses) {
            if (responses && responses.length > 0) {
                updateMarkerAddress(responses[0].formatted_address);
            } else {
                updateMarkerAddress('No es posible determinar la dirección en este lugar.');
            }
        });
    }

    function updateMarkerStatus(str) {
        document.getElementById('markerStatusZone').innerHTML = "Estado del marcador: " + str;
    }

    function updateMarkerPosition(latLng) {
        document.getElementById('txtZonaLatitud').value = latLng.lat();
        document.getElementById('txtZonaLongitud').value = latLng.lng();
    }

    function updateMarkerAddress(str) {
        document.getElementById('addressZone').innerHTML = str;
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
    var styles = [
    {
      stylers: [
        { hue: "#CC0000" },
        { saturation: -20 }
      ]
    },{
      featureType: "road.local",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});
    function initialize() {
        var latLng = new google.maps.LatLng(21.144773947479774, -101.69065626835823);
        var mapOptions = {
            zoom: 6,
            center: latLng,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.SATELLITE, 'map_style']
            }
        };
        var mapsuc = new google.maps.Map(document.getElementById('mdlmapZona'), mapOptions);
//        mapsuc.mapTypes.set('map_style', styledMap);
//        mapsuc.setMapTypeId('map_style');
        var marksuc = new google.maps.Marker({
            position: latLng,
            title: 'Arrastre y suelte en la direccion elejida',
            map: mapsuc,
            draggable: true,
            icon: image
        });
        // Update current position info.
        updateMarkerPosition(latLng);
        geocodePosition(latLng);

        // Add dragging event listeners.
        google.maps.event.addListener(marksuc, 'dragstart', function () {
            updateMarkerAddress('Moviendo...');
        });

        google.maps.event.addListener(marksuc, 'drag', function () {
            updateMarkerStatus('Moviendo...');
            updateMarkerPosition(marksuc.getPosition());
        });

        google.maps.event.addListener(marksuc, 'dragend', function () {
            updateMarkerStatus('Marcador colocado');
            geocodePosition(marksuc.getPosition());
        });
    }
    // Onload handler to fire off the app. 
    $('#mdlZonas').on('shown.bs.modal', function () {
        initialize();
    });
