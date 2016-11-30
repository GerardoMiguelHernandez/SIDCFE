@extends('Admin.main')
@section('css')

@endsection
@section('content')
<br>
<br>
<br>
<br>

<div class="mdl-grid">
<div class="mdl-cell mdl-cell--6-col-tablet mdl-cell--10-col-desktop mdl-cell-stretch">


<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="overflow: auto;overflow: scroll; width:300pxs;">
						<thead>
							<tr>
							  <th class="mdl-data-table__cell--non-numeric">Zona</th>
							  <th class="mdl-data-table__cell--non-numeric">Area</th>
							  <th class="mdl-data-table__cell--non-numeric">RPE</th>
                                          <th class="mdl-data-table__cell--non-numeric">Nombre</th>
                                                          <th class="mdl-data-table__cell--non-numeric">Fecha</th>
                                                          <th class="mdl-data-table__cell--non-numeric">Maniobra</th>
                                                          <th class="mdl-data-table__cell--non-numeric">Calificacion</th>
							</tr>
						</thead>
						<tbody>
@foreach($maniobras1 as $maniobra_colaborador)							
<tr>
								<td class="mdl-data-table__cell--non-numeric">{{$maniobra_colaborador->zona}}</td>
								<td class="mdl-data-table__cell--non-numeric">{{$maniobra_colaborador->area}}</td>
								<td class="mdl-data-table__cell--non-numeric">{{$maniobra_colaborador->RPE}}</td>
								<td class="mdl-data-table__cell--non-numeric">{{$maniobra_colaborador->nombre}}</td>
								<td class="mdl-data-table__cell--non-numeric">{{$maniobra_colaborador->fecha_evaluacion}}</td>
								<td class="mdl-data-table__cell--non-numeric">{{$maniobra_colaborador->maniobra}}</td>
								<td class="mdl-data-table__cell--non-numeric">{{$maniobra_colaborador->calificacion}}</td>
							</tr>
@endforeach
						</tbody>
					</table>
					</div>
				

					</div>


{!!$maniobras1->render()!!}
@endsection

@section('js')


@endsection