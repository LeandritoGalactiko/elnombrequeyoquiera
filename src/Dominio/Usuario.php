<?php

namespace App\Dominio;

use App\Core\Conexion;

class Usuario
{
    public int $id;
    public string $nombre;
    public string $email;
    public string $rol;

    public static function obtenerPorId(int $id)
    {
        $pdo = Conexion::getPDOConnection();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $fila = $stmt->fetch();

        if ($fila) {
            $usuario = new Usuario();
            $usuario->id = $fila['id'];
            $usuario->nombre = $fila['nombre'];
            $usuario->email = $fila['email'];
            $usuario->rol = $fila['rol'];
            return $usuario;
        }

        return null;
    }
}
