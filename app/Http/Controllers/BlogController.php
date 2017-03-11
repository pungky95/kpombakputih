<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Blog;
use App\User;
use App\Galeri;
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
        $blog = Blog::orderBy('created_at','desc')->paginate(25);
        
        return view('blog.index', compact('blog'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function blogs()
    {
        $blog = Blog::orderBy('created_at','desc')->paginate(5);
        $galeri = Galeri::orderBy('created_at','desc')->paginate(25);
        $kategori = DB::table('blogs')->select('kategori')->distinct('kategori')->where('kategori','Hotel Reviews')->orWhere('kategori','Travel Tips')->orWhere('kategori','Facilities')->orWhere('kategori','Travel and Food')->get();
        return view('blog.user', compact('blog','kategori','galeri'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        return view('blog.create');
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
        
        $requestData = $request->all();
        
        Blog::create($requestData);
        $blog_id = Blog::max('id');
        $image = $request->file('image');
        $filename ='/images/gallery/' . time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path($filename));
        $galeri = new Galeri(array(
                'blog_id' => $blog_id,
                'foto'=>$filename,
                'kategori'=>$request->get('kategori'),
        ));
        $galeri->save();

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
        $blog = Blog::findOrFail($id);
        $user = User::first();
        return view('blog.show', ['blog'=>$blog,'user'=>$user]);
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
        $blog = Blog::findOrFail($id);

        return view('blog.edit', compact('blog'));
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
