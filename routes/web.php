<?php

use Illuminate\Support\Facades\Route;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//use App;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Ajax

Route::get('/getCountries', 'PagesController@getCountries')->name('getCountries');

//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Routes

Route::get('/', 'PagesController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/about-us', 'PagesController@about')->name('about');

Route::get('/contact-us', 'PagesController@contact')->name('contact');

Route::get('/directory', 'SearchController@getDirectory')->name('directory');

Route::post('/search', 'SearchController@postSearch')->name('search');

Route::get('/publications', 'PagesController@publication')->name('publications');

Route::get('/blog', 'PagesController@blog')->name('blog');

Route::get('post/{slug}', ['as' => 'blog.show', 'uses' => 'PagesController@postDetails']);

Route::get('category/{slug}', ['as' => 'categoryPosts', 'uses' => 'PagesController@categoryPosts']);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('categorie/check_slug', 'CategoryController@check_slug')->name('category.check_slug');

Route::get('postn/check_slug', 'PostController@check_slug')->name('post.check_slug');

Route::get('doctor/{id}', ['as' => 'doctor.show', 'uses' => 'SearchController@view']);

Route::post('contact', 'ContactController@store')->name('postcontact');

Route::post('newsletter','NewsletterController@store');

Route::get('/search', 'SearchController@getSearch')->name('getSearch');

Route::post('/search', 'SearchController@postSearch')->name('search');

Route::get('/setting', 'ProfilController@setting')->name('setting');

Route::get('/edit/profil', 'ProfilController@editProfil')->name('editprofil');

Route::post('/updatepassword', 'ProfilController@updatePassword')->name('updatepassword');

Route::get('/import_excel', 'DoctorController@getImport')->name('doimport');

Route::post('/import_excel/import', 'DoctorController@import');

Route::resource('countries', 'CountryController');

Route::resource('regions', 'RegionController');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController');

Route::resource('profils', 'ProfilController');

Route::resource('doctors', 'DoctorController');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::get('locale/{locale}', function ($locale) {

	App::setLocale($locale);
    Session::put('locale', $locale);

    return redirect()->back();
});


/* Route::get('/create_role_permission', function () {
    $role = Role::create(['name' => 'Admin']);
    $permission = Permission::create(['name' => 'Admin Permissions']);
    auth()->user()->assignRole('Admin');
    auth()->user()->givePermissionTo('Admin Permissions');
}); */
