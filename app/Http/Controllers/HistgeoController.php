<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class HistgeoController extends Controller
{
    public function index(){
        
        $mesa1_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa1_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        $mesa2_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa2_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        $mesa3_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa3_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        $mesa4_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa4_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        $mesa5_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa5_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa5_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa5_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa5_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa5_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        $mesa6_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa6_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        $mesa7_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa7_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa7_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa7_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa7_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa7_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        $mesa8_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa8_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa8_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa8_equipamento4  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa8_equipamento5  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa8_equipamento6  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        $mesa9_equipamento1  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa9_equipamento2  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();
        $mesa9_equipamento3  = Status::where('equipamento_id',1)->orderByDesc('created_at')->first();

        return view('histgeo.histgeo', [
        'mesa1_equipamento1' => $mesa1_equipamento1,
        'mesa1_equipamento2' => $mesa1_equipamento2,

        'mesa2_equipamento1' => $mesa2_equipamento1,
        'mesa2_equipamento2' => $mesa2_equipamento2,
        'mesa2_equipamento3' => $mesa2_equipamento3,
        'mesa2_equipamento4' => $mesa2_equipamento4,
        'mesa2_equipamento5' => $mesa2_equipamento5,
        'mesa2_equipamento6' => $mesa2_equipamento6,

        'mesa3_equipamento1' => $mesa3_equipamento1,
        'mesa3_equipamento2' => $mesa3_equipamento2,
        'mesa3_equipamento3' => $mesa3_equipamento3,
        'mesa3_equipamento4' => $mesa3_equipamento4,
        'mesa3_equipamento5' => $mesa3_equipamento5,
        'mesa3_equipamento6' => $mesa3_equipamento6,

        'mesa4_equipamento1' => $mesa4_equipamento1,
        'mesa4_equipamento2' => $mesa4_equipamento2,
        'mesa4_equipamento3' => $mesa4_equipamento3,
        'mesa4_equipamento4' => $mesa4_equipamento4,
        'mesa4_equipamento5' => $mesa4_equipamento5,
        'mesa4_equipamento6' => $mesa4_equipamento6,

        'mesa5_equipamento1' => $mesa5_equipamento1,
        'mesa5_equipamento2' => $mesa5_equipamento2,
        'mesa5_equipamento3' => $mesa5_equipamento3,
        'mesa5_equipamento4' => $mesa5_equipamento4,
        'mesa5_equipamento5' => $mesa5_equipamento5,
        'mesa5_equipamento6' => $mesa5_equipamento6,

        'mesa6_equipamento1' => $mesa6_equipamento1,
        'mesa6_equipamento2' => $mesa6_equipamento2,

        'mesa7_equipamento1' => $mesa7_equipamento1,
        'mesa7_equipamento2' => $mesa7_equipamento2,
        'mesa7_equipamento3' => $mesa7_equipamento3,
        'mesa7_equipamento4' => $mesa7_equipamento4,
        'mesa7_equipamento5' => $mesa7_equipamento5,
        'mesa7_equipamento6' => $mesa7_equipamento6,

        'mesa8_equipamento1' => $mesa8_equipamento1,
        'mesa8_equipamento2' => $mesa8_equipamento2,
        'mesa8_equipamento3' => $mesa8_equipamento3,
        'mesa8_equipamento4' => $mesa8_equipamento4,
        'mesa8_equipamento5' => $mesa8_equipamento5,
        'mesa8_equipamento6' => $mesa8_equipamento6,

        'mesa9_equipamento1' => $mesa9_equipamento1,
        'mesa9_equipamento2' => $mesa9_equipamento2,
        'mesa9_equipamento3' => $mesa9_equipamento3,

        ]);

        

    }
}