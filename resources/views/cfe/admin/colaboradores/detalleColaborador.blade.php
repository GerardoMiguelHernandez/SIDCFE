@extends('cfe.main')

@section('css')

@endsection


@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

                     <a href="{{route('colaborador.foto',$id)}}"><img src="{{route('colaborador.foto',$response->RPE)}}"></a>

                     </div>


@endsection

@section('js')

@endsection