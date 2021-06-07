<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function datasiswa()
    {
        $siswa = siswa::all();
        return view('admin.data-sekolah.datasiswa', compact('siswa'));
    }

    public function tambahsiswa()
    {
        return view('admin.data-sekolah.tambahsiswa');
    }

    public function storesiswa(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "kelas" => "required",
            "jk" => "required",
        ]);

        siswa::create($request->all());
        return redirect()->route('admin.data-sekolah.datasiswa')->with('notif', 'Berhasil menambah siswa');
    }

    public function editsiswa($id)
    {
        $siswa = siswa::find($id);
        return view('admin.data-sekolah.editsiswa', compact('siswa'));
    }

    public function updatesiswa(Request $request, $id)
    {
        $request->validate([
            "nama" => "required",
            "kelas" => "required",
            "jk" => "required",
        ]);

        siswa::find($id)->update($request->all());
        return redirect()->route('admin.data-sekolah.datasiswa');
    }

    public function hapussiswa($id)
    {
        siswa::destroy($id);
        return redirect()->route('admin.data-sekolah.datasiswa')->with('notif', 'Berhasil menghapus siswa');
    }
}
