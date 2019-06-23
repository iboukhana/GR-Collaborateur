<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('collaborateur/create', 'CollaborateurController@create');
Route::post('collaborateur', 'CollaborateurController@store');
Route::get('collaborateur/index','CollaborateurController@index');//liste
Route::get('collaborateur/show/{id}','CollaborateurController@show');//donnees
Route::get('collaborateur/edit/{id}','CollaborateurController@edit');
Route::post('collaborateur/update/{id}','CollaborateurController@update');

Route::get('poste/create', 'AjoutPoste@create');
Route::post('poste', 'AjoutPoste@store');

Route::get('responsable/create', 'AjoutResponsable@create');
Route::post('responsable', 'AjoutResponsable@store');

Route::get('projet/create', 'AjoutProjet@create');
Route::post('projet', 'AjoutProjet@store');

Route::post('collaborateur/upload','CollaborateurController@upload');//upload cv
Route::post('download/{filename}', function($filename)
{
// Check if file exists in app/storage/file folder
$file_path = storage_path() .'/app/upload/'. $filename;
echo $file_path;
if (file_exists($file_path))
{
// Send Download
return Response::download($file_path, $filename, [
'Content-Length: '. filesize($file_path)
]);
}
else
{
// Error
exit('Requested file does not exist on our server!');
}
})
->where('filename', '[A-Za-z0-9\-\_\.]+');

//download
Route::get('collaborateur/liste/{id}','CollaborateurController@liste');//liste cv
Route::get('collaborateur/showprojet/{id}','CollaborateurController@showprojet');//donnees projets
Route::post('collaborateur/updateprojet/{id}','CollaborateurController@updateprojet');// modifier projet


Route::get('collaborateur/delete/{id}', 'CollaborateurController@delete');//supprimer cv

Route::get('collaborateur/search','AjoutReunionController@search');//donnees
Route::get('collaborateur/test','AjoutReunionController@create');//donnees


Route::get('collaborateur/reunion/calendrier','ReunionController@afficher_calendrier_reunion');
Route::get('collaborateur/reunion/create','ReunionController@create_reunion');
Route::get('collaborateur/reunion/liste','ReunionController@afficher_liste_reunion');
Route::post('reunion','ReunionController@insert_reunion');
Route::get('collaborateur/reunion/{id}/edit','ReunionController@afficher_edit_reunion');
Route::post('collaborateur/reunion/edit/{id}','ReunionController@edit_reunion');



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

