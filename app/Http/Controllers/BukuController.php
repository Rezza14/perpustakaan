<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    private Buku $model;

    public function __construct() {
        $this->model = new Buku();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'buku' => $this->model->get()
        ];
        return view ('buku.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->file('cover')->store('coverbuku');

        $validatedData = $request->validate([
            'judul' => 'required|unique:buku',
            'nama_penerbit' => 'required',
            'tahun_terbit' => 'required|min:4|max:4',
            'pengarang' => 'required',
            'bahasa' => 'required',
            'jumlah_halaman' => 'required|min:2|max:255',
            'stok_buku' => 'required|min:1|max:255',
        ]);

        $this->model->create($data);
        return redirect()->route('buku.index')->with('success', 'Data saved successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        if(!$this->model->find($buku)) {
            abort(404);
        }
        $data = [
            'buku' => $buku
        ];
        return view('buku.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        $data = [
            'buku' => $buku
        ];
        return view('buku.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {

        $request->validate([
            'judul' => 'required',
            'nama_penerbit' => 'required',
            'tahun_terbit' => 'required|min:4|max:4',
            'pengarang' => 'required',
            'bahasa' => 'required',
            'jumlah_halaman' => 'required|min:2|max:255',
            'stok_buku' => 'required|min:1|max:255',
        ]);

        $data = [
            'judul' => Request()->judul,
            'nama_penerbit' => Request()->nama_penerbit,
            'tahun_terbit' => Request()->tahun_terbit,
            'pengarang' => Request()->pengarang,
            'bahasa' => Request()->bahasa,
            'jumlah_halaman' => Request()->jumlah_halaman,
            'stok_buku' => Request()->stok_buku
        ];


        $this->model->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Data updated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data deleted successfully !!');
    }
}
