<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IjinOps;
use Illuminate\Support\Facades\Storage;

class IjinController extends Controller
{
    public function index()
    {
   
        $users = IjinOps::paginate(10);

       
        
        return view('ijin-operasi.ijin-ops', compact('users'));
    }

    public function create()
    {
        return view('ijin-operasi.add_ijin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_pengajuan' => 'nullable|mimes:pdf,jpg,png|max:2048',
        ]);

        $data = [];
        if ($request->hasFile('file_pengajuan')) {
            $data['file_pengajuan'] = $request->file('file_pengajuan')->store('ijin', 'public');
        }

        $data['tracking'] = 'Pengajuan'; // default status
      
        $mutasi = IjinOps::create($data);
    return redirect('/ijin-operasional')->with('success', 'Ijin Operasi berhasil ditambahkan dengan ID: ' . $mutasi->id_ijin);
    }

    public function edit($id)
    {
        $ijin = IjinOps::findOrFail($id);
        return view('ijin-operasi.edit_ijin', compact('ijin'));
    }

    public function update(Request $request, $id)
    {
        $ijin = IjinOps::findOrFail($id);

        $request->validate([
            'file_pengajuan' => 'nullable|mimes:pdf,jpg,png|max:2048',
            'tracking' => 'required|in:pengajuan,validasi,selesai,gagal']);

        if ($request->hasFile('file_pengajuan')) {
            Storage::disk('public')->delete($ijin->file_pengajuan);
            $ijin->file_pengajuan = $request->file('file_pengajuan')->store('ijin', 'public');
        }

        $ijin->tracking = $request->tracking;
        $ijin->save();

        return redirect('/ijin-operasi')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        try {
            $ijin = IjinOps::findOrFail($id);

            if ($ijin->file_pengajuan) {
                Storage::disk('public')->delete($ijin->file_pengajuan);
            }

            $ijin->delete();

            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
        }
    }

    
  public function ldgIjin(){
        $ijin = IjinOps::paginate(10);
     return view('ijin-operasi.ldg-ijin-ops',compact('ijin'));
  }

   public function add_LdgIjin()
    {
        return view('ijin-operasi.add_ldg-ijin');
    }
}
