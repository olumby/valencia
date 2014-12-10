<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>
<script src="/js/app.js"></script>
<script>
$(document).ready(function () {
	hljs.initHighlightingOnLoad();
	$.openDataManager({
	    mapElementId: "map",
		mapType: "Magic"
	});
});
</script>