<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;
use App\tipotramite;
use App\User;
use App\Http\Requests\CitaStoreRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as Fecha;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cita = Cita::select(['users.name AS nombre', 
                      'users.apellidopat AS app',
                      'users.apellidomat AS apm',
                      'citas.dia AS dia',
                      'citas.hora AS hora',
                      'tipotramites.nombretipotramite AS tramite'
                      ])->join('users', 'users.id', '=', 'citas.user_id')
                        ->join('tipotramites', 'tipotramites.id', '=', 'citas.tipotramites_id')
                        ->latest('citas.created_at')
                        ->first();
        //return $cita;
        return view('detallecita', compact('cita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tramites = tipotramite::all();
        return view('altacitas', compact('tramites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $cita = new Cita();
        $cita->user_id = $request->input("user_id");
        $cita->dia = Fecha::parse($request->input('dia'));
        $cita->hora = Fecha::parse($request->input("hora"))->toTimeString();
        $cita->tipotramites_id = $request->input("tipotramites_id");
        $cita->created_at = now();
        $cita->updated_at = now()->toDateString();

        $consulta = Cita::where('dia', '=', $cita->dia)
            ->where('hora', '=',$cita->hora)
            ->get();

            if($consulta->count() == 0){
                $cita->save();
                return redirect()->route('cita.index');
            }else{
                
                return back()->with('msj','Ha tardado en generar su cita, la fecha y horario han sido ocupadas, eliga un nuevo horario');
    }
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
