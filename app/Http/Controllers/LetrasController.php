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
    
    $mesa1_equipamento2 = Status::where('equipamento_id',2)
                                ->orderByDesc('created_at')->first();

    $mesa1_equipamento3 = Status::where('equipamento_id',3)
                                ->orderByDesc('created_at')->first();

    $mesa1_equipamento4 = Status::where('equipamento_id',4)
                                ->orderByDesc('created_at')->first();

    $mesa1_equipamento5 = Status::where('equipamento_id',5)
                                ->orderByDesc('created_at')->first();

    $mesa1_equipamento6 = Status::where('equipamento_id',6)
                                ->orderByDesc('created_at')->first();

    $mesa1_equipamento7 = Status::where('equipamento_id',7)
                                ->orderByDesc('created_at')->first();

    $mesa1_equipamento8 = Status::where('equipamento_id',8)
                                ->orderByDesc('created_at')->first();

    $mesa2_equipamento9 = Status::where('equipamento_id',9)
                                ->orderByDesc('created_at')->first();
                                
    $mesa2_equipamento10 = Status::where('equipamento_id',10)
                                ->orderByDesc('created_at')->first();

    $mesa2_equipamento11 = Status::where('equipamento_id',11)
                                ->orderByDesc('created_at')->first();

    $mesa2_equipamento12 = Status::where('equipamento_id',12)
                                ->orderByDesc('created_at')->first();

    $mesa2_equipamento13 = Status::where('equipamento_id',13)
                                ->orderByDesc('created_at')->first();

    $mesa2_equipamento14 = Status::where('equipamento_id',14)
                                ->orderByDesc('created_at')->first();

    $mesa2_equipamento15 = Status::where('equipamento_id',15)
                                ->orderByDesc('created_at')->first();

    $mesa2_equipamento16 = Status::where('equipamento_id',16)
                                ->orderByDesc('created_at')->first();

    $mesa3_equipamento17 = Status::where('equipamento_id',17)
                                ->orderByDesc('created_at')->first();

    $mesa3_equipamento18 = Status::where('equipamento_id',18)
                                ->orderByDesc('created_at')->first();

    $mesa3_equipamento19 = Status::where('equipamento_id',19)
                                ->orderByDesc('created_at')->first();

    $mesa3_equipamento20 = Status::where('equipamento_id',20)
                                ->orderByDesc('created_at')->first();

    $mesa3_equipamento21 = Status::where('equipamento_id',21)
                                ->orderByDesc('created_at')->first();

    $mesa3_equipamento22 = Status::where('equipamento_id',22)
                                ->orderByDesc('created_at')->first();

    $mesa3_equipamento23 = Status::where('equipamento_id',23)
                                ->orderByDesc('created_at')->first();

    $mesa3_equipamento24 = Status::where('equipamento_id',24)
                                ->orderByDesc('created_at')->first();

    $mesa4_equipamento25 = Status::where('equipamento_id',25)
                                ->orderByDesc('created_at')->first();

    $mesa4_equipamento26 = Status::where('equipamento_id',26)
                                ->orderByDesc('created_at')->first();

    $mesa4_equipamento27 = Status::where('equipamento_id',27)
                                ->orderByDesc('created_at')->first();

    $mesa4_equipamento28 = Status::where('equipamento_id',28)
                                ->orderByDesc('created_at')->first();

    $mesa5_equipamento29 = Status::where('equipamento_id',29)
                                ->orderByDesc('created_at')->first();

    $mesa5_equipamento30 = Status::where('equipamento_id',30)
                                ->orderByDesc('created_at')->first();

    $mesa5_equipamento31 = Status::where('equipamento_id',31)
                                ->orderByDesc('created_at')->first();

    $mesa5_equipamento32 = Status::where('equipamento_id',32)
                                ->orderByDesc('created_at')->first();

    $mesa5_equipamento33 = Status::where('equipamento_id',33)
                                ->orderByDesc('created_at')->first();

    $mesa5_equipamento34 = Status::where('equipamento_id',34)
                                ->orderByDesc('created_at')->first();

    $mesa5_equipamento35 = Status::where('equipamento_id',35)
                                ->orderByDesc('created_at')->first();

    $mesa5_equipamento36 = Status::where('equipamento_id',36)
                                ->orderByDesc('created_at')->first();

    $mesa6_equipamento37 = Status::where('equipamento_id',37)
                                ->orderByDesc('created_at')->first();

    $mesa6_equipamento38 = Status::where('equipamento_id',38)
                                ->orderByDesc('created_at')->first();

    $mesa6_equipamento39 = Status::where('equipamento_id',39)
                                ->orderByDesc('created_at')->first();

    $mesa6_equipamento40 = Status::where('equipamento_id',40)
                                ->orderByDesc('created_at')->first();

    $monitores_equipamento41 = Status::where('equipamento_id',41)
                                ->orderByDesc('created_at')->first();

    $monitores_equipamento42 = Status::where('equipamento_id',42)
                                ->orderByDesc('created_at')->first();

        return view('letras', [
    'mesa1_equipamento1' => $mesa1_equipamento1,
    'mesa1_equipamento2' => $mesa1_equipamento2,
    'mesa1_equipamento3' => $mesa1_equipamento3,
    'mesa1_equipamento4' => $mesa1_equipamento4,
    'mesa1_equipamento5' => $mesa1_equipamento5,
    'mesa1_equipamento6' => $mesa1_equipamento6,
    'mesa1_equipamento7' => $mesa1_equipamento7,
    'mesa1_equipamento8' => $mesa1_equipamento8,

    'mesa2_equipamento9' => $mesa2_equipamento9,
    'mesa2_equipamento10' => $mesa2_equipamento10,
    'mesa2_equipamento11' => $mesa2_equipamento11,
    'mesa2_equipamento12' => $mesa2_equipamento12,
    'mesa2_equipamento13' => $mesa2_equipamento13,
    'mesa2_equipamento14' => $mesa2_equipamento14,
    'mesa2_equipamento15' => $mesa2_equipamento15,
    'mesa2_equipamento16' => $mesa2_equipamento16,

    'mesa3_equipamento17' => $mesa3_equipamento17,
    'mesa3_equipamento18' => $mesa3_equipamento18,
    'mesa3_equipamento19' => $mesa3_equipamento19,
    'mesa3_equipamento20' => $mesa3_equipamento20,
    'mesa3_equipamento21' => $mesa3_equipamento21,
    'mesa3_equipamento22' => $mesa3_equipamento22,
    'mesa3_equipamento23' => $mesa3_equipamento23,
    'mesa3_equipamento24' => $mesa3_equipamento24,

    'mesa4_equipamento25' => $mesa4_equipamento24,
    'mesa4_equipamento26' => $mesa4_equipamento25,
    'mesa4_equipamento27' => $mesa4_equipamento26,
    'mesa4_equipamento28' => $mesa4_equipamento27,

    'mesa5_equipamento29' => $mesa5_equipamento29,
    'mesa5_equipamento30' => $mesa5_equipamento30,
    'mesa5_equipamento31' => $mesa5_equipamento31,
    'mesa5_equipamento32' => $mesa5_equipamento32,
    'mesa5_equipamento33' => $mesa5_equipamento33,
    'mesa5_equipamento34' => $mesa5_equipamento34,
    'mesa5_equipamento35' => $mesa5_equipamento35,
    'mesa5_equipamento36' => $mesa5_equipamento36,

    'mesa6_equipamento37' => $mesa6_equipamento37,
    'mesa6_equipamento38' => $mesa6_equipamento38,
    'mesa6_equipamento39' => $mesa6_equipamento39,
    'mesa6_equipamento40' => $mesa6_equipamento40,

    'monitores_equipamento41' => $monitores_equipamento41,
    'monitores_equipamento42' => $monitores_equipamento42,


]);

}
}