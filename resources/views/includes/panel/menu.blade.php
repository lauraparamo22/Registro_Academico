<div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-2" href="{{('/home')}}"><img src="{{asset('img/logo.png')}}" class="mr-2" alt="logo"/></a>
            </div>
            <ul class="sidebar-menu">
                <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa-solid fa-calendar-days"></i> <span>Gestión</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('Sectores')}}">Sector</a></li>
                    <li><a class="nav-link" href="{{ url('Carreras')}}">Carreras</a></li>
                    <li><a class="nav-link" href="{{ url('Modulos')}}">Módulos</a></li>
                    <li><a class="nav-link" href="{{ url('Cursos')}}">Cursos</a></li>
                    <li><a class="nav-link" href="{{ url('Estudiantes')}}">Estudiantes</a></li>
                    <li><a class="nav-link" href="{{ url('NotasCarreras')}}">Notas carreras</a></li>
                    <li><a class="nav-link" href="{{ url('NotasCursos')}}">Notas cursos</a></li>
                </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa-solid fa-clipboard-user"></i> <span>Asistencia</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('AsistenciaCarrera')}}">Asistencia carrera</a></li>
                    <li><a class="nav-link" href="{{ url('AsistenciaCurso')}}">Asistencia cursos</a></li>
                </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-bars-progress"></i> <span>Administración</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('MatriculaCarreras')}}">Matrícula carreras</a></li>
                    <li><a class="nav-link" href="{{ url('MatriculaCursos')}}">Matrícula cursos</a></li>
                    <li><a class="nav-link" href="{{ url('Alojamientos')}}">Alojamiento</a></li>
                    <li><a class="nav-link" href="{{ url('Alimentacion')}}">Alimentación</a></li>
                </ul>
                <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-gear"></i> <span>Configuración</span></a>
                <ul class="dropdown-menu">
                <li class="nav-item"> 
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">Cerrar Sesion
                            </a>
                            <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
                                @csrf
                            </form>
                        </li>
                </aside>
            </div>