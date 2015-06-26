    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">{{app_name()}}</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{!! URL::to('/') !!}"><i class="fa fa-home"></i> Home</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Purchasing <span class="caret"></span></a>
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Marketing <span class="caret"></span></a>
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Finance <span class="caret"></span></a>
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounting <span class="caret"></span></a>
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">QC <span class="caret"></span></a>
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Engineering <span class="caret"></span></a>
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PPC <span class="caret"></span></a>
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Warehouse <span class="caret"></span></a>
					  <ul class ="dropdown-menu" role="menu">
					    <li class="dropdown-header">Stock Coil</li>
					    <li>{!! link_to('coil', 'Entry Stock Coil RAB') !!}</li>
					    <li>{!! link_to('/', 'Entry Stock Coil Customer') !!}</li>
					    <li class="divider"></li>
					    <li class="dropdown-header">Stock Raw Mats</li>
					    <li>{!! link_to('/', 'Entry Stock Raw Material') !!}</li>
					    <li class="divider"></li>
					    <li>{!! link_to('/', 'Report') !!}</li>
					  </ul>
					</li>
					<li>{!! link_to('/', 'Maintenance') !!}</li>
					<li>{!! link_to('/', 'Setting') !!}</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li>{!! link_to('auth/login', 'Login') !!}</li>
						<li>{!! link_to('auth/register', 'Register') !!}</li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
							    <li>{!! link_to('dashboard', 'Dashboard') !!}</li>
							    <li>{!! link_to('auth/password/change', 'Change Password') !!}</li>
							    @permission('view_admin_link')
							        {{-- This can also be @role('Administrator') instead --}}
							        <li>{!! link_to_route('backend.dashboard', 'Administration') !!}</li>
							    @endpermission
								<li>{!! link_to('auth/logout', 'Logout') !!}</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
