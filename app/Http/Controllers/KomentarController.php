<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Komentar;
use Illuminate\Http\Request;
use Session;
Use App\Blog;
Use App\User;
use App\Kategori;
use DB;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $komentar = Komentar::paginate(25);

        return view('komentar.index', compact('komentar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('komentar.create');
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
        
        Komentar::create($requestData);

        Session::flash('flash_message', 'Komentar added!');

        $user = User::first();
        $id = $request->get('blog_id');
        $blog = Blog::join('galeris', 'blogs.id','=','galeris.blog_id')
        ->join('kategoris', 'kategoris.id','=','blogs.kategori_id')
        ->where('blogs.id','=',$id)
        ->select('blogs.id', 'blogs.nama as judul','blogs.konten','kategoris.nama as kategori','galeris.path','blogs.created_at as created')
        ->orderBy('created','desc')
        ->first();
        $recent = Blog::join('galeris', 'blogs.id', '=', 'galeris.blog_id')
        ->select('blogs.id','blogs.kategori_id','blogs.nama','konten','path','blogs.created_at')->orderBy('blogs.created_at','desc')->paginate(5);
        $kategori = Kategori::orderBy('nama','asc')->get();

        $komentar = Komentar::where('blog_id','=',$id)->orderBy('created_at','desc')->paginate(5);
        return view('blog.show',compact('blog','kategori','recent','user','komentar'));
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
        $komentar = Komentar::findOrFail($id);

        return view('komentar.show', compact('komentar'));
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
        $komentar = Komentar::findOrFail($id);

        return view('komentar.edit', compact('komentar'));
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
        
        $komentar = Komentar::findOrFail($id);
        $komentar->update($requestData);

        Session::flash('flash_message', 'Komentar updated!');

        return redirect('komentar');
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
        Komentar::destroy($id);

        Session::flash('flash_message', 'Komentar deleted!');

        return redirect('komentar');
    }
}
