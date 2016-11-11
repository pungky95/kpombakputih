<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bungalow_Galeri;
use Illuminate\Http\Request;
use Session;

class Bungalow_GaleriController extends Controller
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
        $bungalow_galeri = Bungalow_Galeri::paginate(25);

        return view('bungalow_galeri.index', compact('bungalow_galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bungalow_galeri.create');
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
        
        Bungalow_Galeri::create($requestData);

        Session::flash('flash_message', 'Bungalow_Galeri added!');

        return redirect('bungalow_galeri');
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
        $bungalow_galeri = Bungalow_Galeri::findOrFail($id);

        return view('bungalow_galeri.show', compact('bungalow_galeri'));
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
        $bungalow_galeri = Bungalow_Galeri::findOrFail($id);

        return view('bungalow_galeri.edit', compact('bungalow_galeri'));
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
        
        $bungalow_galeri = Bungalow_Galeri::findOrFail($id);
        $bungalow_galeri->update($requestData);

        Session::flash('flash_message', 'Bungalow_Galeri updated!');

        return redirect('bungalow_galeri');
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
        Bungalow_Galeri::destroy($id);

        Session::flash('flash_message', 'Bungalow_Galeri deleted!');

        return redirect('bungalow_galeri');
    }
}
