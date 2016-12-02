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
							<li><a href="#"><i class="material-icons blue600">settings</i>Configuraciones</a></li>

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
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="{{url('/hola1')}}">
			<i class="fa fa-tachometer fa-2x"></i>   Panel Principal</a></li>
			<li><a href=""><i class="fa fa-briefcase fa-2x"></i>   SICAP</a></li>
			<li><a href="{{route('colaboradorcontroller.index')}}"><i class="fa fa-chain fa-2x"></i> Alen3D</a></li>
			
			
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2">
					<i class="fa fa-caret-down fa-2x"></i>	

					</span> ALEN3D 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="{{route('colaboradorcontroller.index')}}">
							<i class="fa fa-home"></i>Principal
						</a>
					</li>
					<li>
						<a class="" href="{{route('uploadfile')}}">
						<i class="fa fa-cloud-upload"></i>
							 Subir Archivo
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			
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
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->
