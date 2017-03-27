<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Galeri;
use Illuminate\Http\Request;
use Session;
use Image;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $galeri = Galeri::join('kategoris','galeris.kategori_id','=','kategoris.id')
        ->select('galeris.id','galeris.nama as nama','mime','path','size','kategoris.nama as kategori')
        ->paginate(25);

        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('galeri.create');
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
        
        // $requestData = $request->all();
        
        // Galeri::create($requestData);

        $image = $request->file('image');
        $filename ='/images/gallery/' . time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path($filename));
        $kategori = $request->get('kategori');
        $galeri = new Galeri(array(
                'foto'=>$filename,
                'kategori'=>$kategori,
        ));
        $galeri->save();

        Session::flash('flash_message', 'Galeri added!');

        return redirect('galeri');
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
        $galeri = Galeri::findOrFail($id);

        return view('galeri.show', compact('galeri'));
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
        $galeri = Galeri::findOrFail($id);

        return view('galeri.edit', compact('galeri'));
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
        
        $galeri = Galeri::findOrFail($id);
        $galeri->update($requestData);

        Session::flash('flash_message', 'Galeri updated!');

        return redirect('galeri');
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
        Galeri::destroy($id);

        Session::flash('flash_message', 'Galeri deleted!');

        return redirect('galeri');
    }
}
