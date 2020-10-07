<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Conf_variables_parametrizacion;

class Conf_variables_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conf_variables_parametrizacion::create([
            'tipo_variable' => "estado_producto",
            'variable_valor' => "1",
            'variable_etiqueta' => "Activo",
        ]);

        Conf_variables_parametrizacion::create([
            'tipo_variable' => "estado_producto",
            'variable_valor' => "2",
            'variable_etiqueta' => "Inactivo",
        ]);

        Conf_variables_parametrizacion::create([
            'tipo_variable' => "estado_producto",
            'variable_valor' => "3",
            'variable_etiqueta' => "Expirado",
        ]);
        
        Conf_variables_parametrizacion::create([
            'tipo_variable' => "estado_producto",
            'variable_valor' => "4",
            'variable_etiqueta' => "Eliminado",
        ]);

        Conf_variables_parametrizacion::create([
            'tipo_variable' => "estado_producto",
            'variable_valor' => "5",
            'variable_etiqueta' => "Bloqueado",
        ]);
    }
}
