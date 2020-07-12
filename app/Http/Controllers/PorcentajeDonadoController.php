<?php

namespace App\Http\Controllers;

use App\PorcentajeDonado;
use Illuminate\Http\Request;
use App\Http\Requests\PorcentajeStoreRequest;
use App\Http\Requests\PorcentajeUpdateRequest;
class PorcentajeDonadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $porcentaje = $request['porcentaje'];
        $donacion = PorcentajeDonado::select(['id','concepto','porcentaje'])
                ->where('concepto', 'LIKE', '%'.$porcentaje.'%')
                ->latest('updated_at')
                ->paginate(5);
        return view('admin.consultardonacion',['porcentaje' => $porcentaje] ,compact('donacion')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altadonacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PorcentajeStoreRequest $request)
    {
        $donacion = new PorcentajeDonado();
        $donacion->concepto = $request->input("concepto");
        $donacion->porcentaje = $request->input("porcentaje");
        $donacion->save();
        return redirect()->route("donacion.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PorcentajeDonado  $porcentajeDonado
     * @return \Illuminate\Http\Response
     */
    public function show(PorcentajeDonado $porcentajeDonado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PorcentajeDonado  $porcentajeDonado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donacion = PorcentajeDonado::findOrFail($id);
        return view('admin.editardonacion', compact("donacion")); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PorcentajeDonado  $porcentajeDonado
     * @return \Illuminate\Http\Response
     */
    public function update(PorcentajeUpdateRequest $request, $id)
    {
        $donacion = PorcentajeDonado::find($id);
        $donacion->concepto = $request->input("concepto");
        $donacion->porcentaje = $request->input("porcentaje");
        $donacion->save();
        return redirect()->route("donacion.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PorcentajeDonado  $porcentajeDonado
     * @return \Illuminate\Http\Response
     */
    public function destroy(PorcentajeDonado $porcentajeDonado)
    {
        //
    }
}
