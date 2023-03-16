<?php

require_once("Trabajador.php");

class Servicio extends Trabajador
{


	public int $id_servicio;
	public string $area;

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
	public function Entrar_Area(string $area)
	{
		$this->area = $area;
	}

	/**
	 * 
	 */
	public function Visualizar_area()
	{
		return $this->area = "Administración";
	}



}

$servicio1 = new servicio();
echo "Area: " .$servicio1->Visualizar_area() . "\n";

$servicio2 = new servicio(2021,"Adriana Botello","Calle 95 sur No 23-44",359987,"Femenino");
echo "<br>";
echo "Nombre:  " .$servicio2->nombre = "Adriana Botello";
echo "Dirección:  " .$servicio2->direccion = "Calle 95 sur No 23-44";
echo "Identificación:  " .$servicio2->identificacion = 359987;
echo "Fecha Ingreso:" .$servicio2->Visualizar_Fechaingreso = "12/01/23";
echo "Sexo: " .$servicio2->sexo = "Femenino" . "\n";
echo "Area" .$servicio2->Visualizar_area="Sistemas" . "\n";



?>
