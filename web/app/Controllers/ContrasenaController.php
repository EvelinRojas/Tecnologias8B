<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContrasenaController extends BaseController
{
    public function index()
    {
        return view("pages/recuperar_contrasena");
    }
}
