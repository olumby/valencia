<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>
<script>
    hljs.initHighlightingOnLoad();

    var layer = L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',{
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'
    });

    var map = L.map('map', {
        scrollWheelZoom: false,
        center: [39.46820, -0.36053],
        zoom: 13
    });

    map.addLayer(layer);
</script>