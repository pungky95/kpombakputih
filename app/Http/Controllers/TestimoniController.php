<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Testimoni;
use App\Http\Requests\StoreTestimoniRequest;
use Illuminate\Http\Request;
use Session;

class TestimoniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'index','show','edit','update','destroy']);
    }    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $testimoni = Testimoni::paginate(5);
        return view('testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreTestimoniRequest $request)
    {
        
        $requestData = $request->all();
        
        Testimoni::create($requestData);

        Session::flash('testimoni', 'Testimoni added!');
        Alert::success('Your Testimoni Sent','Sent')->persistent('OK');
        return redirect('/');
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
        $testimoni = Testimoni::findOrFail($id);

        return view('testimoni.show', compact('testimoni'));
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
        $testimoni = Testimoni::findOrFail($id);

        return view('testimoni.edit', compact('testimoni'));
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
        
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->update($requestData);
        
        Session::flash('flash_message', 'Testimoni updated!');

        return redirect('testimoni');
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
        Testimoni::destroy($id);

        Session::flash('flash_message', 'Testimoni deleted!');

        return redirect('testimoni');
    }
}
