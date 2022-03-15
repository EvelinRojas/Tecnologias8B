<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return view("login/login");
    }

    public function validar()
    {
        $email=$this->request->getPost("email");
        $contrasena=$this->request->getPost("contrasena");
        d($this->request->getPost());
        dd($email);
        ddd($contrasena);
    }
}
