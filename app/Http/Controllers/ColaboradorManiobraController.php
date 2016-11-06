<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests;
use App\Colaborador_ManiobraModel;
use Carbon\Carbon;
use App\ImportarArchivos;
class ColaboradorManiobraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function __construct()
    {
   
    }

    public function index(Request $request)
    {
        //
        //dd($request->dato);
       $maniobras=Colaborador_ManiobraModel::search($request->input_buscar)->paginate(20);

      // $imagenesss =Imagen::search($request->input_buscar)->orderBy('created_at','DES')->get();

       return view('admin.maniobrascolaboradores.index')->with(['maniobras'=>$maniobras]);

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
    public function store(Request $request, ImportarArchivos $import)
    {
      $import->chunk(200, function($results)
    {
        
    

             foreach ($results as $book) {
                Colaborador_ManiobraModel::create([
                    'zona' => $book->zona,
                    'area' =>$book->area,
                      'RPE' => $book->rpe,
                      'nombre'=>$book->nombre,
                    'fecha_evaluacion' =>date("y-m-d",strtotime($book->fecha_evaluacion)),
                    'maniobra' =>$book->maniobra,
                      'calificacion' => $book->calificacion
                    
                ]);
            }
        });
  }

        //protected $dates = ['dob'];
  //Zona,Área,RPE,Nombre,Fecha Evaluación,Maniobra Evaluada,Calif.
/*
         Excel::load('archivos/evaluadosAlen3dfecha.csv', function($reader) {

            foreach ($reader->get() as $book) {
                Colaborador_ManiobraModel::create([
                    'zona' => $book->zona,
                    'area' =>$book->area,
                      'RPE' => $book->rpe,
                      'nombre'=>$book->nombre,
                    'fecha_evaluacion' =>date("y-m-d",strtotime($book->fecha_evaluacion)),
                    'maniobra' =>$book->maniobra,
                      'calificacion' => $book->calificacion
                    
                ]);
            }
        }); 
         */
       // return Book::all();  




   

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
