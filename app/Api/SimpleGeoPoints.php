<?php namespace App\Api;

class SimpleGeoPoints extends Api {

	function mainBody()
	{
		$body = '<h1>' . $this->name . '</h1>';

		$body .= $this->map();

		return $body;
	}

	function mainBodyend()
	{
		$body = $this->script();

		return $body;
	}

	function map()
	{
		return '<div id="map"></div>';
	}

	function script()
	{
		$script = '<script>';

		$script .= 'jQuery.ajax({
    type: "GET",
    url: "/dump/demo.JSON",
    dataType: "json",
    headers: { \'Access-Control-Allow-Origin\': \'*\' },
    success: function (response) {

        geojsonLayer = L.geoJson(response, {
        }).addTo(map);
    }
});';

		$script .= '</script>';

		return $script;
	}
}