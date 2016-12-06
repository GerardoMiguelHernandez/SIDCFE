<?php

    namespace App\Http\ViewComposers;
    use Illuminate\View\View;
    use App\Colaborador_ManiobraModel;
   

       class CompartirComposer{
          

          public function compose(View $view){
            
            $areas = Colaborador_ManiobraModel::select('area')->distinct()->get();
              
            $maniobras = Colaborador_ManiobraModel::select('maniobra')->distinct()->get();
            $view->with(['areas'=>$areas,'maniobras'=>$maniobras]);
              
        }
  
    }
