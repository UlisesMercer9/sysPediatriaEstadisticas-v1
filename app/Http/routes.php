<?php


use Pediatra\Town;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('quienesSomos','FrontController@quienesSomos');
Route::get('areaInfantil','FrontController@areaInfantil');
Route::get('admin','FrontController@admin');
Route::get('login','FrontController@login');

Route::resource('log','LogController');
Route::get('logout','LogController@logout');
Route::get('logout2','LogController@logout2');




Route::resource('admin','AdminController');
Route::resource('especialista','EspecialistaController');
Route::resource('infante','InfanteController');
Route::resource('tutor','TutorController');
Route::resource('concepto','ConceptoController');

Route::get('infante/{id}/destroy', [
  'uses' => 'InfanteController@destroy',
  'as' => 'infante.destroy'
]);

Route::get('admin/{id}/destroy', [
  'uses' => 'AdminController@destroy',
  'as' => 'admin.destroy'
]);

Route::get('especialista/{id}/destroy', [
  'uses' => 'EspecialistaController@destroy',
  'as' => 'especialista.destroy'
]);

Route::get('ajax-ciudad',function(){
   
    $id = Input::get('esta_id');

    $ciudades = Town::where('state_id','=', $id)->get();
    
    return Response::json($ciudades);
});



Route::get('concepto/{id}/detalle1',[
  'uses' => 'ConceptoController@detalle1',
   'as' => 'concepto.detalle1'
 ]);

 Route::get('concepto/{id}/detalle2',[
   'uses' => 'ConceptoController@detalle2',
    'as' => 'concepto.detalle2'
  ]);

  Route::get('concepto/{id}/detalle3',[
    'uses' => 'ConceptoController@detalle3',
     'as' => 'concepto.detalle3'
   ]);

   Route::get('concepto/{id}/detalle4',[
     'uses' => 'ConceptoController@detalle4',
      'as' => 'concepto.detalle4'
    ]);

    Route::get('concepto/{id}/detalle5',[
      'uses' => 'ConceptoController@detalle5',
       'as' => 'concepto.detalle5'
     ]);

     Route::get('concepto/{id}/detalle6',[
       'uses' => 'ConceptoController@detalle6',
        'as' => 'concepto.detalle6'
      ]);

      Route::get('concepto/{id}/detalle7',[
        'uses' => 'ConceptoController@detalle7',
         'as' => 'concepto.detalle7'
       ]);

       Route::get('concepto/{id}/detalle8',[
         'uses' => 'ConceptoController@detalle8',
          'as' => 'concepto.detalle8'
        ]);

        Route::get('concepto/{id}/detalle9',[
          'uses' => 'ConceptoController@detalle9',
           'as' => 'concepto.detalle9'
         ]);

         Route::get('concepto/{id}/detalle95',[
           'uses' => 'ConceptoController@detalle95',
            'as' => 'concepto.detalle95'
          ]);

         Route::get('concepto/{id}/detalle10',[
           'uses' => 'ConceptoController@detalle10',
            'as' => 'concepto.detalle10'
          ]);

          Route::get('concepto/{id}/detalle11',[
           'uses' => 'ConceptoController@detalle11',
            'as' => 'concepto.detalle11'
          ]);

          Route::get('concepto/{id}/detalle12',[
           'uses' => 'ConceptoController@detalle12',
            'as' => 'concepto.detalle12'
          ]);

          Route::get('concepto/{id}/detalle13',[
           'uses' => 'ConceptoController@detalle13',
            'as' => 'concepto.detalle13'
          ]);

          Route::get('concepto/{id}/detalle14',[
           'uses' => 'ConceptoController@detalle14',
            'as' => 'concepto.detalle14'
          ]);

          Route::get('concepto/{id}/detalle15',[
           'uses' => 'ConceptoController@detalle15',
            'as' => 'concepto.detalle15'
          ]);

          Route::get('concepto/{id}/detalle16',[
           'uses' => 'ConceptoController@detalle16',
            'as' => 'concepto.detalle16'
          ]);

           Route::get('concepto/{id}/detalle17',[
           'uses' => 'ConceptoController@detalle17',
            'as' => 'concepto.detalle17'
          ]);

            Route::get('concepto/{id}/detalle18',[
           'uses' => 'ConceptoController@detalle18',
            'as' => 'concepto.detalle18'
          ]);

           Route::get('concepto/{id}/detalle19',[
           'uses' => 'ConceptoController@detalle19',
            'as' => 'concepto.detalle19'
          ]);  

           Route::get('concepto/{id}/detalle20',[
           'uses' => 'ConceptoController@detalle20',
            'as' => 'concepto.detalle20'
          ]);  

           Route::get('concepto/{id}/detalle21',[
           'uses' => 'ConceptoController@detalle21',
            'as' => 'concepto.detalle21'
          ]);  

           Route::get('concepto/{id}/detalle22',[
           'uses' => 'ConceptoController@detalle22',
            'as' => 'concepto.detalle22'
          ]); 

           Route::get('concepto/{id}/detalle23',[
           'uses' => 'ConceptoController@detalle23',
            'as' => 'concepto.detalle23'
          ]); 

           Route::get('concepto/{id}/detalle24',[
           'uses' => 'ConceptoController@detalle24',
            'as' => 'concepto.detalle24'
          ]); 

           Route::get('concepto/{id}/detalle25',[
           'uses' => 'ConceptoController@detalle25',
            'as' => 'concepto.detalle25'
          ]);

          Route::get('concepto/{id}/detalle26',[
           'uses' => 'ConceptoController@detalle26',
            'as' => 'concepto.detalle26'
          ]);  

          Route::get('concepto/{id}/detalle27',[
           'uses' => 'ConceptoController@detalle27',
            'as' => 'concepto.detalle27'
          ]);  

          Route::get('concepto/{id}/detalle28',[
           'uses' => 'ConceptoController@detalle28',
            'as' => 'concepto.detalle28'
          ]);  

          Route::get('concepto/{id}/detalle29',[
           'uses' => 'ConceptoController@detalle29',
            'as' => 'concepto.detalle29'
          ]); 

          Route::get('concepto/{id}/detalle30',[
           'uses' => 'ConceptoController@detalle30',
            'as' => 'concepto.detalle30'
          ]); 

          Route::get('concepto/{id}/detalle31',[
           'uses' => 'ConceptoController@detalle31',
            'as' => 'concepto.detalle31'
          ]);

          Route::get('concepto/{id}/detalle32',[
           'uses' => 'ConceptoController@detalle32',
            'as' => 'concepto.detalle32'
          ]); 

          Route::get('concepto/{id}/detalle33',[
           'uses' => 'ConceptoController@detalle33',
            'as' => 'concepto.detalle33'
          ]); 

          Route::get('concepto/{id}/detalle34',[
           'uses' => 'ConceptoController@detalle34',
            'as' => 'concepto.detalle34'
          ]);

          Route::get('concepto/{id}/detalle35',[
           'uses' => 'ConceptoController@detalle35',
            'as' => 'concepto.detalle35'
          ]); 

          Route::get('concepto/{id}/detalle36',[
           'uses' => 'ConceptoController@detalle36',
            'as' => 'concepto.detalle36'
          ]); 

          Route::get('concepto/{id}/detalle37',[
           'uses' => 'ConceptoController@detalle37',
            'as' => 'concepto.detalle37'
          ]);

          Route::get('concepto/{id}/detalle38',[
           'uses' => 'ConceptoController@detalle38',
            'as' => 'concepto.detalle38'
          ]);  

          Route::get('concepto/{id}/detalle39',[
           'uses' => 'ConceptoController@detalle39',
            'as' => 'concepto.detalle39'
          ]);  

          Route::get('concepto/{id}/detalle40',[
           'uses' => 'ConceptoController@detalle40',
            'as' => 'concepto.detalle40'
          ]);

          Route::get('concepto/{id}/detalle41',[
           'uses' => 'ConceptoController@detalle41',
            'as' => 'concepto.detalle41'
          ]);

          Route::get('concepto/{id}/detalle42',[
           'uses' => 'ConceptoController@detalle42',
            'as' => 'concepto.detalle42'
          ]);

          Route::get('concepto/{id}/detalle43',[
           'uses' => 'ConceptoController@detalle43',
            'as' => 'concepto.detalle43'
          ]);

          Route::get('concepto/{id}/detalle44',[
           'uses' => 'ConceptoController@detalle44',
            'as' => 'concepto.detalle44'
          ]); 

          Route::get('concepto/{id}/detalle45',[
           'uses' => 'ConceptoController@detalle45',
            'as' => 'concepto.detalle45'
          ]); 

          Route::get('concepto/{id}/detalle46',[
           'uses' => 'ConceptoController@detalle46',
            'as' => 'concepto.detalle46'
          ]);     
         
          Route::get('concepto/{id}/detalle47',[
           'uses' => 'ConceptoController@detalle47',
            'as' => 'concepto.detalle47'
          ]); 

          Route::get('concepto/{id}/detalle48',[
           'uses' => 'ConceptoController@detalle48',
            'as' => 'concepto.detalle48'
          ]); 

          Route::get('concepto/{id}/detalle49',[
           'uses' => 'ConceptoController@detalle49',
            'as' => 'concepto.detalle49'
          ]); 
          
          Route::get('concepto/{id}/detalle50',[
           'uses' => 'ConceptoController@detalle50',
            'as' => 'concepto.detalle50'
          ]); 

          Route::get('concepto/{id}/detalle51',[
           'uses' => 'ConceptoController@detalle51',
            'as' => 'concepto.detalle51'
          ]); 

          Route::get('concepto/{id}/detalle52',[
           'uses' => 'ConceptoController@detalle52',
            'as' => 'concepto.detalle52'
          ]);
     
 
 

          Route::get('concepto/{id}/cubo1',[
            'uses' => 'ConceptoController@cubo1',
             'as' => 'concepto.cubo1'
           ]);

          Route::get('concepto/{id}/cubo2',[
            'uses' => 'ConceptoController@cubo2',
             'as' => 'concepto.cubo2'
           ]);

          Route::get('concepto/{id}/cubo3',[
            'uses' => 'ConceptoController@cubo3',
             'as' => 'concepto.cubo3'
           ]);

          Route::get('concepto/{id}/cubo4',[
            'uses' => 'ConceptoController@cubo4',
             'as' => 'concepto.cubo4'
           ]);

          Route::get('concepto/{id}/cubo5',[
            'uses' => 'ConceptoController@cubo5',
             'as' => 'concepto.cubo5'
           ]);

          Route::get('concepto/{id}/cubo6',[
            'uses' => 'ConceptoController@cubo6',
             'as' => 'concepto.cubo6'
           ]);

          Route::get('concepto/{id}/cubo7',[
            'uses' => 'ConceptoController@cubo7',
             'as' => 'concepto.cubo7'
           ]);

          Route::get('concepto/{id}/cubo8',[
            'uses' => 'ConceptoController@cubo8',
             'as' => 'concepto.cubo8'
           ]);

          Route::get('concepto/{id}/cubo9',[
            'uses' => 'ConceptoController@cubo9',
             'as' => 'concepto.cubo9'
           ]);

          Route::get('concepto/{id}/cubo10',[
            'uses' => 'ConceptoController@cubo10',
             'as' => 'concepto.cubo10'
           ]);

          Route::get('concepto/{id}/cubo11',[
            'uses' => 'ConceptoController@cubo11',
             'as' => 'concepto.cubo11'
           ]);

          Route::get('concepto/{id}/cubo12',[
            'uses' => 'ConceptoController@cubo12',
             'as' => 'concepto.cubo12'
           ]);

          Route::get('concepto/{id}/cubo13',[
            'uses' => 'ConceptoController@cubo13',
             'as' => 'concepto.cubo13'
           ]);

       Route::get('concepto/{id}/cubo14',[
            'uses' => 'ConceptoController@cubo14',
             'as' => 'concepto.cubo14'
           ]);

       