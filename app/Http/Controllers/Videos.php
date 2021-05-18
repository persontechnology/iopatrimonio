<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class Videos extends Controller
{
    public function index($tipo)
    {
        
        $video_ultimo=Video::where('tipo',$tipo)->latest()->first();
        $videos=Video::where('tipo',$tipo)->where('id','!=',$video_ultimo->id)->get();
        $data = array('videos' => $videos,'ultimoVideo'=>$video_ultimo );

        return view('videos.index',$data);
    }

    public function guardar(Request $request)
    {
        $v=new Video();
        $v->url=$request->url;
        $v->titulo=$request->titulo;
        $v->tipo=$request->tipo;
        $v->save();
        return redirect()->route('administracion');
    }

    public function eliminar(Request $request,$idVi)
    {
        $vi=Video::findOrFail($idVi);
        $vi->delete();
        return redirect()->route('administracion');
    }

    public function actualizar(Request $request)
    {
        $v=Video::findOrFail($request->id);
        $v->url=$request->url;
        $v->titulo=$request->titulo;
        $v->tipo=$request->tipo;
        $v->save();
        return redirect()->route('administracion');
    }
    
}
