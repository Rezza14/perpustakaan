<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    private Siswa $model;

    public function __construct() {
            $this->model = new Siswa();
    }

    public function index()
    {
        $data = [
            'siswa' => $this->model->get()
        ];
        return view ('siswa.index', $data);
    }

    public function show(Siswa $siswa)
    {
        $data = [
            'siswa' => $siswa
        ];
        return view('siswa.show', $data);
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data Deleted Successfully !!');
    }
}
