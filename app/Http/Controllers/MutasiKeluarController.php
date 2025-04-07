<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiKeluar;
use Illuminate\Support\Facades\Storage;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class MutasiKeluarController extends Controller
{
    public function mutasiKeluar(Request $request)
    {

        $users = MutasiKeluar::paginate(10);

       
        // Meneruskan data ke tampilan
        return view('halaman.mutasi-keluar', compact('users'));
    }
 public function destroy($id)
    {
        try {
            $mutasi = MutasiKeluar::findOrFail($id);

            // Hapus file yang tersimpan (jika ada)
            if ($mutasi->file_skk) {
                \Storage::delete($mutasi->file_skk);
            }
            if ($mutasi->file_nisn) {
                \Storage::delete($mutasi->file_nisn);
            }
            if ($mutasi->file_raport) {
                \Storage::delete($mutasi->file_raport);
            }
            if ($mutasi->file_skm) {
                \Storage::delete($mutasi->file_skm);
            }

            // Hapus data dari database
            $mutasi->delete();

         return redirect()->back()->with('success', 'Data berhasil dihapus!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data!');
    }
    }



    public function add_MutasiKeluar()
    {
       
        // Meneruskan data ke tampilan
        return view('tambah.add_mutasi-keluar');
    }


public function store(Request $request)
{
    $request->validate([
        'file_skk' => 'nullable|mimes:pdf,jpg,png|max:2048',
        'file_nisn' => 'nullable|mimes:pdf,jpg,png|max:2048',
        'file_raport' => 'nullable|mimes:pdf,jpg,png|max:2048',
        'file_skm' => 'nullable|mimes:pdf,jpg,png|max:2048',
    ]);

    $data = [];

    if ($request->hasFile('file_skk')) {
        $data['file_skk'] = $request->file('file_skk')->store('mutasi_keluar', 'public');
    }
    if ($request->hasFile('file_nisn')) {
        $data['file_nisn'] = $request->file('file_nisn')->store('mutasi_keluar', 'public');
    }
    if ($request->hasFile('file_raport')) {
        $data['file_raport'] = $request->file('file_raport')->store('mutasi_keluar', 'public');
    }
    if ($request->hasFile('file_skm')) {
        $data['file_skm'] = $request->file('file_skm')->store('mutasi_keluar', 'public');
    }

    $data['no_mutasi'] = $request->id_mut_keluar;
    $data['status'] = 'proses'; // Atur status default

    MutasiKeluar::create($data);

    return redirect('/mutasi-keluar')->with('success', 'Data Berhasil Ditambahkan');
}





     public function edit($id)
    {
        $mutasi = MutasiKeluar::findOrFail($id);
        return view('edit.edit_mutasi-keluar', compact('mutasi'));
    }


    public function update(Request $request, $id)
    {
        $mutasi = MutasiKeluar::findOrFail($id);

        $request->validate([
            'file_skk' => 'nullable|mimes:pdf,jpg,png|max:2048',
            'file_nisn' => 'nullable|mimes:pdf,jpg,png|max:2048',
            'file_raport' => 'nullable|mimes:pdf,jpg,png|max:2048',
            'file_skm' => 'nullable|mimes:pdf,jpg,png|max:2048',
            'status' => 'required|in:proses,selesai,gagal',
        ]);

        // Hapus file lama jika ada file baru yang diunggah
        if ($request->hasFile('file_skk')) {
            Storage::disk('public')->delete($mutasi->file_skk);
            $mutasi->file_skk = $request->file('file_skk')->store('mutasi_keluar', 'public');
        }

        if ($request->hasFile('file_nisn')) {
            Storage::disk('public')->delete($mutasi->file_nisn);
            $mutasi->file_nisn = $request->file('file_nisn')->store('mutasi_keluar', 'public');
        }

        if ($request->hasFile('file_raport')) {
            Storage::disk('public')->delete($mutasi->file_raport);
            $mutasi->file_raport = $request->file('file_raport')->store('mutasi_keluar', 'public');
        }

        if ($request->hasFile('file_skm')) {
            Storage::disk('public')->delete($mutasi->file_skm);
            $mutasi->file_skm = $request->file('file_skm')->store('mutasi_keluar', 'public');
        }

        // Update status
        $mutasi->status = $request->status;
        $mutasi->save();

        return redirect('/mutasi-keluar')->with('update_success', 'Data Berhasil Diperbarui!');
    }




}