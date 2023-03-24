<?php

require_once("Persona.php");

class Trabajador extends Persona
{

	public int $id_trabajador;
	public string $fecha_ingreso;
	public string $cargo;
	public float $salario;
	

	public function __construct()
	{
		
	}

	public function Entrar_departamento()
	{
		$this->departamento=$departamento;
	}

	/**
	 * 
	 */
	public function Entrar_cargo(string $cargo)
	{
		$this->cargo=$cargo;
	}

	/**
	 * 
	 */
	public function Entrar_salario(float $salario)
	{
		$this->salario=$salario;
	}

	public function Visualizar_salario(){
		return $this->salario = 3500000;
	}

	public function Visualizar_fechaingreso()
	{
		return $this->fecha_ingreso ="25/09/21";
	}

	/**
	 * 
	 */
	public function Visualizar_cargo()
	{
		return $this->cargo = "Docente";
	}

}


$trabajador1 = new trabajador();
echo "<br>";
echo "Nombre: " .$trabajador1-> Visualizar_nombre() ."\n";
echo "Dirección:" .$trabajador1->Visualizar_direccion() ."\n";
echo "Sexo: " .$trabajador1->Visualizar_sexo() ."\n";
echo "<br>";
echo "Fecha ingreso:" .$trabajador1->Visualizar_fechaingreso() ."\n";
echo "Cargo" .$trabajador1->Visualizar_cargo()."\n";
echo "Salario" .$trabajador1->Visualizar_salario()."\n";



$trabajador2= new persona(3333,"Johan Darío Duarte","Calle 27 No 43-12",20341000,"Masculino");

echo "<br>";
echo "" .$trabajador2->nombre . "\n";
echo "Identificación: " .$trabajador2->identificacion . "\n";
echo "Sexo: " .$trabajador2->sexo . "\n";
echo "Fecha ingeso: " .$trabajador2->Visualizar_fechaingreso="12/02/22" . "\n";
echo "Cargo:  " .$trabajador2->Visualizar_cargo="Cafeteria" . "\n";
echo "Salario: " .$trabajador2->Visualizar_salario = 2600000 . "\n";

$trabajador3= new persona(1111,"Federcio Briseño","Calle 88 No 43-12",59688679,"Masculino");

echo "<br>";
echo "" .$trabajador3->nombre . "\n";
echo "Identificación: " .$trabajador3->identificacion . "\n";
echo "Sexo: " .$trabajador3->sexo . "\n";
echo "Fecha ingeso: " .$trabajador3->Visualizar_fechaingreso="12/02/22" . "\n";
echo "Cargo:  " .$trabajador3->Visualizar_cargo="Administrador" . "\n";
echo "Salario: " .$trabajador3->Visualizar_salario = 5000000 . "\n";


?>
