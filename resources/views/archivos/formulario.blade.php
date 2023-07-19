@extends('layouts.app')

@section('content')
<h1 class="text-center">Subir archivos a mi carpeta</h1>

<div class="py-4 d-flex col-lg-9 gap-5 w-100">

    <div class="d-flex col-lg-2">
        @include('layouts._partials.nav')
    </div>

    <div class="col-lg-8 ">

        <form action="{{ route('archivo.subir') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="file" id="formFile" type="file" name="archivo">
            <button class="btn btn-success mt-2" type="submit">Subir archivo</button>
        </form>
    </div>

</div>


@endsection

