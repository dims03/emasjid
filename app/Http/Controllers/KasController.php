<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Http\Requests\StoreKasRequest;
use App\Http\Requests\UpdateKasRequest;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kas = Kas::latest()->paginate(10);
        return view('kas_index', [
            'title' => 'Data Kas',
        ], compact('kas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kas = new Kas();

        return view('kas_form', [
            'title' => 'Form Kas'
        ], compact('kas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKasRequest $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kategori' => 'nullable',
            'keterangan' => 'required',
            'jenis' => 'required|in:masuk,keluar',
            'jumlah' => 'required|numeric',
        ]);

        $kas = Kas::create($request->all());
        $kas->saldo_akhir = $this->calculateSaldoAkhir($kas->tanggal);
        $kas->save();

        return redirect()->route('kas_index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kas $kas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kas $kas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKasRequest $request, Kas $kas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kas $kas)
    {
        //
    }
}
