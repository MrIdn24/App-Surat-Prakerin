<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class SuratController extends Controller
{
    public function datasurat()
    {
        $surat = surat::all();
        return view('admin.data-prakerin.datasurat', compact('surat'));
    }

    public function tambahsurat()
    {
        return view('admin.data-prakerin.tambahsurat');
    }

    public function storesurat(Request $request)
    {
        surat::create($request->all());
        return redirect()->route('admin.data-prakerin.datasurat');
    }

    public function editsurat($id)
    {
        $surat = surat::find($id);
        return view('admin.data-prakerin.editsurat', compact('surat'));
    }

    public function updatesurat(Request $request,$id)
    {
        surat::find($id)->update($request->all());
        return redirect()->route('admin.data-prakerin.datasurat');
    }

    public function hapussurat($id)
    {
        surat::destroy($id);
        return redirect()->route('admin.data-prakerin.datasurat');
    }
}
