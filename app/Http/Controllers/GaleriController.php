<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Galeri;
use Illuminate\Http\Request;
use Session;
use Image;
use App\Kategori;

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
    {   $kategori = Kategori::orderBy('nama','asc')->get();
        return view('galeri.create',compact('kategori'));
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
        $file = $request->file('file');
        if(isset($file))
        {
            $filename =$file->getClientOriginalName();
            Image::make($file)->save(public_path('/images/gallery/' . $filename));
        }
        if(isset($filename)){
            $gallery = new Galeri(array(
                'kategori_id' => $kategori_id,
                'nama' => $filename,
                'mime' => $file->getClientMimeType(),
                'path' => '/images/gallery/' . $filename,
                'size' => $file->getClientSize(),
            ));
            $gallery->save();
        }

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
