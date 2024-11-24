<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        return view('status.index',[
            'status' => Status::all()
        ]);
    }

    public function update($equipamento_id)
    {
	dd('você chegou no update do StatusController');
//	$equipamento_id = $request->equipamento_id;
	return redirect('/equipamentos/index');

    }
}
