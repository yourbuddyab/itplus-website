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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('backend')->group(function () {
    Route::get('/', 'LoginController@index')->name('login');
    Route::post('/', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/home','HomeController@index')->name('dashboard');
});
Route::prefix('backend/category')->group(function () {
    Route::get('/', 'CategoryController@index');
    Route::post('/insertCategory', 'CategoryController@store')->name('insertcat');
    Route::get('/editcategory/{category_id}', 'CategoryController@edit')->name('editcategory');
    Route::post('/updateCategory/{category_id}', 'CategoryController@update')->name('updateservices');
    Route::get('/manage-category', 'CategoryController@create');
    Route::get('/deletecategory/{category_id}', 'CategoryController@destroy');
});
Route::prefix('backend/services')->group(function () {
    Route::get('/', 'ServiceController@index')->name('services');
    Route::post('/insertService', 'ServiceController@store')->name('insertservice');
    Route::get('/manage-service', 'ServiceController@create')->name('manage_service');
    Route::get('/editservice/{id}', 'ServiceController@edit')->name('editservice');
    Route::post('/updateservice/{id}', 'ServiceController@update')->name('upsertservice');
    Route::get('/deleteservice/{id}', 'ServiceController@destroy')->name('deleteservice');
});
Route::prefix('backend/products')->group(function () {
    Route::get('/', 'ProductController@index');
    Route::post('/insertproduct', 'ProductController@store')->name('insertpro');
    Route::get('/manageproducts', 'ProductController@create');
    Route::get('/editproducts/{product_id}', 'ProductController@edit');
    Route::post('/updateproduct/{product_id}', 'ProductController@update')->name('updatepro');
    Route::get('/deleteproduct/{product_id}', 'ProductController@destroy');
});
Route::prefix('backend/portfolio')->group(function () {
    Route::get('/', 'PortfolioController@index');
    Route::post('/insertPortfolio', 'PortfolioController@store')->name('insertport');
    Route::get('/editportfolio/{id}', 'PortfolioController@edit');
    Route::post('/updateportfolio/{id}', 'PortfolioController@update')->name('updateport');
    Route::get('/manageportfolio', 'PortfolioController@create');
    Route::get('/deleteportfolio/{id}', 'PortfolioController@destroy');
});
Route::prefix('backend/testimonial')->group(function () {
    Route::get('/', 'TestimonialController@index');
    Route::post('/inserttestimonial', 'TestimonialController@store')->name('inserttest');
    Route::get('/managetestimonial', 'TestimonialController@create');
    Route::get('/edittestimonial/{id}', 'TestimonialController@edit');
    Route::post('/updatetestimonial/{id}', 'TestimonialController@update')->name('updatetest');
    Route::get('/deletetest/{id}', 'TestimonialController@destroy');
});
Route::prefix('backend/team')->group(function () {
    Route::get('/', 'TeamController@index');
    Route::post('/insertteam', 'TeamController@store')->name('insertteam');
    Route::get('/manageteam', 'TeamController@create');
    Route::get('/editteam/{id}', 'TeamController@edit');
    Route::post('/updateteam/{id}', 'TeamController@update')->name('updateteam');
    Route::get('/deleteteam/{id}', 'TeamController@destroy');
});
Route::prefix('backend/about')->group(function () {
    Route::get('/', 'AboutController@index')->name('about');
    Route::post('/insertAbout', 'AboutController@store')->name('insertabout');
    Route::get('/editcontent/{id}', 'AboutController@edit');
    Route::post('/updatecontent/{aboutid}', 'AboutController@update')->name('updateabout');
    Route::get('/manage-content', 'AboutController@create');
    // Route::get('/deleteabout', 'AboutController@destroy');
});
Route::prefix('backend/contact')->group(function () {
    Route::get('/', 'ContactController@index');
    Route::post('/insertContact', 'ContactController@store')->name('inscontact');
    Route::get('/editcontact/{id}', 'ContactController@edit');
    Route::post('/updateContact/{id}', 'ContactController@update')->name('upcontact');
    Route::get('/managecontact', 'ContactController@create');
    Route::get('/managecontactus', 'ContactController@managecontactus');
    Route::get('/manageproducts', 'ContactController@manageproducts');
    Route::get('/deletecontact/{id}', 'ContactController@destroy');
    Route::get('/deleteproduct/{id}', 'ContactController@deletepro');
});
Route::prefix('backend/logo')->group(function () {
    Route::get('/', 'LogoController@index');
    Route::post('/insertlogo', 'LogoController@store')->name('insertlogo');
    Route::get('/managelogo', 'LogoController@create');
    Route::get('/editlogo/{id}', 'LogoController@edit');
    Route::post('/updatelogo/{id}', 'LogoController@update')->name('updatelogo');
});
Route::prefix('backend/slider')->group(function () {
    Route::get('/', 'SliderController@index');
    Route::post('/insertslider', 'SliderController@store')->name('insertslider');
    Route::get('/manageslider', 'SliderController@create');
    Route::get('/editslider/{id}', 'SliderController@edit');
    Route::post('/updateslider/{id}', 'SliderController@update')->name('updateslider');
    Route::get('/deleteslider/{id}', 'SliderController@destroy');
});

Route::get('/','FrontController@index');
Route::get('/contact','FrontController@create');
Route::post('/insertcontact','FrontController@store')->name('insertcont');
Route::get('/about','FrontController@about');
Route::get('/services','FrontController@allservices');
Route::get('/allservices/{category_id}','FrontController@getallservices');
Route::get('/services/{id}','FrontController@services');
Route::get('/services/products/{id}','FrontController@products');
Route::get('/portfolio','FrontController@portfolio');
Route::post('/productorder','FrontController@productorder')->name('productorder');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 1;
});


