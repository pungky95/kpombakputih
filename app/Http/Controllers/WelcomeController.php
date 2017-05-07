<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;
use App\Fasilita;
use App\Http\Requests;
use DB;
use App\Blog;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::paginate(10);
        $fasilitas = Fasilita::join('galeris','fasilitas.id','=','galeris.fasilitas_id')->
        select('fasilitas.nama as nama','keterangan','galeris.path')->paginate(4);
        $whyus = Fasilita::join('galeris','fasilitas.id','=','galeris.fasilitas_id')
        ->select('fasilitas.id as id','fasilitas.nama as nama','path','keterangan')->whereIn('fasilitas.id',[18,7,19])->get();
        $blog = Blog::join('galeris', 'blogs.id', '=', 'galeris.blog_id')
        ->select('blogs.id','blogs.kategori_id','blogs.nama','konten','path','blogs.created_at')->orderBy('blogs.created_at','desc')->paginate(5);
        return view('home', compact('testimoni','blog','fasilitas','whyus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
