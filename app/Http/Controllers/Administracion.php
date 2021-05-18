<?php

namespace App\Http\Controllers;

use App\Audio;
use App\Models\Iglesia;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class Administracion extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $iglesias=Iglesia::latest()->paginate(10);
        $data = array(
            'iglesias' => $iglesias
        );
        return view('administracion.index',$data);
    }

     public function videos()
     {
        $data = array(
            'videos'=>Video::latest()->paginate(10)
        );
         return view('administracion.videos',$data);
     }
     public function audios()
     {
        $data = array(
            'audios'=>Audio::latest()->paginate(10)
        );
         return view('administracion.audios',$data);
     }

    public function crear()
    {
        return view('iglesias.crear');
    }

    public function guardarAudios(Request $request)
    {
        $audio=new Audio();
        $path = Storage::putFile('public/audios', $request->file('url'));
        $audio->url=$path;
        $audio->titulo=$request->titulo;
        $audio->tipo=$request->tipo;
        $audio->save();
        return redirect()->route('administracionaudios');
    }
    public function actualizarAudio(Request $request)
    {
        $audio=Audio::find($request->id);
        if ($request->hasFile('url')) {
            Storage::delete($audio->url);
            $path = Storage::putFile('public/audios', $request->file('url'));
            $audio->url=$path;
        }
        $audio->titulo=$request->titulo;
        $audio->tipo=$request->tipo;
        $audio->save();
        return redirect()->route('administracionaudios');
    }
    public function eliminarAudios($id)
    {
        $audio=Audio::find($id);
        Storage::delete($audio->url);
        $audio->delete();
        return redirect()->route('administracionaudios');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'titulo'=>'required|unique:iglesias',
            
        ]);
        $i=new Iglesia();
        $i->foto_principal='';
        $i->titulo=$request->titulo;
        $i->detalle=$request->detalle;
        $i->foto_secundario='';
        $i->foto_fondo='';
        $i->slug=Str::slug(Str::slug($request->titulo, '-'));
        $i->tipo=$request->tipo;
        $i->save();

        if ($request->hasFile('foto_principal')) {
            
                $extension = $request->foto_principal->extension();
                Storage::delete($i->foto_principal);
                $path = Storage::putFileAs(
                    'public/iglesias', $request->file('foto_principal'), $i->slug.'_f_p_'.$i->id.'.'.$extension
                );
                $i->foto_principal=$path;
                $i->save();
            
        }

        if ($request->hasFile('foto_secundario')) {
            
                $extension = $request->foto_secundario->extension();
                Storage::delete($i->foto_secundario);
                $path_s = Storage::putFileAs(
                    'public/iglesias', $request->file('foto_secundario'), $i->slug.'_f_s_'.$i->id.'.'.$extension
                );
                $i->foto_secundario=$path_s;
                $i->save();
            
        }

        if ($request->hasFile('foto_fondo')) {
            
            $extension = $request->foto_fondo->extension();
            Storage::delete($i->foto_fondo);
            $path_s = Storage::putFileAs(
                'public/iglesias', $request->file('foto_fondo'), $i->slug.'_f_f_'.$i->id.'.'.$extension
            );
            $i->foto_fondo=$path_s;
            $i->save();
        
        }

        

        return redirect()->route('pagina',$request->tipo);

    }

    public function editar($id)
    {
        $i=Iglesia::find($id);
        $data = array('iglesia' => $i );
        return view('iglesias.editar',$data);
    }

    public function actualizar(Request $request)
    {
        $request->validate([
            'titulo'=>'required|unique:iglesias,id,'.$request->id,
            
        ]);
        $i= Iglesia::find($request->id);
        $i->tipo=$request->tipo;
        $i->titulo=$request->titulo;
        $i->detalle=$request->detalle;
        $i->slug=Str::slug(Str::slug($request->titulo, '-'));
        
        $i->save();

        if ($request->hasFile('foto_principal')) {
            
                $extension = $request->foto_principal->extension();
                Storage::delete($i->foto_principal);
                $path = Storage::putFileAs(
                    'public/iglesias', $request->file('foto_principal'), $i->slug.'_f_p_'.$i->id.'.'.$extension
                );
                $i->foto_principal=$path;
                $i->save();
            
        }

        if ($request->hasFile('foto_secundario')) {
            
                $extension = $request->foto_secundario->extension();
                Storage::delete($i->foto_secundario);
                $path_s = Storage::putFileAs(
                    'public/iglesias', $request->file('foto_secundario'), $i->slug.'_f_s_'.$i->id.'.'.$extension
                );
                $i->foto_secundario=$path_s;
                $i->save();
            
        }

        if ($request->hasFile('foto_fondo')) {
            
            $extension = $request->foto_fondo->extension();
            Storage::delete($i->foto_fondo);
            $path_s = Storage::putFileAs(
                'public/iglesias', $request->file('foto_fondo'), $i->slug.'_f_f_'.$i->id.'.'.$extension
            );
            $i->foto_fondo=$path_s;
            $i->save();
        
        }

        return redirect()->route('pagina',$i->tipo);
    }

    public function eliminar($idI)
    {
        $i=Iglesia::findOrFail($idI);
        try {
            $i->delete();
            Storage::delete($i->foto_fondo);
            Storage::delete($i->foto_secundario);
            Storage::delete($i->foto_principal);
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect()->route('pagina',$i->tipo);
    }
}
