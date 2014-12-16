(function($){
	$.openDataManager = function(options){
		var base = this;

		base.init = function(){
			base.options = $.extend({},$.openDataManager.defaultOptions, options);

			base.loadMap();
		};

		base.loadMap = function(){
			var layer = L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',{
				attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'
			});

			var map = L.map(base.options.mapElementId, {
				scrollWheelZoom: false,
				center: [39.466667, -0.383333],
				zoom: 13
			});

			map.addLayer(layer);
		};

		base.init();
	};

	$.openDataManager.defaultOptions = {
		mapType: "SimpleGeoPoints"
	};

	$.fn.openDataManager = function(options){
		return this.each(function(){
			(new $.openDataManager(options));
		});
	};
})(jQuery);