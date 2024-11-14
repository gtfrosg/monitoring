<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{

    public function store(Request $request){
        $status = new  Status;
        $status->hostname = $request->hostname;
        $status->ip = $request->ip;
        $status->username = $request->username;
        $status->login_at = $request->login_at;
	$status->teclado = $request->teclado;
	$status->mouse = $request->mouse;
	$status->monitor = $request->monitor;
        $status->save();
        return response()->json(["ok" => true, "status" => $status], 201);
    }
}
