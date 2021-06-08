<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class CetakController extends Controller
{
    public function createcetak()
    {
        return view('siswa.cetak');
    }

    public function storecetak(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nosu' => 'required',
            'lampiran' => 'required',
            'keterangan' => 'required',
        ]);

        $nm = $request->lampiran;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        $dtUpload = new Cetak;
        $dtUpload->nama = $request->nama;
        $dtUpload->no_surat = $request->nosu;
        $dtUpload->lampiran = $namafile;
        $dtUpload->keterangan = $request->keterangan;

        $nm->move(public_path() . '/img', $namafile);
        $dtUpload->save();

        return redirect()->route('siswa.pdf')->with('notif', 'Data berhasil ditambah');
    }

    public function showpdf()
    {
        $surat = Cetak::all();

        // return view('siswa.pdf', compact('surat'));
        $html = view('siswa.pdf', compact('surat'));

        $dompdf = new Dompdf();
        $dompdf->loadhtml($html);

        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();

        $dompdf->stream();
    }
}
