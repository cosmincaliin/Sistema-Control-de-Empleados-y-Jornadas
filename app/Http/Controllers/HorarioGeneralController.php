<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class HorarioGeneralController extends Controller{

    public function horarioGeneral(Request $request) {
        $mes = $request->input('mes');
        $anio = $request->input('anio');

        $horarioGeneral = Registro::with('user')
        ->paginate(20);


        return view('admin.horarioGeneral', compact('horarioGeneral', 'mes', 'anio'));
    }


        public function filtrar(Request $request)
    {
        $mes = $request->input('mes');
        $anio = $request->input('anio');

        $horarioGeneral = Registro::whereMonth('entrada', $mes)
                            ->whereYear('entrada', $anio)
                            ->paginate(9);

        // Resto del código del controlador

        return view('admin.horarioGeneral', compact('horarioGeneral', 'mes', 'anio'));
    }
}
