<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakilKurikulumController extends Controller
{
    public function index()
    {
        return view('wakilkurikulum.dashboard');
    }
}