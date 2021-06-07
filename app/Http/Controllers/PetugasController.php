<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    public function datapetugas()
    {
        $petugas = petugas::all();
        return view('admin.data-sekolah.datapetugas', compact('petugas'));
    }

    public function tambahpetugas()
    {
        return view('admin.data-sekolah.tambahpetugas');
    }

    public function storepetugas(Request $request)
    {
        petugas::create($request->all());
        return redirect()->route('admin.data-sekolah.datapetugas');
    }

    public function editpetugas($id)
    {
        $petugas = petugas::find($id);
        return view('admin.data-sekolah.editpetugas', compact('petugas'));
    }

    public function updatepetugas(Request $request,$id)
    {
        petugas::find($id)->update($request->all());
        return redirect()->route('admin.data-sekolah.datapetugas');
    }

    public function hapuspetugas($id)
    {
        petugas::destroy($id);
        return redirect()->route('admin.data-sekolah.datapetugas');
    }
}