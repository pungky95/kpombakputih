<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Kontak;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\StoreKontakRequest;

class KontakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'index','show','edit','update','destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $kontak = Kontak::paginate(25);

        return view('kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreKontakRequest $request)
    {
        $requestData = $request->all();
        Kontak::create($requestData);

        Alert::success('Your Message Sent','Sent')->persistent('Ok');
        return redirect('kontak/create');
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
        $kontak = Kontak::findOrFail($id);

        return view('kontak.show', compact('kontak'));
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
        $kontak = Kontak::findOrFail($id);

        return view('kontak.edit', compact('kontak'));
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
        
        $kontak = Kontak::findOrFail($id);
        $kontak->update($requestData);

        Session::flash('flash_message', 'Kontak updated!');

        return redirect('kontak');
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
        Kontak::destroy($id);

        Session::flash('flash_message', 'Kontak deleted!');

        return redirect('kontak');
    }
}
