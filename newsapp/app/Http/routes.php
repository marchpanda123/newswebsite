 <?php

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
Route::get('/', 'User\UserController@index');
Route::get('/subject/{id}', 'User\UserController@subject');
Route::get('/article/{id}', 'User\UserController@showArticle');
Route::get('/search', 'User\UserController@scopeSearch');

// Upload the image
Route::post('author/upload', [
    'as' => 'author.upload',
    'uses' => 'Author\InfoController@uploadImage'
]);
Route::post('author/pageImage', [
    'as' => 'author.pageImage',
    'uses' => 'Author\InfoController@uploadPageImage'
]);

//Route for the admins
Route::resource('admin/ad', 'Admin\AdController');
Route::post('admin/ad/{id}', 'Admin\AdController@update');
Route::resource('admin/article', 'Admin\ArticleController', ['only' => ['index', 'show', 'update']]);
Route::resource('admin/tag', 'Admin\TagController', ['except' => ['show']]);
Route::resource('admin/label', 'Admin\LabelController', ['except' => ['index', 'show']]);
Route::post('admin/label/{id}', 'Admin\LabelController@update');
Route::resource('admin/user', 'Admin\UserController');

// Routes for the authors
Route::resource('author/article', 'Author\ArticleController');
Route::get('author/tag', 'Author\TagController@index');
Route::get('system/profile', 'User\ProfileController@index');
Route::post('system/profile', 'User\ProfileController@update');

// Authentication routes...
Route::get('/xineuropecom', 'Auth\AuthController@getLogin');
Route::post('/xineuropecom', 'Auth\AuthController@postLogin');
Route::get('/xineuropecomout', 'Auth\AuthController@getLogout');


