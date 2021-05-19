<?php

namespace App\Http\Controllers;

use App\Audio;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Videos extends Controller
{
    public function index($tipo)
    {
        
        $videos=Video::where('tipo',$tipo)->get();
        $videos_s = array();
        foreach ($videos as $video) {
            $ex=explode('/',$video->url);
           if(isset($ex[3])){
               array_push($videos_s,$ex[3]);
           }
        }
        return view('videos.index',['videos'=>$videos_s]);
    }

    public function audios($tipo)
    {
        return view('videos.audios',['tipo'=>$tipo]);
    }

    public function escucharAudios($tipo)
    {
        $audios=Audio::where('tipo',$tipo)->get();
     
        $sonidos=[];
        foreach ($audios as $ax) {
            for ($i=0; $i <30 ; $i++) { 
                array_push($sonidos,['title'=>$ax->titulo,'file'=>'','howl'=>null,'extension'=>url('/').Storage::url($ax->url)]);
            }
                
            
        }
        return view('videos.escucharAudios',['audios'=>$sonidos,'tipo'=>$tipo]);
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
