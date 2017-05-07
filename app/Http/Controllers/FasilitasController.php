<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use App\Galeri;
use App\User;
use App\Fasilita;
use App\Testimoni;
use Illuminate\Http\Request;
use Session;

class FasilitasController extends Controller
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
        $fasilitas = Fasilita::paginate(25);

        return view('fasilitas.index', compact('fasilitas'));
    }

    public function services()
    {
        $fasilitas = Fasilita::join('galeris','galeris.fasilitas_id','=','fasilitas.id')
        ->select('fasilitas.id as id','fasilitas.nama','keterangan','path','fasilitas.created_at as created_at')->paginate(8);
        $testimoni = Testimoni::paginate(3);

        return view('fasilitas.services', compact('fasilitas','testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        return view('fasilitas.create',compact('fasilitas'));
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
        
        Fasilita::create($requestData);
        $fasilitas = Fasilita::max('id');
        $file = $request->file('file');
        if(isset($file))
        {
            $filename = $file->getClientOriginalName();
            Image::make($file)->save(public_path('/images/gallery/' . $filename));

        }
        if(isset($filename)){
            $gallery = new Galeri(array(
                'kategori_id' => '4',
                'fasilitas_id' => $fasilitas,
                'nama' => $filename,
                'mime' => $file->getClientMimeType(),
                'path' => '/images/gallery/' . $filename,
                'size' => $file->getClientSize(),
            ));
            $gallery->save();
        }

        Session::flash('flash_message', 'Fasilitas added!');

        return redirect('fasilitas');
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
        $fasilita = Fasilita::findOrFail($id);

        return view('fasilitas.show', compact('fasilita'));
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
        $fasilitas = Fasilita::findOrFail($id);
        $galeri = Galeri::where('fasilitas_id','=',$id)->get();

        return view('fasilitas.edit', compact('fasilitas','galeri'));
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
        
        $fasilita = Fasilita::findOrFail($id);
        $fasilita->update($requestData);
        $file = $request->file('file');
        if(isset($file))
        {
            $filename = $file->getClientOriginalName();
            Image::make($file)->save(public_path('/images/gallery/' . $filename));

        }
        if(isset($filename)){
            $gallery = new Galeri(array(
                'kategori_id' => '10',
                'fasilitas_id' => $id,
                'nama' => $filename,
                'mime' => $file->getClientMimeType(),
                'path' => '/images/gallery/' . $filename,
                'size' => $file->getClientSize(),
            ));
            $gallery->save();
        }

        Session::flash('flash_message', 'Fasilita updated!');

        return redirect('fasilitas');
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
        $galeri = Galeri::select('id')->where('fasilitas_id','=',$id)->get();
        Galeri::destroy($galeri);
        
        Fasilita::destroy($id);

        Session::flash('flash_message', 'Fasilita deleted!');

        return redirect('fasilitas');
    }
    public function destroygaleri($id,Request $request){
        Galeri::destroy($id);
        $fasilitas_id = $request->get('fasilitas');
        Session::flash('flash_message', 'Fasilita deleted!');

        return redirect()->back();
    }
}
