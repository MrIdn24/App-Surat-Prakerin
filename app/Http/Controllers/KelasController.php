<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function datakelas()
    {
        $kelas = kelas::all();
        return view('admin.data-sekolah.datakelas', compact('kelas'));
    }

    public function tambahkelas()
    {
        return view('admin.data-sekolah.tambahkelas');
    }

    public function store(Request $request)
    {
        kelas::create($request->all());
        return redirect()->route('admin.data-sekolah.datakelas');
    }

    public function editkelas($id)
    {
        $kelas = kelas::find($id);
        return view('admin.data-sekolah.editkelas', compact('kelas'));
    }

    public function update(Request $request,$id)
    {
        kelas::find($id)->update($request->all());
        return redirect()->route('admin.data-sekolah.datakelas');
    }

    public function hapuskelas($id)
    {
        kelas::destroy($id);
        return redirect()->route('admin.data-sekolah.datakelas');
    }
}
