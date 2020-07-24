<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\EventoStoreRequest;
use App\Http\Requests\EventoUpdateRequest;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $titulo = $request['titulo'];
        $eventos = Evento::select(['id','evento_titulo'])
                ->where('evento_titulo', 'LIKE', '%'.$titulo.'%')
                ->latest('updated_at')
                ->paginate(5);
        return view('admin.consultarevento',['titulo' => $titulo] ,compact('eventos'));
    }

    public function publicado()
    {

            $noticias = Evento::orderBy('id','DESC')->paginate(3);
            return view('web.noticias', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altaevento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoStoreRequest $request)
    {
        if($request->hasFile('evento_image'))
        {
            $file = $request->file('evento_image');
            $namesimage = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagesEvento/', $namesimage);
            
        }
        $evento = new Evento();
        $evento->evento_titulo = $request->input('evento_titulo');
        $evento->evento_texto = $request->input('evento_texto');
        $evento->evento_fecha = $request->input('evento_fecha');
        $evento->evento_image = $namesimage;
        $evento->save();
        return redirect()->route("eventos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventus = Evento::find($id);
        return view('web.detallenoticias', compact('eventus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $evento = Evento::findOrFail($id);
        return view('admin.editarevento', compact("evento"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(EventoUpdateRequest $request, $id)
    {
        $evento = Evento::find($id);
         if($request->hasFile('evento_image'))
        {
            $file = $request->file('evento_image');
            $namesimage = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagesEvento/', $namesimage);
            
        }
       
        $evento->evento_titulo = $request->input('evento_titulo');
        $evento->evento_texto = $request->input('evento_texto');
        $evento->evento_fecha = $request->input('evento_fecha');
        $evento->evento_image = $namesimage;
        $evento->save();
        return redirect()->route("eventos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminado = Evento::find($id);
        $eliminado->delete();
        return redirect()->route("eventos.index");
    }
}
