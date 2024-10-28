<?php

namespace App\Http\Controllers;

use App\Mail\BelajarKirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        Mail::to('testing@email.com')->send(new BelajarKirimEmail());

        return 'email telah dikirim';
    }
}
