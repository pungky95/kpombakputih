<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pesan;
use Illuminate\Http\Request;
use Session;
use DB;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pesan = Pesan::paginate(25);

        return view('pesan.index', compact('pesan'));
    }

    public function check(Request $request)
    {
        $tgl_masuk = strtotime($request->get('tgl_masuk'));
        $tgl_masuk = date('Y/m/d',$tgl_masuk);
        $tgl_keluar = strtotime($request->get('tgl_keluar'));
        $tgl_keluar = date('Y/m/d',$tgl_keluar);
        $check = DB::table('pesans')->where('tgl_masuk','>=',$tgl_masuk)->where('tgl_keluar','<=',$tgl_keluar)->get();
        $pesan_id = array();
        foreach($check as $items){
            array_push($pesan_id,$items->id);
        }
        $check_bungalow = DB::table('bungalow_pesans')->where('pesan_id',$pesan_id)->get();
        $bungalow_id = array();
        foreach($check_bungalow as $items){
            array_push($bungalow_id,$items->bungalow_id);
        }
        $bungalow = DB::table('bungalow_galeris')->select('bungalow_id','galeri_id')->whereNotIn('bungalow_id',$bungalow_id)->get();
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
        return view('pesan.available_bungalow',compact('bungalow_galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pesan.create');
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
        
        Pesan::create($requestData);

        Session::flash('flash_message', 'Pesan added!');

        return redirect('pesan');
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
        $pesan = Pesan::findOrFail($id);
        return view('pesan.show', compact('pesan'));
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
        $pesan = Pesan::findOrFail($id);

        return view('pesan.edit', compact('pesan'));
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
        
        $pesan = Pesan::findOrFail($id);
        $pesan->update($requestData);

        Session::flash('flash_message', 'Pesan updated!');

        return redirect('pesan');
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
        Pesan::destroy($id);

        Session::flash('flash_message', 'Pesan deleted!');

        return redirect('pesan');
    }
}
