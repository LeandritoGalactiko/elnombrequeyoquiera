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

    public function guardar(Usuario $usuario): bool
    {
        $pdo = Conexion::getPDOConnection();
        $sql = "INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            'nombre' => $usuario->nombre,
            'email'  => $usuario->email,
        ]);
    }

    public function actualizar(Usuario $usuario): bool
    {
        $pdo = Conexion::getPDOConnection();
        $sql = "UPDATE usuarios SET nombre = :nombre, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            'nombre' => $usuario->nombre,
            'email'  => $usuario->email,
            'id'     => $usuario->id,
        ]);
    }

    public function listarTodos(): array
    {
        $pdo = Conexion::getPDOConnection();
        $stmt = $pdo->query("SELECT * FROM usuarios");
        $resultado = [];

        while ($datos = $stmt->fetch()) {
            $resultado[] = new Usuario($datos['id'], $datos['nombre'], $datos['email']);
        }

        return $resultado;
    }
}
