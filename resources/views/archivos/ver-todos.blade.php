@extends('layouts.app')

@section('content')
<h1 class="text-center">Subir archivos a mi carpeta</h1>

<div class="py-4 d-flex col-lg-9 gap-5 w-100">

    <div class="d-flex col-lg-2">
        @include('layouts._partials.nav')
    </div>

    <div class="col-lg-8 ">

    @foreach ($archivos as $archivo)
    <div>
        <span>{{ $archivo->nombre }}</span>
        <a href="{{ asset( Storage::url($archivo->ruta)) }}">Descargar</a>
    </div>
    @endforeach
    </div>

</div>


@endsection

