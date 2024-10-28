<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index($nama)
    {
        if ($nama == 'firly') {
            return abort(403, 'anda tidak memiliki akses karena anda superman');
        } elseif ($nama == 'dinda') {
            return 'halo, ' . $nama;
        } else {
            return abort(404);
        }
    }
}
