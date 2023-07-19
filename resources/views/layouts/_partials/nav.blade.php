<nav class="position-fixed">
    <div class="d-flex flex-column gap-2 p-2">
        @if (Auth::user()->rol==='admin')
        <a class="text-white text-decoration-none nav-item btn btn-primary" href="{{route('fichar-admin')}}" >
            Fichar
        </a>
        <a href="{{route('admin.horarios')}}" class="text-white text-decoration-none nav-item btn btn-primary">
            Mis Horarios
        </a>
        <a href="{{route('admin.usuarios')}}" class="text-white text-decoration-none nav-item btn btn-primary">
            Gestionar Empleados
        </a>

        <a href="{{ route('mostrar.horario.general') }}" class="btn btn-primary">
            Consultar Horario General
        </a>
        <a class="text-white text-decoration-none nav-item btn btn-primary" href="{{route('add.employee.form')}}">
            Añadir Empleados
        </a>
        <a class="text-white text-decoration-none nav-item btn btn-primary" href="{{route('solicitudes-pendientes')}}">
            Solicitudes Pendientes
        </a>
        <a class="text-white text-decoration-none nav-item btn btn-primary" href="{{route('calendario')}}">
            Calendario
        </a>
        <a class="text-white text-decoration-none nav-item btn btn-primary" href="{{route('archivo.ver-todos')}}">
            Ver Archivos
        </a>

        @else

        <a href="{{route('fichar-employee')}}" class="text-white text-decoration-none nav-item btn btn-primary">
            Fichar
        </a>
        <a href="{{route('employee.horarios')}}" class="text-white text-decoration-none nav-item btn btn-primary">
            Mis Horarios
        </a>
        <a href="{{route('solicitud')}}" class="text-white text-decoration-none nav-item btn btn-primary">
            Hacer una Solicitud
        </a>

        @endif
        <a class="text-white text-decoration-none nav-item btn btn-primary" href="{{route('archivo.formulario')}}">
            Subir Archivos
        </a>
        <a class="text-white text-decoration-none nav-item btn btn-primary" href="{{route('documentos')}}">
            Ver Documentos
        </a>
        </div>
</nav>
