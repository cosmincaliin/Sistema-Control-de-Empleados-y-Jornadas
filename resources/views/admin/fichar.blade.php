@extends('layouts.app')

@section('content')
<h1 class="text-center">Panel de control del Administrador</h1>
<div class="py-4 d-flex col-lg-9 gap-2 w-100">
    <div class="d-flex flex-column h-5 col-lg-2">
        @include('layouts._partials.nav')
    </div>

    <div class="col-lg-8" style="height: 25rem;">
        <h2 class="text-center">Registrar Horarios</h2>
        <div class="container d-flex flex-column gap-3 align-items-center ">

            @if (Auth::user()->activo===1)
            <form action="{{ route('registrar-entrada-salida') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary" name="accion" value="entrada">Registrar Salida</button>
            </form>
            @else
            <form id="entrada" action="{{ route('registrar-entrada-salida') }}" method="POST">
                @csrf
                <button onclick="geoposition()"  type="submit" class="btn btn-primary" name="accion" value="entrada" onclick="geoposition()">Registrar Entrada</button>
            </form>
            @endif

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>

    </div>
</div>
<script>
    function setCookie(name, value, hoursToExpire) {
        const now = new Date();
        const time = now.getTime();
        time += hoursToExpire * 60 * 60 * 1000;
        now.setTime(time);
        document.cookie = `${name}=${value}; expires=${now.toUTCString()}; path=/`;
    }

    let form= document.getElementById('entrada')
    btn.addEventListener('submit',function geoposition(event) {
        event.preventDefault()
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(
                function (position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    // Crear una cookie que dure 24 horas para almacenar la geolocalización
                    setCookie("geolocalizacion", `${latitude},${longitude}`, 24);
                    console.log("Geolocalización almacenada en la cookie.");
                    
                    form.submit();
                },
                function (error) {
                    console.error("Error al obtener la geolocalización:", error);
                }
            );
        } else {
            console.error("La geolocalización no está disponible en este navegador.");
        }

    })

</script>


@endsection
