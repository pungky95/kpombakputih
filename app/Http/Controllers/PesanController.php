<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pesan;
use Illuminate\Http\Request;
use Session;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => 'index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pesan = Pesan::paginate(25);

        return view('pesan.index', compact('pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pesan.create');
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
        
        Pesan::create($requestData);

        Session::flash('flash_message', 'Pesan added!');

        return redirect('pesan');
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
        $pesan = Pesan::findOrFail($id);
        return view('pesan.show', compact('pesan'));
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
        $pesan = Pesan::findOrFail($id);

        return view('pesan.edit', compact('pesan'));
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
        
        $pesan = Pesan::findOrFail($id);
        $pesan->update($requestData);

        Session::flash('flash_message', 'Pesan updated!');

        return redirect('pesan');
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
        Pesan::destroy($id);

        Session::flash('flash_message', 'Pesan deleted!');

        return redirect('pesan');
    }
}
