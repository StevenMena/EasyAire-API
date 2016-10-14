<?php
Route::group(['prefix' => 'hojas' ], function(){
	/*
		Ruta para el proceso ingreso y visualización de restricciones de laboratorios nacionales
	*/	
	Route::group(['prefix' => 'servicio'], function(){
		
		Route::get('/',[
			'as' 	=> 'nueva.hoja',
			'uses' 	=> 'ServicosController@create'
	 	]);
	 	/*
		Route::get('/dt-row-data',[
			'as' 	=> 'dt.row.data.restricciones.fab.prods',
			'uses' 	=> 'ProductosController@getDataRowsBySearch'
	 	]);
		
	 	Route::get('/lotes/{idRes}',[
		 		'as' => 'productos.lotes',
				'uses' => 'ProductosController@createLotes'
		 	]);

		Route::get('/lotes/{idRes}/dt-row-data',[
		 		'as' => 'dt.row.datarestricciones.fab.prods.lotes',
				'uses' => 'ProductosController@getDataRowsRestriccionesLotes'
		 	]);	 	
		 */
	});
});
