<?php
use App\Blog;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::resource('bungalow', 'BungalowController');
Route::get('services', 'FasilitasController@services');
Route::resource('fasilitas', 'FasilitasController');
Route::resource('kegiatan', 'KegiatanController');
Route::resource('testimoni', 'TestimoniController');
Route::resource('kontak', 'KontakController');
Route::resource('galeri', 'GaleriController');
Route::resource('bungalow_pesan', 'Bungalow_PesanController');
Route::resource('bungalow_fasilitas', 'Bungalow_FasilitasController');
Route::resource('bungalow_galeri', 'Bungalow_GaleriController');
Route::resource('pesan', 'PesanController');
Route::any ( 'blog/user/search', function () {
    $keyword = Input::get ( 'keyword' );
    if($keyword != ""){
    $blog = Blog::where ( 'nama', 'LIKE', '%' . $keyword . '%' )->orWhere('konten', 'LIKE', '%' . $keyword . '%')->orderBy('created_at','desc')->paginate (5)->setPath ( '' );
    $pagination = $blog->appends ( array (
                'keyword' => Input::get ( 'keyword' ) 
        ) );
    if (count ( $blog ) > 0)
        return view ( 'blog/search' )->withDetails ( $blog )->withQuery ( $keyword );
    }
        return view ( 'blog/search' )->withMessage ( 'No Details found. Try to search again !' );
} );
Route::get('blog/user','BlogController@blogs');
Route::resource('blog', 'BlogController');
Auth::routes();

Route::get('/admin', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/', 'WelcomeController@index');
Route::resource('komentar', 'KomentarController');
Route::get('/pesan/show', 'PesanController@show');