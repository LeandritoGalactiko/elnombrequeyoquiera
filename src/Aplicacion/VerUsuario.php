<?php

namespace App\Aplicacion;

use App\Infraestructura\UsuarioRepositorio;

class VerUsuario
{
    private UsuarioRepositorio $repositorio;

    public function __construct()
    {
        $this->repositorio = new UsuarioRepositorio();
    }

    public function ejecutar(int $id)
    {
        return $this->repositorio->obtenerPorId($id);
    }
}
