<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Blog;
use App\User;
use App\Galeri;
use App\Komentar;
use App\Kategori;
use Illuminate\Http\Request;
use Session;
use Image;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'index','create','store','edit','destroy','update']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blog = Blog::join('galeris', 'blogs.id', '=', 'galeris.blog_id')
        ->select('blogs.id','blogs.kategori_id','blogs.nama','konten','path')->orderBy('blogs.created_at','desc')->paginate(6);
        return view('blog.index', compact('blog'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function blogs()
    {
        $blog = Blog::join('galeris', 'blogs.id', '=', 'galeris.blog_id')
        ->select('blogs.id','blogs.kategori_id','blogs.nama','konten','path','blogs.created_at')->orderBy('blogs.created_at','desc')->paginate(6);
        $kategori = Kategori::orderBy('nama','asc')->get();
        return view('blog.user', compact('blog','kategori'));
    }

    public function category($sign){
        $selectedkategori = $sign;
        $blog = Blog::join('galeris', 'blogs.id','=','galeris.blog_id')
        ->join('kategoris', 'kategoris.id','=','blogs.kategori_id')
        ->where('kategoris.nama','=',$selectedkategori)
        ->select('blogs.id as blog_id', 'blogs.nama as judul','blogs.konten','kategoris.nama as kategori','galeris.path','blogs.created_at as created')
        ->orderBy('created','desc')
        ->paginate (6);
        $recent = Blog::join('galeris', 'blogs.id', '=', 'galeris.blog_id')
        ->select('blogs.id','blogs.kategori_id','blogs.nama','konten','path','blogs.created_at')->orderBy('blogs.created_at','desc')
        ->get();

        $kategori = Kategori::orderBy('nama','asc')->get();
        return view ( 'blog.category',compact('blog','recent','kategori','selectedkategori'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        $kategori = Kategori::orderBy('nama','asc')->get();
        return view('blog.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $kategori_id = Kategori::select('id')->where('nama','=',$request->get('kategori'))->get();

        foreach ($kategori_id as $key) {
            $kategori_id=$key->id;
        }

        $file = $request->file('image');
        if(isset($file))
        {
            $filename =$file->getClientOriginalName();
            Image::make($file)->save(public_path('/images/gallery/' . $filename));
        }

        $blog = new Blog(array(
                'kategori_id' => $kategori_id,
                'nama' => $request->get('nama'),
                'konten' => $request->get('konten'),
        ));
        $blog->save();
        $blog_id = Blog::max('id');

        if(isset($filename)){
            $gallery = new Galeri(array(
                'kategori_id' => $kategori_id,
                'blog_id' => $blog_id,
                'nama' => $filename,
                'mime' => $file->getClientMimeType(),
                'path' => '/images/gallery/' . $filename,
                'size' => $file->getClientSize(),
            ));
            $gallery->save();
        }

        Session::flash('flash_message', 'Blog added!');

        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {   
        $user = User::first();
        $blog = Blog::join('galeris', 'blogs.id','=','galeris.blog_id')
        ->join('kategoris', 'kategoris.id','=','blogs.kategori_id')
        ->where('blogs.id','=',$id)
        ->select('blogs.id', 'blogs.nama as judul','blogs.konten','kategoris.nama as kategori','galeris.path','blogs.created_at as created')
        ->orderBy('created','desc')
        ->first();
        $jumlahkomentar=0;
        foreach ($blog->komentar as $key) {
            if($key->permissions=='accept'){
                $jumlahkomentar+=1;
            }
        }
        $recent = Blog::join('galeris', 'blogs.id', '=', 'galeris.blog_id')
        ->select('blogs.id','blogs.kategori_id','blogs.nama','konten','path','blogs.created_at')->orderBy('blogs.created_at','desc')->paginate(5);
        $kategori = Kategori::orderBy('nama','asc')->get();

        $komentar = Komentar::where('blog_id','=',$id)->where('permissions','=','accept')->orderBy('created_at','desc')->paginate(6);
        return view('blog.show',compact('blog','kategori','recent','user','komentar','jumlahkomentar'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $blog = Blog::join('galeris', 'blogs.id','=','galeris.blog_id')
        ->join('kategoris', 'kategoris.id','=','blogs.kategori_id')
        ->where('blogs.id','=',$id)
        ->select('blogs.id', 'blogs.nama as judul','blogs.konten','kategoris.nama as kategori','galeris.path','blogs.created_at as created')
        ->orderBy('created','desc')
        ->first();
        $kategori = Kategori::orderBy('nama','asc')->get();
        return view('blog.edit', compact('blog','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $blog = Blog::findOrFail($id);
        $blog->update($requestData);

        Session::flash('flash_message', 'Blog updated!');

        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Blog::destroy($id);

        Session::flash('flash_message', 'Blog deleted!');

        return redirect('blog');
    }
}
