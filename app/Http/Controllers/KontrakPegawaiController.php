<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontrakPegawaiController extends Controller
{
    public function index()
{
    $pegawai = \App\Models\Pegawai::all();

    return view('pegawai.index', compact('pegawai'));
}

}
