<?php

return [

	'apis' => [

		'traffic' => [

			'parking' => [

				'name'   => 'Parking',

				'update' => 'month',

				'apis'   => ['aparcabicis', 'mvilidad reducida', 'ora', 'expendedores ora']

			],

			'flow'    => [

				'name'   => 'Traffic Flow',

				'update' => 'minute',

				'apis' => ['camaras', 'estadotr', 'intensidad', 'ocupacion', 'puntos medidas', 'relacionmedidacam']

			],

			'bikes'   => [

				'name'   => 'Bikes',

				'update' => 'minute',

				'apis' => ['aparcabicis', 'carril bici', 'estaciones valenbisi']

			],

			'points'  => [

				'name'   => 'Points of Interest',

				'update' => 'month',

				'apis' => ['panelsinfo', 'paradastaxi', 'paradasemt', 'recarga v elec']

			]

		],

		'environment' => [

			'trees' => [

				'name' => 'Trees',

				'update' => 'week',

				'apis' => ['arbolado', 'ar monumental']

			],

			'contamination' => [

				'name' => 'Contamination',

				'update' => 'week',

				'apis' => ['6a', '7a', '4a', '1a', '5a', '3a', 'red vigiliancia']

			],

			'pollen' => [

				'name' => 'Pollen',

				'update' => 'week',

				'apis' => ['casuarina', 'cupressus', 'fraxinus', 'ligustrum', 'morus', 'olea', 'pinus', 'platanus', 'populus', 'quercus', 'ulmus']

			],

			'noise' => [

				'name' => 'Noise',

				'update' => 'month',

				'apis' => ['mapdia', 'maplden', 'mapnoche', 'maptarde', 'ultmes', 'estaciones']

			],

			'recycling' => [

				'name' => 'Recycling',

				'update' => 'month',

				'apis' => ['contne aceite', 'resuidos solidos']

			]

		],

		'society' => [

			'social' => [

				'name' => 'Social Services',

				'update' => 'week',

				'apis' => ['recursos sociales para *', 'terrirorial']

			],

			'equipment' => [

				'name' => 'Equipment',

				'update' => 'week',

				'apis' => ['equipamientos', 'datos basicos', 'tabla relacion']

			],

			'points' => [

				'name' => 'Points of Interest',

				'update' => 'week',

				'apis' => ['wifi', 'once', 'relojes']

			]

		]

	]

];

//return [
//
//	'sources' => [
//
//		'datosabiertos' => [
//
//			'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/fCategoriaVistaAcc_busqueda?ReadForm&Vista=vCategoriasAccTodas&Categoria=Sin_categoria',
//
//			'base_url' => 'http://mapas.valencia.es/lanzadera/opendata'
//
//		]
//
//	],
//
//	'apis'    => [
//
//		'trafic' => [
//
//			'bikeparks'       => [
//
//				'name'     => 'Bike Parking',
//
//				'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/resultadoCapas/4160A632F4BF00ADC1257C70003E4F99',
//
//				'updates'  => 'semiannualy',
//
//				'source'   => 'opendata',
//
//				'endpoint' => '/aparcabicis/JSON',
//
//				'class'    => 'SimpleGeoPoints'
//
//			],
//
//			'disabledparking' => [
//
//				'name'     => 'Disabled Parking',
//
//				'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/resultadoCapas/F9B512FAFDA7525DC1257C70003E4EEA',
//
//				'updates'  => 'semiannually',
//
//				'source'   => 'opendata',
//
//				'endpoint' => '/aparcaminusvalidos/JSON',
//
//				'class'    => 'SimpleGeoPoints'
//
//			],
//
//			'oraparking'      => [
//
//				'name'     => 'ORA Parking',
//
//				'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/resultadoCapas/4160A632F4BF00ADC1257C70003E4F99',
//
//				'updates'  => 'quarterly',
//
//				'source'   => 'opendata',
//
//				'endpoint' => '/Tra_ora_aparcamientos/JSON',
//
//				'class'    => 'SimpleGeoPoints'
//
//			],
//
//			'bikepaths'       => [
//
//				'name'     => 'Bike Paths',
//
//				'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/resultadoCapas/667FB171CB271875C1257C70003E4FA4',
//
//				'updates'  => 'quarterly',
//
//				'source'   => 'opendata',
//
//				'endpoint' => '/Tra-carril-bici/JSON',
//
//				'class'    => 'SimpleGeoPaths'
//
//			],
//
//		],
//
//		'dummy'  => [
//
//			'one' => [
//
//				'name' => 'My Name'
//
//			],
//
//			'two' => [
//
//				'name' => 'My Name Two'
//
//			]
//
//		]
//
//	]
//
//
//];