<?php

namespace App\Http\Controllers;

use App\Ciudadano;
use Illuminate\Http\Request;
use App\Ciudadano;

class CiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = $request->input('email');
        $pass = $request->input('password');

        $consulta = Ciudadano::where('email', '=', $email)
            ->where('password', '=',$pass)
            ->get();

        //echo $consulta->count();

        if($consulta->count() == 0){
            return redirect()->route('sitio.tramites');
         }else{
            
            $request->session()->put('session_id',$consulta[0]->id);
            $request->session()->put('session_name',$consulta[0]->nombres);
            $request->session()->put('session_tipo',$consulta[0]->tipociudadanos_id);

            $session_id = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_tipo = $request->session()->get('session_tipo');


            if ($session_tipo == '3') {
                return "Bienvenido al sistema"
                /*redirect()->route('cita.show');*/
            }
            else if($session_tipo == '2'){
                return view('sitio.tramites');
            }
            else{
                echo
                return back();
            }
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Ciudadano $ciudadano)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudadano $ciudadano)
    {
        //
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
