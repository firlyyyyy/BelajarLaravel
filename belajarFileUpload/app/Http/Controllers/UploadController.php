<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    public function upload()
    {
        $gambar = Gambar::get();
        return view('upload', ['gambar' => $gambar]);
    }

    public function upload_proses(Request $request)
    {
        $request->validate([
            'file' => 'required|file|image|mimes:png,jpg',
            'keterangan' => 'required'
        ]);

        $file = $request->file('file');

        $nama_file = time() . '_' . $file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        $data = Gambar::findOrFail($id);

        $filePath = public_path('data_file/' . $data->file);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $data->delete();

        return redirect()->back()->with('success', 'file berhasil dihapus');
    }
}
