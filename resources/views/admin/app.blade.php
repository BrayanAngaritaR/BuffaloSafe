<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
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
        			<div class="profile-usertitle-name">Brayan Angarita</div>
        			<div class="profile-usertitle-status">admin@admin.com</div>
        		</div>
        	</div>


            <ul class="list-unstyled components">
            	<li class="active">
                    <a href="#"><i class="fas fa-chart-line"></i> Panel</a>
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
                    <a href="#" class="logout"><i class="fas fa-power-off"></i> Cerrar sesión</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a>@yield('page', 'Admin')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="panel panel-container container shadow-sm">
            	@yield('content')
            </div>

			<div class="mt-5 row">
				<div class="col-md-6 mt-5">
					<canvas id="line-chart" width="100%" height="100%"></canvas>
				</div>
				<div class="col-md-6 mt-5">
					<canvas id="pie-chart" width="100%"></canvas>
				</div>
			</div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		<script type="text/javascript">
			new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "África",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "Asia",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [168,170,178,190,203,276,408,547,675,734],
        label: "Europa",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [40,20,10,16,24,38,74,167,508,784],
        label: "Latino América",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "Norte América",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Tráfico obtenido en el sitio web'
    }
  }
});
		</script>

		<script type="text/javascript">
			new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Chrome", "Firefox", "Ópera", "Safari", "Otros"],
      datasets: [{
        label: "Navegadores utilizados por los usuarios",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [3478,2267,1234,1984,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Navegadores utilizados por los usuarios'
      }
    }
});
		</script>
</body>

</html>