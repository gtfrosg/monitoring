<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class LetrasController extends Controller
{
    
    public function index(){
        return view('letras.letras');
        }



public function show(){

    $mesa1_equipamento1 = Status::where('equipamento_id',1)
                                ->orderByDesc('created_at')->first();

return view('letras', [
    'mesa1_equipamento1' => $mesa1_equipamento1,

]);

}
}