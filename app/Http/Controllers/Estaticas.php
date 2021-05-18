<?php

namespace App\Http\Controllers;

use App\Models\Iglesia;
use Illuminate\Http\Request;

class Estaticas extends Controller
{
    public function arquitecturaReligiosa($tipo)
    {
        $data = array('iglesias' => Iglesia::where('tipo',$tipo)->get(),'tipo'=>$tipo);
        return view('estaticas.arquitecturaReligiosa',$data);
    }

    

    public function detalleIglesia($slug)
    {
        $i=Iglesia::where('slug',$slug)->first();
        $data = array('iglesia' => $i,'iglesias' => Iglesia::where('tipo',$i->tipo)->get(),'tipo'=>$i->tipo);
        return view('iglesias.detalle',$data);
    }
}
