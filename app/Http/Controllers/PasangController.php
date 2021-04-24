<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasang;
use App\Models\Layanan;
use App\Http\Requests\PasangRequest;
use Barryvdh\DomPDF\Facade as PDF;

class PasangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasang = Pasang::all();
        return view('pages.pasang.index')->with([
            'pasang' => $pasang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $layanan = Layanan::all();
        return view('pages.pasang.create', compact('layanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasangRequest $request)
    {
        Pasang::create($request->validated());

        return redirect()->route('pasang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $layanan = Layanan::all();
        $pasang =  Pasang::findOrFail($id);
        return view('pages.pasang.edit')->with([
            'pasang' => $pasang,
            'layanan' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PasangRequest $request, $id)
    {
        $pasang = Pasang::findOrFail($id);
        $pasang->update($request->validated());

        return redirect()->route('pasang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasang = Pasang::findOrFail($id);
        $pasang->delete();

        return redirect()->route('pasang');
    }
}
