@extends('cfe.main')
@section('css')
{!!Html::style('media/css/jquery.dataTables.css');!!}
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><i class="material-icons blue600">settings</i></a></li>
        <li class="active">Maniobras</li>
      </ol>
    </div><!--/.row-->
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{$area}}</h1>
        <strong><li style="color:#145A32">Total de evaluaciones: {{$total}}</li></strong>
			</div>
    
</div>
		

<div class="row">

<div class="col-xs-8 col-sm-8 col-md-11 col-lg-11">
</div>
    

    
</div>

<div class="table-responsive table-condensed table-hover" style="margin-top: 5px;">
        <table id="filtararea" class="table table-bordered table-hover">
          <thead>
            <tr class="info">
              <th>RPE/Maniobras</th>
                @foreach($maniobras as $maniobra)
                  <th class="text-center"  title="{{$maniobra->maniobra}}">{{substr($maniobra->maniobra , 0, 2)}}</th>
                @endforeach 
            </tr>
          </thead>


          <tbody>
            <!--@foreach($colaboradores as $colaborador)
              <tr>
                <th class="text-center">{{$colaborador->RPE}}</th>
                <!--Aqui iba codigo
              </tr>
            @endforeach-->


            @for($i = 0; $i < $totalcolaborador; $i++)
              <tr>
                <th class="text-center"><a href="{{route('nuevo-detallecolaborador',[$rpecolaborador[$i]])}}">{{$rpecolaborador[$i]}}</a></th>

              @for($j = 0; $j < $totalmaniobra; $j++)
                
                  @if($realizo[$i][$j] !== 'N')
                    <th class="text-center"><i class="material-icons" style="font-size:24px;color:green;text-shadow:2px 2px 16px green;">done</i>({{$realizo[$i][$j]}})</th>
                  @else
                    <th class="text-center"><i class="material-icons" style="font-size:24px;color:red;text-shadow:2px 2px 16px red;">clear</i></th>
                  @endif
                
              @endfor
              </tr>
            @endfor


          </tbody>

        </table>
      </div> 


		</div>


@endsection

@section('js')
{!!Html::script('media/js/jquery.js');!!}
{!!Html::script('media/js/jquery.dataTables.js');!!}
{!!Html::script('media/js/dataTables.bootstrap.js');!!}