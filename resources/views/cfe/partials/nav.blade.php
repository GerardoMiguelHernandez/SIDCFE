<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>SISTEMA</span> SIDCFE</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons blue600">perm_identity</i> {{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						@if (Auth::user()->email=='9B515')
							<li><a href="{{route('usuarios.index')}}"><i class="material-icons blue600">contacts</i> Usuarios</a></li>
							<li><a href="{{url('/admin/slider')}}"><i class="material-icons blue600">settings</i>Configuraciones</a></li>

							@endif
							<li><a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            
                                        <i class="material-icons orange600">power_settings_new</i>Salir</a></li>




                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	    <section class="success">
<img src="/img/cfe.png" class="nav-brand" style="width: 100%;">
		</section>
		<br>
		<ul class="nav menu">

			<li><a href="{{route('colaboradorcontroller.index')}}">
			<i class="fa fa-tachometer fa-2x"></i>   Panel Principal</a></li>
			<!--
			<li><a href=""><i class="fa fa-briefcase fa-2x"></i>   SICAP</a></li>
			<li><a href="{{route('colaboradorcontroller.index')}}"><i class="fa fa-chain fa-2x"></i> Alen3D</a></li> -->
			
			
			<li class="parent ">
				<a href="{{route('colaboradorcontroller.index')}}">
					<span data-toggle="collapse" href="#sub-item-2">
					<i class="fa fa-caret-down fa-2x"></i>	

					</span> ALEN3D 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="{{route('colaborador.listado')}}">
							<i class="fa fa-home"></i>Listado Principal
						</a>
					</li>
					<li>
						<a class="" href="{{route('uploadfile')}}">
						<i class="fa fa-cloud-upload"></i>
							 Subir Archivo
						</a>
					</li>
					<li>
						<a class="" href="{{route('filtros.index')}}">
						<i class="fa fa-calendar" aria-hidden="true"></i>

							 Filtrar por Fecha
						</a>
					</li>
					<li>
						<a class="" href="{{route('filtros.create')}}">
						<i class="fa fa-wrench" aria-hidden="true"></i>

							 Filtrar Maniobra
						</a>
					</li>
					<li>
						<a class="" href="{{('/mostrar')}}">
						<i class="fa fa-align-left" aria-hidden="true"></i>

							 Estadísticas
						</a>
					</li>
					<li>
						<a class="" href="{{route('Estadisticas.general')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Concentrados
						</a>
					</li>
				</ul>
			</li>
			<!--
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1">
					<i class="fa fa-caret-down fa-2x"></i>	

					</span> ManiobrasColaboradores 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li> -->
			@if (Auth::user()->email=='9B515')
			<li class="parent ">
				<a href="{{route('metas.index')}}">
					<span data-toggle="collapse" href="#sub-item-3">
					<i class="fa fa-caret-down fa-2x"></i>	

					</span> METAS
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="{{route('metas.index')}}">
							<i class="material-icons">search</i>Ver Metas
						</a>
					</li>
					<li>
						<a class="" href="{{('/metas')}}">
						<i class="fa fa-flag-checkered" aria-hidden="true"></i>

							 Estadísticas de metas
						</a>
					</li>
					<li>
						<a class="" href="{{route('metas.create')}}">
							<i class="material-icons">add</i>Crear Meta
						</a>
					</li>
					
					
				</ul>
			</li>
			@endif
			<li role="presentation" class="divider"></li>
			
		</ul>

	</div><!--/.sidebar-->
