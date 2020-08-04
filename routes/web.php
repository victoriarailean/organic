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

///Route::get('/', function () {
   // return view('welcome');
 //});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'FrontendController@index');
Route::get('/testimonials', 'FrontendController@testimonials');
Route::get('/faq', 'FrontendController@faq');
Route::get('/blog', 'FrontendController@blog');
Route::get('/contact','FrontendController@contact');
Route::post('/subs','FrontendController@subscribe')->name('form.subs');
Route::get('/shop', 'FrontendController@shop');
Route::get('/blog/grid', function () { 
    return view('blog/blog-grid');
});
Route::get('/blog/details', function(){
    return view('blog/blog-details');
});
     
Route::group(['prefix' => 'shop'], function () {

    Route::get('cart', 'frontedController@cart');
});

Route::group(['prefix' => 'shop'], function () {
    Route::get('single', function () { 
    return view('shop/shop-single');
    });
});
Route::group(['prefix' => 'shop'], function () {
    Route::get('blade', function () { 
    return view('shop');
    });
});
Route::group(['prefix' => 'pages'], function () {
    Route::get(404, function () { 
    return view('pages');
    });
});
Route::get('/shop/cart', function(){
    return view('shop/shop-cart');
});
 






// Route::get('/', function () {
//     return view('testimonials');
// });
// Route::get('/', function () {
//     return view('contact');
// });
// Route::get('/', function () {
//     return view('404');
// });
// Route::get('/', function () {
//     return view('shop-single');
// });
// Route::get('/', function () {
//     return view('shop-cart');
// });
// Route::get('/', function () {
//     return view('shop-html');
// });
// Route::get('/', function () {
//     return view('blog-details');
// });

/*Route::get('/faq', function () {


Route::group(['prefix' => 'blog'], function () {
    Route::get('details', function () { 
        return view('blog/blog-details');
    });
    Route::get('grid', function () { 
        return view('blog/blog-grid');
    });
});
Route::get('/app', function () {
    return view('app');
});
Route::get('/frontend', 'FrontendController@index');
Route::get('/index', function () { 
    return view('index');
});

Route::get('/', function(){
    $user = factory(App\User::class, 2)->make();
   /* return view('home', compact('user'));
//});


 //Route::get('/abaut', 'FrontendController@abaut');
 //Route::view('/abaut', 'abaut');
 //Route::get('/service', 'FrontendController@service');
 //Route::view('/services', 'services');
 //Route::get("model", "banner@index");*/
//Route::get('/index', function () { 
    //return view('index');

