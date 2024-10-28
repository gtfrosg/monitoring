<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function Store_status(){
	$status = new  Status;
	$status->hostname = $request->hostname;
	$status->ip = $request->ip;
	$status->username = $request->username;
	$status->login_at = $request->login_at;
	$status->save();
	return view('status_loaded');
    }
}
