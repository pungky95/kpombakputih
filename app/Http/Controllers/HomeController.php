<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pesan;
use App\Galeri;
use App\User;
use Image;
use Alert;
use Auth;

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
        return view('editprofile',array('user' => Auth::user()));
    }
    public function update(Request $request)
    {
        $image = $request->file('image');
        $filename ='/images/gallery/' . time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->fit(200)->save(public_path($filename));
        $user = Auth::user();
        $user->update(array(
            'foto' => $filename,
            'name'=> $request->get('name'),
            'email' => $request->get('email'),
            ));
        $user->save();
        return view('editprofile',array('user' => Auth::user()));
    }
}
