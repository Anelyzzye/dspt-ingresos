<?php

namespace App\Http\Controllers;

use App\Ciudadano;
use Illuminate\Http\Request;
use App\Http\Requests\CiudadanoStoreRequest;
use App\Http\Requests\CiudadanoUpdateRequest;

class CiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admin = $request['admin'];
        $ciudadano = Ciudadano::select(['id','nombres','apellidopat','apellidomat','email'])
                ->where('nombres', 'LIKE', '%'.$admin.'%')
                ->orderBy('updated_at', 'DESC')
                ->paginate(5);
        return view('admin.consultarusuario',['admin' => $admin] ,compact('ciudadano')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altaciudadano');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadanoStoreRequest $request)
    {
        $ciudadano = new Ciudadano();
        $ciudadano->nombres = $request->input("nombres");
        $ciudadano->apellidopat = $request->input("apellidopat");
        $ciudadano->apellidomat = $request->input("apellidomat");
        $ciudadano->email = $request->input("email");
        $ciudadano->password = $request->input("password");
        $ciudadano->tipociudadanos_id = $request->input("tipociudadanos_id");
        $ciudadano->created_at = now()->toDateString();
        $ciudadano->updated_at = now()->toDateString();
        $ciudadano->save();
        return redirect()->route("ciudadano.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudadano $ciudadano)
    {
     //  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ciudadanos = Ciudadano::findOrFail($id);
        return view('admin.editarciudadano', compact("ciudadanos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function update(CiudadanoUpdateRequest $request, $id)
    {
        $ciudadano = Ciudadano::find($id);
        $ciudadano->nombres = $request->input("nombres");
        $ciudadano->apellidopat = $request->input("apellidopat");
        $ciudadano->apellidomat = $request->input("apellidomat");
        $ciudadano->email = $request->input("email");
        $ciudadano->password = $request->input("password");
        $ciudadano->tipociudadanos_id = $request->input("tipociudadanos_id");
        $ciudadano->created_at = now()->toDateString();
        $ciudadano->updated_at = now()->toDateString();
        $ciudadano->save();
        return redirect()->route("ciudadano.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudadano $ciudadano)
    {
        //
    }
}
