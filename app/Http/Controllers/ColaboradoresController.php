<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Colaborador;
use App\UsuarioModel;
use App\BateriaModel;

class ColaboradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bateria = BateriaModel::all();
        $count_usuarios = UsuarioModel::all()->count();
        $count_colaborador = Colaborador::all()->count();
        $colaboradores = Colaborador::orderBy('RPE','DES')->paginate(5);

        return view('admin.colaboradores.index')->with(['colaboradores'=>$colaboradores,'count_colaborador'=>$count_colaborador,'count_usuarios'=>$count_usuarios,'bateria'=>$bateria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $count_usuarios = UsuarioModel::all()->count();
        $count_colaborador = Colaborador::all()->count();
        return response()->json([
    'usuarios' => $count_usuarios,
    'colaboradores' => $count_colaborador
]);


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
