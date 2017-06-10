<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;
use App\Fasilita;
use App\Http\Requests;
use DB;
use App\Blog;
use App\Bungalow;
use App\Bungalow_Galeri;
use App\Galeri;

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
        $fasilitas = Fasilita::join('galeris','fasilitas.id','=','galeris.fasilitas_id')->
        select('fasilitas.nama as nama','keterangan','galeris.path')->paginate(4);
        $whyus = Fasilita::join('galeris','fasilitas.id','=','galeris.fasilitas_id')
        ->select('fasilitas.id as id','fasilitas.nama as nama','path','keterangan')->whereIn('fasilitas.id',[18,7,19])->get();
        $blog = Blog::join('galeris', 'blogs.id', '=', 'galeris.blog_id')
        ->select('blogs.id','blogs.kategori_id','blogs.nama','konten','path','blogs.created_at')->orderBy('blogs.created_at','desc')->paginate(5);
        return view('home', compact('testimoni','blog','fasilitas','whyus','bungalow_galeris'));
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
