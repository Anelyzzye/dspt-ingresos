<?php

namespace App\Http\Controllers;

use App\Aviso;
use Illuminate\Http\Request;
use App\Http\Requests\AvisoStoreRequest;
use App\Http\Requests\AvisoUpdateRequest;


class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $titulo = $request['titulo'];
        $avisos = Aviso::select(['id','aviso_titulo'])
                ->where('aviso_titulo', 'LIKE', '%'.$titulo.'%')
                ->latest('updated_at')
                ->paginate(5);
        return view('admin.consultaraviso',['titulo' => $titulo] ,compact('avisos'));
    }
    public function publicado()
    {

            $avisos = Aviso::orderBy('id','DESC')->paginate(3);
            return view('web.inicio', compact('avisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altaviso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AvisoStoreRequest $request)
    {
        if($request->hasFile('aviso_image'))
        {
            $file = $request->file('aviso_image');
            $ruta = public_path().'/imagesAviso';
            $name = time().$file->getClientOriginalName();
            $file->move($ruta, $name);            
        }

        $aviso = new Aviso();
        $aviso->aviso_titulo = $request->input('aviso_titulo');
        $aviso->aviso_link = $request->input('aviso_link');
        $aviso->aviso_image = $name;
        $aviso->save();
        return redirect()->route("avisos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function show(Aviso $aviso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aviso = Aviso::findOrFail($id);
        return view('admin.editaraviso', compact("aviso"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function update(AvisoUpdateRequest $request, $id)
    {
        $aviso = Aviso::find($id);
        if($request->hasFile('aviso_image'))
        {
            $file = $request->file('aviso_image');
            $ruta = public_path().'/imagesAviso';
            $name = time().$file->getClientOriginalName();
            $file->move($ruta, $name);            
        }

      
        $aviso->aviso_titulo = $request->input('aviso_titulo');
        $aviso->aviso_link = $request->input('aviso_link');
        $aviso->aviso_image = $name;
        $aviso->save();
        return redirect()->route("avisos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avisos = Aviso::find($id);
        $avisos->delete();
        return redirect()->route("avisos.index");
    }
}
