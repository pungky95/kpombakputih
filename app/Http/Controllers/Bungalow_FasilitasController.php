<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bungalow_Fasilita;
use Illuminate\Http\Request;
use Session;

class Bungalow_FasilitasController extends Controller
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
        $bungalow_fasilitas = Bungalow_Fasilita::paginate(25);

        return view('bungalow_fasilitas.index', compact('bungalow_fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bungalow_fasilitas.create');
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
        
        Bungalow_Fasilita::create($requestData);

        Session::flash('flash_message', 'Bungalow_Fasilita added!');

        return redirect('bungalow_fasilitas');
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
        $bungalow_fasilita = Bungalow_Fasilita::findOrFail($id);

        return view('bungalow_fasilitas.show', compact('bungalow_fasilita'));
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
        $bungalow_fasilita = Bungalow_Fasilita::findOrFail($id);

        return view('bungalow_fasilitas.edit', compact('bungalow_fasilita'));
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
        
        $bungalow_fasilita = Bungalow_Fasilita::findOrFail($id);
        $bungalow_fasilita->update($requestData);

        Session::flash('flash_message', 'Bungalow_Fasilita updated!');

        return redirect('bungalow_fasilitas');
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
        Bungalow_Fasilita::destroy($id);

        Session::flash('flash_message', 'Bungalow_Fasilita deleted!');

        return redirect('bungalow_fasilitas');
    }
}
