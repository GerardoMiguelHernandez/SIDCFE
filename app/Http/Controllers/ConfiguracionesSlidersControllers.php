<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConfiguracionSlider;

use Intervention\Image\ImageManagerStatic as Image;

class ConfiguracionesSlidersControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $sliders = ConfiguracionSlider::orderBy('created_at','DES')->take(4)->get();
   return view('cfe.admin.slider.index')->with(['sliders'=>$sliders]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       return view('cfe.admin.slider.create');

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

        $this->validate($request,[
            'titulo'=>'required|max:255',
            'imagen'=>'image',
            'descripcion'=>'required|max:255',
            ]);

        

        $file =$request->file('imagen');
        $path = public_path().'/slider/';
        $image = Image::make($file)->resize(1900,900);
        $image->save($path.'slider_'. time() .$file->getClientOriginalName());


        $slider = new ConfiguracionSlider();
        $slider->Titulo = $request->titulo;
        $slider->imagen= 'slider_'. time() .$file->getClientOriginalName();
        $slider->descripcion = $request->descripcion;
        $slider->save();


        
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

        $slider = ConfiguracionSlider::find($id);
        return response()->json($slider);
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
        $slider = ConfiguracionSlider::find($id);
        return view('cfe.admin.slider.edit')->with(['slider'=>$slider]);
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
     $slider = ConfiguracionSlider::find($id);
     dd('hola');
/*
      $file1 =$request->file('imagen1');
      $path = public_path().'/slider/';
      $image1 = Image::make($file1)->resize(1900,900);
      $image1->save($path.'slider_'. time() .$file->getClientOriginalName());


/*
        $slider = ConfiguracionSlider::find($id);
        $slider->Titulo = $request->Titulo;
        $slider->imagen= 'slider_'. time() .$file->getClientOriginalName();
        $slider->descripcion = $request->descripcion;
        $slider->save();

*/

       //return response()->json($request->all());     

        
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
