<?php

Route::get('/', function () {
    return view('layout.index');
});

Route::resource('ensaios', 'EnsaioController');
Route::resource('pessoas', 'PessoaController');
Route::resource('coristas', 'CoristaController');

Route::post('chamadas', 'ChamadaController@store');
Route::delete('chamadas', 'ChamadaController@destroy');


Route::get('/resources/assets/img/{filename}', function($filename){
    $path = resource_path() . '/assets/img/' . $filename;

    if(!File::exists($path)) {
        return response()->json(['message' => 'Image not found.'], 404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/construcao', 'HomeController@construcao')->name('construcao');

