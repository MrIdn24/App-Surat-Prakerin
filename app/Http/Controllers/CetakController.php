<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $ns = $request->nosu;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
        $nosu = "/048" . "/" . $ns . "/SMK.TB" . "/" . Auth::user()->role . '/' . date('Y');

        $dtUpload = new Cetak;
        $dtUpload->nama = $request->nama;
        $dtUpload->no_surat = $nosu;
        $dtUpload->lampiran = $namafile;
        $dtUpload->keterangan = $request->keterangan;

        $nm->move(public_path() . '/img', $namafile);
        $dtUpload->save();

        $lastInsertId = $dtUpload->id;
        return redirect()->route('siswa.pdf', ['id' => $lastInsertId])->with('notif', 'Data berhasil ditambah');
    }

    public function cetakpdf($id)
    {

        $surat = Cetak::find($id);
        $no = Cetak::all()->count();

        // return view('siswa.pdf', compact('surat', 'no'));

        // file yang di tampilkan
        $html = view('siswa.pdf', compact('surat', 'no'));
        // start dompdf
        $dompdf = new Dompdf();
        // load html
        $dompdf->loadhtml($html);
        // set paper
        $dompdf->setPaper('A4', 'landscape');
        // convert html ke pdf
        $dompdf->render();
        // untuk membuka file pdf
        // $dompdf->output(['isRemoteEnabled' => true]);
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isRemoteEnabled', TRUE);
        $options->set('debugKeepTemp', TRUE);
        $options->set('isHtml5ParserEnabled', TRUE);
        $options->set('chroot', '/');
        $options->setIsRemoteEnabled(true);
        $dompdf->setOptions($options);
        $dompdf->stream();
    }
}
