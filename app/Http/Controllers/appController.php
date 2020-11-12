<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function verProductosDisponibles()
    {
        return view("product");
    }

    public function verProductoDetalle($producto)
    {
        return view("product_detail",array("producto" => $producto));
    }
}

