<?php

namespace App\Infraestructura;

use App\Core\Conexion;
use App\Dominio\Usuario;

class UsuarioRepositorio
{
    public function obtenerPorId(int $id)
    {
        $pdo = Conexion::getPDOConnection();
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $datos = $stmt->fetch();

        if (!$datos) return null;

        return new Usuario($datos['id'], $datos['nombre'], $datos['email']);
    }
}
