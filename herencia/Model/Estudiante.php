<?php

require_once("Persona.php");


class Estudiante extends Persona
{

	public int $id_estudiante;
	public string $año;
	public string $especialidad;

	/**
	 * Default constructor
	 */
	public function __construct()
	{
		// ...
	}

	public function Entrar_año(string $año)
	{
		 $this->año = $año;
	}

	/**
	 * 
	 */
	public function Visualizar_año()
	{
		return $this->año = "2023";
	}

	/**
	 * 
	 */
	public function Visualizar_Especialidad()
	{
		return $this->especialidad = "Informática";
	}

}

$estudiante1 = new estudiante();
echo "<br>";
echo "Nombre: " .$estudiante1-> Visualizar_nombre() ."\n";
echo "Dirección:" .$estudiante1->Visualizar_direccion() ."\n";
echo "Sexo: " .$estudiante1->Visualizar_sexo() ."\n";
echo "Año:" .$estudiante1->Visualizar_año() . "\n";
echo "Especialida:" .$estudiante1->Visualizar_Especialidad() . "\n";

$estudiante2 = new estudiante(242513,"Mariana Sanchez","Calle 19 No 11-42",25366,"Femenino");
echo "<br>";
echo "Nombre: " .$estudiante2->Visualizar_nombre="Mariana Sanchez" ."\n";
echo "Nombre: " .$estudiante2->Visualizar_direccion="Calle 19 No 11-42" ."\n";
echo "Año: " .$estudiante2->Visualizar_año="2021" ."\n";
echo "Especialidad: " .$estudiante2->Visualizar_especialidad="Telecomunicaciones" ."\n";