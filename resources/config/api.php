<?php

return [

	'sources' => [

		'datosabiertos' => [

			'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/fCategoriaVistaAcc_busqueda?ReadForm&Vista=vCategoriasAccTodas&Categoria=Sin_categoria',

			'base_url' => 'http://mapas.valencia.es/lanzadera/opendata'

		]

	],

	'apis'    => [

		'trafic' => [

			'bikeparks'       => [

				'name'     => 'Bike Parking',

				'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/resultadoCapas/4160A632F4BF00ADC1257C70003E4F99',

				'updates'  => 'semiannualy',

				'source'   => 'opendata',

				'endpoint' => '/aparcabicis/JSON',

				'class'    => 'SimpleGeo'

			],

			'disabledparking' => [

				'name'     => 'Disabled Parking',

				'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/resultadoCapas/F9B512FAFDA7525DC1257C70003E4EEA',

				'updates'  => 'semiannually',

				'source'   => 'opendata',

				'endpoint' => '/aparcaminusvalidos/JSON',

				'class'    => 'SimpleGeo'

			],

			'oraparking'      => [

				'name'     => 'ORA Parking',

				'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/resultadoCapas/4160A632F4BF00ADC1257C70003E4F99',

				'updates'  => 'quarterly',

				'source'   => 'opendata',

				'endpoint' => '/Tra_ora_aparcamientos/JSON',

				'class'    => 'SimpleGeo'

			],

			'bikepaths'       => [

				'name'     => 'Bike Paths',

				'doc'      => 'http://www.valencia.es/ayuntamiento/datosabiertos.nsf/resultadoCapas/667FB171CB271875C1257C70003E4FA4',

				'updates'  => 'quarterly',

				'source'   => 'opendata',

				'endpoint' => '/Tra-carril-bici/JSON',

				'class'    => 'SimpleGeo'

			],

		],

		'dummy'  => [

			'one' => [

				'name' => 'My Name'

			],

			'two' => [

				'name' => 'My Name Two'

			]

		]

	]


];