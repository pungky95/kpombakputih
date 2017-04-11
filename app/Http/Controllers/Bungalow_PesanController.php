<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bungalow_Pesan;
use Illuminate\Http\Request;
use Session;

class Bungalow_PesanController extends Controller
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
        $bungalow_pesan = Bungalow_Pesan::paginate(25);

        return view('bungalow_pesan.index', compact('bungalow_pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bungalow_pesan.create');
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
        
        Bungalow_Pesan::create($requestData);

        Session::flash('flash_message', 'Bungalow_Pesan added!');

        return redirect('bungalow_pesan');
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
        $bungalow_pesan = Bungalow_Pesan::findOrFail($id);

        return view('bungalow_pesan.show', compact('bungalow_pesan'));
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
        $bungalow_pesan = Bungalow_Pesan::findOrFail($id);

        return view('bungalow_pesan.edit', compact('bungalow_pesan'));
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
        
        $bungalow_pesan = Bungalow_Pesan::findOrFail($id);
        $bungalow_pesan->update($requestData);

        Session::flash('flash_message', 'Bungalow_Pesan updated!');

        return redirect('bungalow_pesan');
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
        Bungalow_Pesan::destroy($id);

        Session::flash('flash_message', 'Bungalow_Pesan deleted!');

        return redirect('bungalow_pesan');
    }
}
