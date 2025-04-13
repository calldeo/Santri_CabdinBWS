<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MGMP;
use Illuminate\Support\Facades\Storage;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class MGMPController extends Controller
{
    public function MGMP(Request $request)
    {

        $users = MGMP::paginate(10);

       
        // Meneruskan data ke tampilan
        return view('mgmp.mgmp', compact('users'));
    }
public function destroy($id)
{
    try {
        $mutasi = MGMP::findOrFail($id);

        // Hapus file yang tersimpan (jika ada)
        if ($mutasi->file_draft) {
            \Storage::disk('public')->delete($mutasi->file_draft);
        }

        // Hapus data dari database
        $mutasi->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
    }
}



    public function add_Mgmp()
    {
       
        // Meneruskan data ke tampilan
        return view('mgmp.add_mgmp');
    }


public function store(Request $request)
{
    $request->validate([
        'nip' => 'required|string|max:25', 
        'file_draft' => 'nullable|mimes:pdf,jpg,png|max:2048',
    
    ]);

    $data = [];

    if ($request->hasFile('file_draft')) {
        $data['file_draft'] = $request->file('file_draft')->store('MGMP', 'public');
    }
 

    $data['no_mutasi'] = $request->id_sk;
    $data['nip'] = $request->nip; 
    $data['status'] = 'proses'; 

     $mutasi = MGMP::create($data);
    return redirect('/MGMP')->with('success', 'MGMP berhasil ditambahkan dengan ID: ' . $mutasi->id_sk);
}





     public function edit($id)
    {
        $mutasi = MGMP::findOrFail($id);
        return view('mgmp.edit_mgmp', compact('mutasi'));
    }


    public function update(Request $request, $id)
    {
        $mutasi = MGMP::findOrFail($id);

        $request->validate([
            'nip' => 'required|string|max:25', 
            'file_draft' => 'nullable|mimes:pdf,jpg,png|max:2048',
            'status' => 'required|in:proses,selesai,gagal',
        ]);

        // Hapus file lama jika ada file baru yang diunggah
        if ($request->hasFile('file_draft')) {
            Storage::disk('public')->delete($mutasi->file_draft);
            $mutasi->file_draft = $request->file('file_draft')->store('MGMP', 'public');
        }


        // Update status
        $mutasi->nip = $request->nip;
        $mutasi->status = $request->status;
        $mutasi->save();

        return redirect('/mgmp')->with('update_success', 'Data Berhasil Diperbarui!');
    }

  public function ldgMgmp(){
        $mgmp = MGMP::paginate(10);
     return view('mgmp.ldg-mgmp',compact('mgmp'));
  }

     public function add_LdgMGMP()
    {
        return view('mgmp.add_ldg-mgmp');
    }


}