<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function datalapor()
    {
        $lapor = Laporan::all();
        return view('admin.data-prakerin.rekap-laporan', compact('lapor'));
    }
    public function tambahlapor()
    {
        return view('admin.data-prakerin.tambah-lapor');
    }
    public function storelapor(Request $request)
    {
        $request->validate([
            "tanggal" => "required",
            "tempat" => "required",
            "jenis" => "required",
            "waktu" => "required",
        ]);

        Laporan::create($request->all());
        return redirect()->route('admin.data-prakerin.rekap-lapor')->with('notif', 'Berhasil menambah data');
    }

    public function editlapor($id)
    {
        $lapor = Laporan::find($id);
        return view('admin.data-prakerin.edit-lapor', compact('lapor'));
    }

    public function updatelapor(Request $request, $id)
    {
        $request->validate([
            "tanggal" => "required",
            "tempat" => "required",
            "jenis" => "required",
            "waktu" => "required",
        ]);
        Laporan::find($id)->update($request->all());
        return redirect()->route('admin.data-prakerin.rekap-lapor')->with('notif', 'Berhasil mengedit data');
    }

    public function deletelapor($id)
    {
        Laporan::destroy($id);
        return redirect()->route('admin.data-prakerin.rekap-lapor')->with('notif', 'Berhasil menghapus data');
    }
}
