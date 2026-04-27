<?php

namespace App\Aplicacion;

use App\Infraestructura\UsuarioRepositorio;

class ListarUsuarios
{
    private UsuarioRepositorio $repositorio;

    public function __construct()
    {
        $this->repositorio = new UsuarioRepositorio();
    }

    public function ejecutar(): array
    {
        return $this->repositorio->listarTodos();
    }
}
