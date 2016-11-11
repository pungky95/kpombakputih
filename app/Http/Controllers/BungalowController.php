<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bungalow;
use Illuminate\Http\Request;
use Session;

class BungalowController extends Controller
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
        $bungalow = Bungalow::paginate(25);

        return view('bungalow.index', compact('bungalow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bungalow.create');
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
        
        Bungalow::create($requestData);

        Session::flash('flash_message', 'Bungalow added!');

        return redirect('bungalow');
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
        $bungalow = Bungalow::findOrFail($id);

        return view('bungalow.show', compact('bungalow'));
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
        $bungalow = Bungalow::findOrFail($id);

        return view('bungalow.edit', compact('bungalow'));
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
        
        $bungalow = Bungalow::findOrFail($id);
        $bungalow->update($requestData);

        Session::flash('flash_message', 'Bungalow updated!');

        return redirect('bungalow');
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
        Bungalow::destroy($id);

        Session::flash('flash_message', 'Bungalow deleted!');

        return redirect('bungalow');
    }
}
