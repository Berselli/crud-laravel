<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $clients = \App\Client::paginate(15);
        //dd($clients);
        return view('client.index', compact('clients'));
    }

    public function add(){
        return view('client.add');
    }
}
