<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class ConsultaController extends Controller
{
    public function index(){
        return view('index',[
            'status' => Status::all()
        ]);
    }
}
