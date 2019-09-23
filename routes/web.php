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


Route::redirect('/','home');


/* WebPages */
Route::get('/home', 'Web\PageController@home')->name('home');
Route::get('/publications', 'Web\PageController@publications')->name('publications');
Route::get('/publications/{slug}', 'Web\PageController@detail')->name('detail');
Route::get('/terms', 'Web\PageController@terms')->name('terms');
Route::get('/policy', 'Web\PageController@policy')->name('policy');
Route::get('/contacts', 'Web\PageController@contacts')->name('contacts');
Route::get('/credits', 'Web\PageController@credits')->name('credits');


Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');

Route::get('/gallery', 'Web\PageController@gallery')->name('gallery');
Route::get('/gallery/simple', 'Web\PageController@simple')->name('simple_search');
Route::get('/gallery/advance', 'Web\PageController@advance')->name('advance_search');
Route::get('/gallery/author', 'Web\PageController@author')->name('author_search');

/* Rota de teste */
Route::get('/admin/teste', 'Admin\AdminController@teste');
Route::get('/admin/teste2', 'Admin\AdminController@teste2')->name('teste2');


/* Rota para gerar o pdf */
Route::get('/generate-pdf/{slug}','HomeController@generatePDF')->name('generate-pdf');

/* Rota Profile */
Route::get('/admin/profile', 'Admin\UserController@profile')->name('profile');
Route::post('/admin/profile', 'Admin\UserController@update_avatar');



Route::post('profile/{profileId}/follow', 'Admin\ProfileController@followUser')->name('user.follow');
Route::post('/{profileId}/unfollow', 'Admin\ProfileController@unFollowUser')->name('user.unfollow');




Auth::routes(['verify' => true]);

/* Admin */
Route::resource('admin', 'Admin\AdminController');
Route::resource('adminposts', 'Admin\PostController');
Route::resource('adminprofile', 'Admin\UserController');

Route::get('/repost/{id}', 'Admin\PostController@repost')->name('repost');
Route::get('/compare/{id}', 'Admin\PostController@compare')->name('compare');

/* Admin - localização */
Route::get('get-state-list','Admin\AdminController@getStateList');
Route::get('get-city-list','Admin\AdminController@getCityList');
Route::get('get-place','Admin\AdminController@getPlace')->name('get-place');

/* Admin - Tabelas */
Route::resource('admintags', 'Admin\TagController');
Route::resource('admincategories', 'Admin\CategoryController');
Route::resource('admintechnologies', 'Admin\TechnologieController');
Route::resource('adminprofiles', 'Admin\ProfileController');
Route::resource('adminroles', 'Admin\RoleController');
Route::resource('admindistricts', 'Admin\DistrictController');
Route::resource('admincounties', 'Admin\CountyController');
Route::resource('adminplaces', 'Admin\PlaceController');
Route::resource('comments', 'Admin\CommentController');

/* Tools */
Route::get('/tools', 'Tools\ToolsController@tools')->name('tools');
Route::get('/events', 'Tools\ToolsController@events')->name('events');
Route::get('/status', 'Tools\ToolsController@status')->name('status');
