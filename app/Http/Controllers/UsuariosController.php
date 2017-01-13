<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuarioModel;
use App\Http\Requests;
use App\User;
 

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
     $usuarios = UsuarioModel::all();



    return view('admin.usuarios.index')->with(['usuarios'=>$usuarios]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

  return view('admin.usuarios.create');


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


        //$user = new User();
        //$user->name=$request->nombre;
        //$user->email=$request->email;
        //$user->password=$request->password;
        

        //$user->save();

        if($request->ajax()){
$ user = new User();
       $user->name=$request->nombre;
       $user->email=$request->email;
       $user->password=$request->password;
       $user->save();

         return response()->json([
    'nombre' => $request->nombre,
    'Email' =>  $request->email,
    'Password'=> $request->password
]);

        }
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
