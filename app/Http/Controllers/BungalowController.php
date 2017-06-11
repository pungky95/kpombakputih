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
use App\Http\Requests\StoreBungalowRequest;

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

    public function storephoto(Request $request){
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
    }
    public function bungalows(){
        $bungalow = DB::table('bungalow_galeris')->select('bungalow_id','galeri_id')->groupby('bungalow_id','galeri_id')->get();
        $arrgaleri = array();
        $i=0;
        foreach ($bungalow as $items){
            $arrgaleri[$i]['bungalow_id'] = $items->bungalow_id;
            $arrgaleri[$i]['galeri_id'] = $items->galeri_id;
            $i++;
        }
        function unique_multidim_array($array, $key) { 
            $temp_array = array(); 
            $i = 0; 
            $key_array = array(); 
            foreach($array as $val) { 
                if (!in_array($val[$key], $key_array)) { 
                    $key_array[$i] = $val[$key]; 
                    array_push($temp_array,$val);
                } 
            $i++; 
            } 
            return $temp_array; 
        } 
        $arrgaleri = unique_multidim_array($arrgaleri,'bungalow_id');
        $arrid = array(); 
        for($i=0;$i<sizeof($arrgaleri);$i++){
            array_push($arrid,$arrgaleri[$i]['galeri_id']);
        }
        $bungalow_galeris = DB::table('bungalows')->join('bungalow_galeris','bungalows.id','=','bungalow_id')->join('galeris','galeris.id','=','galeri_id')->select('bungalow_id','bungalows.nama as nama','tarif_high','tarif_low','bungalows.keterangan as keterangan','jumlah_kamar','galeris.path')->WhereIn('galeri_id',$arrid)->get();
        return view('bungalow.bungalows', compact('bungalow_galeris'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreBungalowRequest $request)
    {   
    
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
        $galeri = Bungalow_Galeri::Where('bungalow_id',$id)->get();
        $fasilitas = Bungalow_Fasilita::Where('Bungalow_id',$id)->get();
        $galeri_id = array();
        $fasilitas_id = array();
        foreach ($galeri as $items){
            array_push($galeri_id,$items->galeri_id);
        }
        foreach ($fasilitas as $items){
            array_push($fasilitas_id,$items->fasilitas_id);
        }
        $galeri = Galeri::whereIn('id',$galeri_id)->first();
        $fasilitas = Fasilita::whereIn('id',$fasilitas_id)->get();

        return view('bungalow.show', compact('bungalow','galeri','fasilitas'));
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
        $bungalow_galeri = Bungalow_Galeri::where('bungalow_id',$id)->get();
        $arrgaleri = array();
        foreach ($bungalow_galeri as $items){
            array_push($arrgaleri,$items->galeri_id);
        }
        $galeri = Galeri::WhereIn('id',$arrgaleri)->get();
        $fasilitas = Fasilita::orderBy('nama','asc')->get();
        $bungalow_fasilitas = DB::table('bungalow_fasilitas')->select('fasilitas_id')->where('bungalow_id',$id)->get();
        return view('bungalow.edit', compact('bungalow','fasilitas','bungalow_fasilitas','galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, StoreBungalowRequest $request)
    {
        $bungalow = Bungalow::findOrFail($id);
               
        if($request->get('nama')){
        $bungalow->update(
            [   'nama' => $request->get('nama'),
                'tarif_low' => $request->get('tarif_low'),
                'tarif_high' => $request->get('tarif_high'),
                'keterangan' => $request->get('keterangan'),
                'jumlah_kamar' => $request->get('jumlah_kamar'),
            ]
            );

        $bungalow_galeri = Bungalow_Galeri::WhereNull('bungalow_id')->update(['bungalow_id'=>$id]);
        $deleted_row = Bungalow_Fasilita::Where('bungalow_id',$id)->delete();
        if($request->get('fasilitas')){
                $facilities = $request->get('fasilitas');
                for ($i=0; $i < sizeof($facilities); $i++) { 
                    $fasilitas_id = DB::table('fasilitas')->select('id')->where('nama',$facilities[$i])->first();
                    $bungalow_fasilitas = new Bungalow_Fasilita(array(
                    'bungalow_id' => $id,
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
