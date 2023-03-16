<?php

require_once("Trabajador.php");

class Administrativos extends Trabajador
{


	public int $id_administrador;
	public string $rol;

	/**
	 * Default constructor
	 */
	public function __construct()
	{
		// ...
	}

	/**
	 * 
	 */
	public function Entrar_rol(string $rol)
	{
		$this->rol = $rol;
	}

	/**
	 * 
	 */
	public function Visualizar_rol()
	{
		return $this->rol = "Administrador";
	}



}

$administrativo1 = new administrativos();
$administrativo1->Visualizar_nombre();
echo "Rol: " .$administrativo1->Visualizar_rol() . "\n";




