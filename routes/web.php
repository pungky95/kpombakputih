<?php
use App\Blog;
use App\Kategori;
use App\Galeri;
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
Route::get('/gallery','GaleriController@gallery');
Route::resource('galeri', 'GaleriController');
Route::resource('bungalow_pesan', 'Bungalow_PesanController');
Route::resource('bungalow_fasilitas', 'Bungalow_FasilitasController');
Route::resource('bungalow_galeri', 'Bungalow_GaleriController');
Route::resource('pesan', 'PesanController');
Route::any ( 'blog/search', function () {
    $keyword = Input::get ( 'keyword' );
    $recent = Blog::join('galeris', 'blogs.id', '=', 'galeris.blog_id')
        ->select('blogs.id','blogs.kategori_id','blogs.nama','konten','path','blogs.created_at')->orderBy('blogs.created_at','desc')->paginate(5);
    $kategori = Kategori::orderBy('nama','asc')->get();
    if($keyword != ""){
    $blog = Blog::join('galeris', 'blogs.id','=','galeris.blog_id')
        ->join('kategoris', 'kategoris.id','=','blogs.kategori_id')
        ->where ( 'blogs.nama', 'LIKE', '%' . $keyword . '%' )->orWhere('blogs.konten', 'LIKE', '%' . $keyword . '%')
        ->select('blogs.id as blog_id', 'blogs.nama as judul','blogs.konten','kategoris.nama as kategori','galeris.path','blogs.created_at as created')
        ->orderBy('created','desc')
        ->paginate (5)->setPath ( '' );
    $pagination = $blog->appends ( array (
                'keyword' => Input::get ( 'keyword' ) 
        ) );
    if (count ( $blog ) > 0)
        return view ( 'blog/search',compact('recent','kategori') )->withDetails ( $blog )->withQuery ( $keyword );
    }
        return view ( 'blog/search',compact('recent','kategori') )->withMessage ( 'No Details found. Try to search again !' );
} );
Route::any('blog/category/{sign}','BlogController@category');
Route::get('blogs/','BlogController@blogs');
Route::resource('blog', 'BlogController');
Auth::routes();

Route::get('/admin', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('editprofile', 'HomeController@editprofile');
Route::post('editprofile', 'HomeController@update');
Route::get('/', 'WelcomeController@index');
Route::resource('komentar', 'KomentarController');
Route::get('/pesan/show', 'PesanController@show');
Route::resource('kategori', 'KategoriController');