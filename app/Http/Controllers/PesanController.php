<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pesan;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Bungalow;
use App\Bungalow_Galeri;
use App\Bungalow_Fasilita;
use Illuminate\Cookie\CookieJar;
use App\Http\Requests\StorePesanRequest;
use App\Bungalow_Pesan;

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
    public function pesan(Request $request){
        if($request->get('tgl_masuk') && $request->get('tgl_keluar') && $request->get('bungalow_id')){
            $tgl_masuk = $request->get('tgl_masuk');
            $tgl_keluar = $request->get('tgl_keluar');
            $bungalow_id = $request->get('bungalow_id');
            $adults = $request->get('adults');
            $children = $request->get('children');      
        }
        return view('pesan.reservation',compact('tgl_masuk','tgl_keluar','bungalow_id','adults','children'));
    }
    public function showbungalow($id)
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
    public function checkdate()
    {
        return view('pesan.choose_date');
    }
    public function checkbungalow(StorePesanRequest $request)
    {
        $tgl_masuk = strtotime($request->get('tgl_masuk'));
        $tgl_masuk = date('Y/m/d',$tgl_masuk);
        $tgl_keluar = strtotime($request->get('tgl_keluar'));
        $tgl_keluar = date('Y/m/d',$tgl_keluar);
        if($request->get('adults') || $request->get('children')){
            $adults = $request->get('adults');
            $children = $request->get('children');
            $room = ($adults/2)+($children/2);
        }
        $check = DB::table('pesans')->where('tgl_masuk','>=',$tgl_masuk)->where('tgl_keluar','<=',$tgl_keluar)->get();
        if($check->count()>0)
        {
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
            $bungalow_galeris = DB::table('bungalows')->join('bungalow_galeris','bungalows.id','=','bungalow_id')->join('galeris','galeris.id','=','galeri_id')->select('bungalow_id','bungalows.nama as nama','tarif_high','tarif_low','bungalows.keterangan as keterangan','jumlah_kamar','galeris.path')->WhereIn('galeri_id',$arrid)->Where('jumlah_kamar','>=',$room)->get();
        }
        else if($check->count()<=0){
            $bungalow = DB::table('bungalow_galeris')->select('bungalow_id','galeri_id')->get();
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
            $bungalow_galeris = DB::table('bungalows')->join('bungalow_galeris','bungalows.id','=','bungalow_id')->join('galeris','galeris.id','=','galeri_id')->select('bungalow_id','bungalows.nama as nama','tarif_high','tarif_low','bungalows.keterangan as keterangan','jumlah_kamar','galeris.path')->WhereIn('galeri_id',$arrid)->Where('jumlah_kamar','>=',$room)->get();
        }
        
        return view('pesan.choose_bungalow',compact('bungalow_galeris','tgl_masuk','tgl_keluar','adults','children'));
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

        $bungalow_id = $request->get('bungalow_id');
        $pesan_id = Pesan::max('id');

        $bungalow_pesan = new Bungalow_Pesan(array(
                'bungalow_id' => $bungalow_id,
                'pesan_id' => $pesan_id,
            ));
        $bungalow_pesan->save();

        Session::flash('flash_message', 'Pesan added!');
        $pesan_id = Pesan::max('id');
        return redirect()->action(
        'PesanController@invoice', ['id' => $pesan_id]
);
    }
    public function invoice($id){

        $pesan = DB::select(DB::raw("SELECT p.id, p.nama_pemesan, p.tgl_masuk, p.tgl_keluar, p.jumlah_dewasa, p.jumlah_anak,p.permintaan_khusus,p.no_telepon,p.email, b.nama, b.tarif_low,b.tarif_high,b.jumlah_kamar 
                                     FROM bungalow_pesans s, bungalows b, pesans p WHERE s.pesan_id=p.id and s.bungalow_id = b.id and p.id = ".$id));
        return view('pesan.invoice',compact('pesan'));
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
        $deleted=Bungalow_Pesan::where('pesan_id',$id)->delete();

        Session::flash('flash_message', 'Pesan deleted!');

        return redirect('pesan');
    }
}
