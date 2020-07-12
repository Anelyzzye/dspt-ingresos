<?php

namespace App\Http\Controllers;

use App\tipotramite;
use Illuminate\Http\Request;
use App\Http\Requests\TramitesStoreRequest;
use App\Http\Requests\TramitesUpdateRequest;


class TipotramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tramite = $request['tramite'];
        $tram = tipotramite::select(['id','nombretipotramite','clavetramite','costo'])
                ->where('nombretipotramite', 'LIKE', '%'.$tramite.'%')
                ->latest('updated_at')
                ->paginate(5);
        return view('admin.consultatramite',['tramite' => $tramite] ,compact('tram')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altatipotramite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TramitesStoreRequest $request)
    {
        $tramite = new tipotramite;
        $tramite->nombretipotramite = $request->input("nombretipotramite");
        $tramite->clavetramite = $request->input("clavetramite");
        $tramite->costo = $request->input("costo");
        $tramite->save();
        return redirect()->route("tramites.index");
        /*redirect()->route("tramites");*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipotramite  $tipotramite
     * @return \Illuminate\Http\Response
     */
    public function show(tipotramite $tipotramite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipotramite  $tipotramite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tramites = tipotramite::findOrFail($id);
        return view('admin.editartramite', compact("tramites"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipotramite  $tipotramite
     * @return \Illuminate\Http\Response
     */
    public function update(TramitesUpdateRequest $request, $id)
    {
        $tramites = tipotramite::findOrFail($id);
        $tramites->nombretipotramite = $request->input("nombretipotramite");
        $tramites->clavetramite = $request->input("clavetramite");
        $tramites->costo = $request->input("costo");
        $tramites->save();
        return redirect()->route("tramites.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipotramite  $tipotramite
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipotramite $tipotramite)
    {
        //
    }
}
