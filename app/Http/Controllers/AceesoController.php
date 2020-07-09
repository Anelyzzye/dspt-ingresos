<?php

namespace App\Http\Controllers;
use App\Ciudadano;
use Illuminate\Http\Request;

class AceesoController extends Controller
{
    public function index(Request $request)
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
            $request->session()->put('session_pass',$consulta[0]->password);

            $session_id = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_tipo = $request->session()->get('session_tipo');


            if ($session_tipo == '3') {
                return view('layouts.administrador');
                /*redirect()->route('cita.show');*/
            }
            else if($session_tipo == '2'){
                return view('sitio.tramites');
            }
            else{
                return back();
            }
            
        }
    }
}
