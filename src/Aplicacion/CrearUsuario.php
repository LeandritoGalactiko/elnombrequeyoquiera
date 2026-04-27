<?php

namespace App\Aplicacion;

use App\Dominio\Usuario;
use App\Infraestructura\UsuarioRepositorio;

class CrearUsuario
{
    private UsuarioRepositorio $repositorio;

    public function __construct()
    {
        $this->repositorio = new UsuarioRepositorio();
    }

    public function ejecutar(string $nombre, string $email): bool
    {
        $usuario = new Usuario(null, $nombre, $email);
        return $this->repositorio->guardar($usuario);
    }
}
