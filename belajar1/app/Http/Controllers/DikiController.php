<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Hadiah;
use Illuminate\Http\Request;

class DikiController extends Controller
{
    public function index()
    {
        $anggota = Anggota::get();
        return view('anggota', ['anggota' => $anggota]);
    }
}
