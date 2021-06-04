<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.rank');
    }
    public function groupe($id)
    {
        $idz = $id;
        return view('pages.showGroupe', compact('idz'));
    }
}