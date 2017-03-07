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
    public function profile(){
        
    }
    public function editprofile()
    {
        $user = Auth::user()->id;
        return view('editprofile',compact('user'));
    }
    public function update(Request $request,$id){

        $image = $request->file('image');
        $filename ='/images/gallery/' . time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path($filename));
        $user = User::findOrFail($id);
        $user->update(array(
            'name'=> $request->get('name'),
            'email' => $request->get('email'),
            'foto'=> $filename,
            ));
        $user->save();
        return redirect('editprofile');
    }
}
