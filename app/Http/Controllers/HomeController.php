<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pesan;
use App\Galeri;
use Image;
use Alert;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Pesan::count();
        return view('admin',compact('pesan'));
    }
    public function editprofile()
    {
        return view('editprofile');
    }
    public function store(Request $request){

        $image = $request->file('image');
        $filename ='/images/gallery/' . time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path($filename));
        $kategori = $request->get('kategori');
        $galeri = new Galeri(array(
                'foto'=>$filename,
                'kategori'=>$kategori,
        ));
        $galeri->save();
        return redirect('editprofile');
    }
}
