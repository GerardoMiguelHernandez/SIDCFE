@extends('cfe.main')

@section('css')

@endsection



@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">




<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li class="active">Concentrado</li>
      </ol>
    </div><!--/.row-->

    <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header text-center bg-info">Concentrados Generales</h1>
			</div>
      
		</div>


<div class="table-responsive table-condensed table-hover" style="margin-top: 5px;">
        <table id="filtararea" class="table table-bordered table-hover">
          <thead>
            <tr class="info">
              <th>Maniobras/Areas</th>
              @foreach($areas as $area)
              <th class="text-center">{{$area->area}}</th>

              @endforeach
              
            </tr>


          </thead>
          <tbody id="general_Estadistica">
           
           @foreach($maniobras as $maniobra)
           <tr>
              <th>{{$maniobra->maniobra}}</th>
             <!-- <th>@for ($i = 0; $i < 10; $i++)
              {{ $i }}
             @endfor</th>  -->

             <th class="text-center"><a href="{{route('colaborador.area.maniobra',['AREA ETLA',$maniobra->maniobra])}}">{{$datos[$loop->index]}}</a></th>
             <th class="text-center"><a href="{{route('colaborador.area.maniobra',['AREA IXTLAN',$maniobra->maniobra])}}">{{$contador_ixtlan[$loop->index]}}</a></th>
             <th class="text-center"><a href="{{route('colaborador.area.maniobra',['AREA MIAHUATLAN',$maniobra->maniobra])}}">{{$contador_miahuatlan[$loop->index]}}</a></th>
             <th class="text-center"><a href="{{route('colaborador.area.maniobra',['AREA OAXACA',$maniobra->maniobra])}}">{{$contador_oaxaca[$loop->index]}}</a></th>
             <th class="text-center"><a href="{{route('colaborador.area.maniobra',['AREA OCOTLAN',$maniobra->maniobra])}}">{{$contador_ocotlan[$loop->index]}}</a></th>
             <th class="text-center"><a href="{{route('colaborador.area.maniobra',['AREA TLACOLULA',$maniobra->maniobra])}}">{{$contador_tlacolula[$loop->index]}}</a></th>
             <th class="text-center"><a href="{{route('colaborador.area.maniobra',['AREA ZIMATLAN',$maniobra->maniobra])}}">{{$contador_zimatlan[$loop->index]}}</a></th>
             <th class="text-center"><a href="{{route('colaborador.area.maniobra',['AREA Temporales Oax',$maniobra->maniobra])}}">{{$contador_temporales[$loop->index]}}</a></th>
            

             

              </tr>

              @endforeach





            
          </tbody>
        </table>
      </div>





</div>






@endsection


@section('js')




@endsection