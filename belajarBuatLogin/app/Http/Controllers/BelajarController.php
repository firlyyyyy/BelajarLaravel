<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class BelajarController extends Controller
{
    public function enkripsi()
    {
        $encrypted = Crypt::encryptString('belajar laravel');
        $decrypted = Crypt::decryptString($encrypted);

        echo 'hasil enkripsi : ' . $encrypted;
        echo '<br>';
        echo '<br>';
        echo 'hasil dekripsi : ' . $decrypted;
    }

    public function data()
    {
        $parameter = [
            'nama' => 'Muhammad Firly Al Faridzi',
            'sekolah' => 'SMKTI AIRLANGGA SAMARINDA'
        ];
        $enkripsi = Crypt::encrypt($parameter);
        echo "<a href='" . url('/data/' . $enkripsi) . "'>Klik</a>";
    }

    public function data_proses($data)
    {
        $data = Crypt::decrypt($data);

        echo 'Nama : ' . $data['nama'];
        echo '<br>';
        echo 'sekolah : ' . $data['sekolah'];
    }

    public function hash()
    {
        $hash_password = Hash::make('halo123');
        echo $hash_password;
    }
}
