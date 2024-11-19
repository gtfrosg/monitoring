<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index(){
        return view('status.index',[
            'status' => Status::all()
        ]);
    }
}
