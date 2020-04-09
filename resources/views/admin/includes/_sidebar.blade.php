<nav id="sidebar">
	<a class="navbar-brand ml-4" href="#">
		<img src="{{ asset('assets/img/logo-white.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
		BuffaloSafe
	</a>

	<div class="container mt-4 mb-2">
		<div class="mb-2">
			<img src="{{ asset('assets/admin/img/users/user.jpg')}}" class="img-responsive" style="border-radius: 50%;" alt="" width="70">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
			<div class="profile-usertitle-status">{{ Auth::user()->email }}</div>
		</div>
	</div>


    <ul class="list-unstyled components">
    	<li class="active">
            <a href="{{ route('user.admin.index') }}">
                <i class="fas fa-chart-line"></i> Panel
            </a>
        </li>

        <li>
            <a href="{{ route('user.files.create') }}">
                <i class="fas fa-chart-line"></i> {{ __('Upload file') }}
            </a>
        </li>

        <li>
            <a href="#profileSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-circle"></i> Mi perfil</a>
            <ul class="collapse list-unstyled" id="profileSubmenu">
                <li>
                    <a href="#">Ver mi perfil</a>
                </li>
                <li>
                    <a href="#">Actualizar perfil</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#filesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-file-upload"></i> Mis archivos</a>
            <ul class="collapse list-unstyled" id="filesSubmenu">
                <li>
                    <a href="#">Imágenes</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Documentos</a>
                </li>
                <li>
                    <a href="#">ZIP</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#rolesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-unlock-alt"></i> Roles</a>
            <ul class="collapse list-unstyled" id="rolesSubmenu">
                <li>
                    <a href="#">Ver todos</a>
                </li>
                <li>
                    <a href="#">Agregar rol</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#permissionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-fingerprint"></i> Permisos</a>
            <ul class="collapse list-unstyled" id="permissionSubmenu">
                <li>
                    <a href="#">Ver todos</a>
                </li>
                <li>
                    <a href="#">Agregar permiso</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> Usuarios</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Ver todos</a>
                </li>
                <li>
                    <a href="#">Agregar rol</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="far fa-question-circle"></i> Soporte</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a class="logout" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i>
                {{ __('Logout') }}
            </a>

            <form 
                id="logout-form" 
                action="{{ route('logout') }}" 
                method="POST" 
                style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>