<?php

namespace App\Http\Controllers;

use App\citzien;
use Illuminate\Http\Request;
use App\Http\Controllers\id;

class CitzienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citzien = citzien::all();
        

        // return view('show')->with('citzien',$citzien);
        return view('index', compact('citzien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        // return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'citzien_fullname' => 'required',
            'citzien_address' => 'required',
            'citzien_gender' => 'required'
        ]);

        citzien::create($request->all());

        return redirect()->route('citziens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\citzien  $citzien
     * @return \Illuminate\Http\Response
     */
    public function show(citzien $citzien)
    {
        // return view('show', compact('citzien'));
        // return view('show',['citzien'=>$citzien]);

        $citzien = citzien::where('id', $citzien->id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\citzien  $citzien
     * @return \Illuminate\Http\Response
     */
    public function edit(citzien $citzien)
    {
        // $citzien=citzien::findOrFail($id);
        return view('edit', compact('citzien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\citzien  $citzien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, citzien $citzien)
    {
        $request->validate([

            'citzien_fullname' =>

            'required',
            'citzien_address' => 'required',
            'citzien_gender'    => 'required'
        ]);
        $citzien->update($request->all());

        return redirect()->route('citziens.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\citzien  $citzien
     * @return \Illuminate\Http\Response
     */
    public function
    destroy(citzien $citzien)
    {
        // $citzien = Citzien::findOrFail($id);
        $citzien->delete();

        return redirect()->route('citziens.index');
    }
}
