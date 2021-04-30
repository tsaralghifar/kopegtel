<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LokasiJaringanRequest;
use App\Models\Lokasi;
use Barryvdh\DomPDF\Facade as PDF;

class LokasiJaringanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('pages.lokasi.index')->with([
            'lokasi' => $lokasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LokasiJaringanRequest $request)
    {
        Lokasi::create($request->validated());

        return redirect(route('lokasi'));
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
        $lokasi =  Lokasi::findOrFail($id);
        return view('pages.lokasi.edit')->with([
            'lokasi' => $lokasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LokasiJaringanRequest $request, $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->update($request->validated());

        return redirect()->route('lokasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->delete();

        return redirect()->route('lokasi');
    }
}
