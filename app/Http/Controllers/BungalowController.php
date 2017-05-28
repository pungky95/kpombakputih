<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fasilita;
use Image;
use App\Bungalow;
use App\Bungalow_Fasilita;
use App\Bungalow_Galeri;
use App\Bungalow_Pesan;
use App\Galeri;
use Illuminate\Http\Request;
use Session;
use DB;
use Validator;

class BungalowController extends Controller
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
        $bungalow = Bungalow::paginate(25);

        return view('bungalow.index', compact('bungalow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $fasilitas = Fasilita::orderBy('nama','asc')->get();
        return view('bungalow.create',compact('fasilitas'));
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
        $messages = [
            'nama.required' => 'The Name field is required',
            'nama.max' => 'The Name may not be greater than 25 characters.',
            'nama.min' => 'The Name may not be lesser than 3 characters',
            'tarif_low.required' => 'The Low Season Price field is required',
            'tarif_high.required' => 'The High Season Price field is required',
            'keterangan.required' => 'The Description field is required',
            'keterangan.max' => 'The Description may not be greater than 2000 characters',
            'keterangan.min' => 'The Description may not be lesser than 10 characters',
            'fasilitas.required' => 'The facilities field is required, at least choose min one',
            'jumlah_kamar.required' => 'The Rooms field is required', 
        ];

        Validator::make($request->all(), [
            'nama' => 'required|max:25|min:3',
            'tarif_high' => 'required',
            'tarif_low' => 'required',
            'keterangan' => 'required|max:2000|min:10',
            'fasilitas' => 'required',
            'jumlah_kamar' => 'required',
        ],$messages)->validate();


        $file = $request->file('file');
        if(isset($file))
        {
            $filename = $file->getClientOriginalName();
            Image::make($file)->save(public_path('/images/gallery/' . $filename));
            $gallery = new Galeri(array(
                'kategori_id' => 7,
                'nama' => $filename,
                'mime' => $file->getClientMimeType(),
                'path' => '/images/gallery/' . $filename,
                'size' => $file->getClientSize(),
            ));
            $gallery->save();
            $bungalow_galeri = new Bungalow_Galeri(array(
                'galeri_id' => Galeri::max('id'),
            ));
            $bungalow_galeri->save();
        }
        if($request->get('nama')){
            $facilities = $request->get('fasilitas');
            $bungalow = new Bungalow(array(
                'nama' => $request->get('nama'),
                'tarif_low' => $request->get('tarif_low'),
                'tarif_high' => $request->get('tarif_high'),
                'keterangan' => $request->get('keterangan'),
                'jumlah_kamar' => $request->get('jumlah_kamar'),
            ));
            $bungalow->save();        

            $bungalow_galeri = Bungalow_Galeri::WhereNull('bungalow_id')->update(['bungalow_id'=>Bungalow::max('id')]);

            if($request->get('fasilitas')){
                $facilities = $request->get('fasilitas');
                for ($i=0; $i < sizeof($facilities); $i++) { 
                    $fasilitas_id = DB::table('fasilitas')->select('id')->where('nama',$facilities[$i])->first();
                    $bungalow_fasilitas = new Bungalow_Fasilita(array(
                    'bungalow_id' => Bungalow::max('id'),
                    'fasilitas_id' => $fasilitas_id->id,
                    ));
                    $bungalow_fasilitas->save();
                }
            }
        }
        // if($request->hasFile('images'))
        // {
        //     $files = $request->file('images');
        //     foreach($files as $file){
        //         $filename =$file->getClientOriginalName();
        //         Image::make($file)->save(public_path('/images/gallery/' . $filename));
        //         $gallery = new Galeri(array(
        //         'kategori_id' => 7,
        //         'nama' => $filename,
        //         'mime' => $file->getClientMimeType(),
        //         'path' => '/images/gallery/' . $filename,
        //         'size' => $file->getClientSize(),
        //         ));
        //         $gallery->save();
        //         $bungalow_galeri = new Bungalow_Galeri(array(
        //         'bungalow_id' => Bungalow::max('id'),
        //         'galeri_id' => Galeri::max('id'),
        //         ));
        //         $bungalow_galeri->save(); 
        //     }
        // }
        Session::flash('flash_message', 'Bungalow added!');

        return redirect('bungalow');
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
        $bungalow = Bungalow::findOrFail($id);

        return view('bungalow.show', compact('bungalow'));
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
        $bungalow = Bungalow::findOrFail($id);
        $fasilitas = Fasilita::orderBy('nama','asc')->get();
        $bungalow_fasilitas = DB::table('bungalow_fasilitas')->select('fasilitas_id')->where('bungalow_id',$id)->get();
        return view('bungalow.edit', compact('bungalow','fasilitas','bungalow_fasilitas'));
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
         $messages = [
            'nama.required' => 'The Name field is required',
            'nama.max' => 'The Name may not be greater than 25 characters.',
            'nama.min' => 'The Name may not be lesser than 3 characters',
            'tarif_low.required' => 'The Low Season Price field is required',
            'tarif_high.required' => 'The High Season Price field is required',
            'keterangan.required' => 'The Description field is required',
            'keterangan.max' => 'The Description may not be greater than 2000 characters',
            'keterangan.min' => 'The Description may not be lesser than 10 characters',
            'fasilitas.required' => 'The facilities field is required, at least choose min one',
        ];

        Validator::make($request->all(), [
            'nama' => 'required|max:25|min:3',
            'tarif_high' => 'required',
            'tarif_low' => 'required',
            'keterangan' => 'required|max:2000|min:10',
            'fasilitas' => 'required',
            'file' => 'required',
        ],$messages)->validate();
        
        $bungalow = Bungalow::findOrFail($id);
        $file = $request->file('file');
        if(isset($file))
        {
            $filename = $file->getClientOriginalName();
            Image::make($file)->save(public_path('/images/gallery/' . $filename));
            $gallery = new Galeri(array(
                'kategori_id' => 7,
                'nama' => $filename,
                'mime' => $file->getClientMimeType(),
                'path' => '/images/gallery/' . $filename,
                'size' => $file->getClientSize(),
            ));
            $gallery->save();
            $bungalow_galeri = new Bungalow_Galeri(array(
                'galeri_id' => Galeri::max('id'),
            ));
            $bungalow_galeri->save();
        }
        
        if($request->get('nama')){
        $bungalow->update(
            [   'nama' => $request->get('nama'),
                'tarif_low' => $request->get('tarif_low'),
                'tarif_high' => $request->get('tarif_high'),
                'keterangan' => $request->get('keterangan'),
                'jumlah_kamar' => $request->get('jumlah_kamar'),
            ]
            );
        $bungalow_galeri = Bungalow_Galeri::WhereNull('bungalow_id')->update(['bungalow_id'=>Bungalow::max('id')]);

        if($request->get('fasilitas')){
                $facilities = $request->get('fasilitas');
                for ($i=0; $i < sizeof($facilities); $i++) { 
                    $fasilitas_id = DB::table('fasilitas')->select('id')->where('nama',$facilities[$i])->first();
                    $bungalow_fasilitas = new Bungalow_Fasilita(array(
                    'bungalow_id' => Bungalow::max('id'),
                    'fasilitas_id' => $fasilitas_id->id,
                    ));
                    $bungalow_fasilitas->save();
                }
            }
        }
        Session::flash('flash_message', 'Bungalow updated!');

        return redirect('bungalow');
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
        Bungalow::destroy($id);

        Session::flash('flash_message', 'Bungalow deleted!');

        return redirect('bungalow');
    }
}
