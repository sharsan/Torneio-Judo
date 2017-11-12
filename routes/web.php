<?php 

Route::get('/', function () {
  // return view('inicio');
	return view('home');
});


Route::get('/atletas'    , 'AtletaController@teste' ); 

Route::resource('arbitro'   , 'ArbitroController'   );
Route::resource('atleta'    , 'AtletaController'    ); 
Route::resource('categoria' , 'CategoriaController' ); 
Route::resource('clube'     , 'ClubeController'     ); 
Route::resource('competicao', 'CompeticaoController'); 
Route::resource('estado'    , 'EstadoController'    );  
Route::resource('et', 'EsttController');  
Route::resource('escalao'   , 'EscalaoController'   ); 
Route::resource('faseGr'    , 'FaseGrController'    );  
Route::resource('finalista' , 'FinalistaController' );  
Route::resource('inicio'    , 'InicioController'    );  
Route::resource('grupo'     , 'GrupoController'     ); 
Route::resource('inscrito'  , 'InscritoController'  ); 
Route::resource('luta'      , 'LutaController'      );
Route::resource('luta12'    , 'Luta12Controller'    ); 
Route::resource('luta34'    , 'Luta34Controller'    ); 
Route::resource('standard'  , 'StandardController'  ); 
Route::resource('treinador' , 'TreinadorController' );
Route::resource('terceiro'  , 'TerceiroController'  );  
Route::resource('torneio'   , 'TorneioController'   );  
Route::resource('usuario'   , 'UsuarioController'   );   

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('inicio', function () { 
Route::get('home', function () { 
	return view('welcome');
});

Route::get('/resultados', 'UsuarioController@resultados')->name('resultados');
Route::get('/eventos', 'UsuarioController@eventos')->name('eventos');
Route::get('/round1', 'GrupoController@round1')->name('round1');




// // eventos de erros
// Event::listen('404',function()
// {
// 	return Response::error('404');
// }
// //se alguem sem credibilidade quizer acessar janelas de outros usuarios
// Route::filter('auth', function()
// {if (Auth::guest()) return Redirect::to('login');
// });

// //pra evitar ser hackeado
// Route::filter('csrf', function(sequense)
// {

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
