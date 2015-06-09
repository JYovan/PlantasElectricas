   
<script>
    var geocodersuc = new google.maps.Geocoder(); 
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

    function updateMarkerStatusSuc(str) {
        document.getElementById('markerStatusSuc').innerHTML = "Estado del marcador: " + str;
    }

    function updateMarkerPositionSuc(latLng) { 
            document.getElementById('txtLatitud').value = latLng.lat();
            document.getElementById('txtLongitud').value = latLng.lng(); 
    }

    function updateMarkerAddressSuc(str) { 
            document.getElementById('txtDireccionAprox').innerHTML = str; 
            document.getElementById('addressSuc').innerHTML = str; 
    }
    var imagesuc = {
        url: 'img/pointer/success_old.png',
        // This marker is 20 pixels wide by 32 pixels tall.
        size: new google.maps.Size(35, 56),
        // The origin for this image is 0,0.
        origin: new google.maps.Point(0, 0),
        // The anchor for this image is the base of the flagpole at 0,32.
        anchor: new google.maps.Point(18, 48)
    };
    function initialize(id) { 
        var latLngSuc = new google.maps.LatLng(21.144773947479774, -101.69065626835823);
        var mappointSuc = new google.maps.Map(document.getElementById('mdlmapSuc'), {
            zoom: 18,
            center: latLngSuc,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var markerdraggedSuc = new google.maps.Marker({
            position: latLngSuc,
            title: 'Arrastre y suelte en la direccion elejida',
            map: mappointSuc,
            draggable: true,
            icon: imagesuc
        });
        // Update current position info.
        updateMarkerPositionSuc(latLngSuc);
        geocodePositionSuc(latLngSuc);

        // Add dragging event listeners.
        google.maps.event.addListener(markerdraggedSuc, 'dragstart', function () {
            updateMarkerAddressSuc('Moviendo...');
        });

        google.maps.event.addListener(markerdraggedSuc, 'drag', function () {
            updateMarkerStatusSuc('Moviendo...');
            updateMarkerPositionSuc(markerdraggedSuc.getPosition());
        });

        google.maps.event.addListener(markerdraggedSuc, 'dragend', function () {
            updateMarkerStatusSuc('Marcador colocado');
            geocodePositionSuc(markerdraggedSuc.getPosition());
        });
    }
    // Onload handler to fire off the app.  
    $('#mdlSucursales').on('shown.bs.modal', function () {
        initialize();
        resizeMap();
    });
    
    function resizeMap() {
        if (typeof mappoint == "undefined")
            return;
        setTimeout(function () {
            resizingMap();
        }, 400);
    }

    function resizingMap() {
        if (typeof mappoint == "undefined")
            return;
        var center = map.getCenter();
        google.maps.event.trigger(mappoint, "resize");
        mappoint.setCenter(center);
    }
</script>   
<div id="infoPanelSuc"> 
    <div id="markerStatusSuc"><i>De clic en el marcador y arrastrelo al lugar que desee.</i></div> 
    <div id="infoSuc"></div> 
    <div id="addressSuc"></div>
</div>
<div id="mdlmapSuc" style="width: 100%; height: 250px;"></div>
<br> 