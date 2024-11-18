<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class TesteController extends Controller
{
    public function index()
{
	return view('teste', [
	    'status' => $status
	]);
}
}
