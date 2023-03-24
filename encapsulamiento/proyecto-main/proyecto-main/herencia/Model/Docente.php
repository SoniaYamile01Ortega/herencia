<?php

require_once("Trabajador.php");


class Docente extends Trabajador
{

	public int $id_docente;
	public string $departamento;
	public string $asignatura;


	public function Entrar_departamento()
	{
		$this->departamento=$departamento;
	}

	
	public function Visualizar_departamento()
	{
		return $this->departamento = "Matemáticas";
	}

	public function Entrar_asignatura()
	{$this->asignatura = $asignatura;
	}

	public function Visualizar_asignatura()
	{
		return $this->asignatura = "Lenguaje C";
	}

	
}

$docente1 = new docente();
echo "<br>";
echo "Docente: " .$docente1->Visualizar_nombre() . "\n";
echo "Departamento: " .$docente1->Visualizar_departamento();
echo "Asignatura: " .$docente1->Visualizar_asignatura();

$docente2 = new docente(242513,"Mariana Sanchez","Calle 19 No 11-42",25366,"Femenino");
echo "<br>";
echo "Docente: " .$docente2->nombre="Mariana Sanchez" . "\n";
echo "Dirección: " .$docente2->direccion="Calle 19 No 11-42" . "\n";
echo "Departamento: " .$docente2->Visualizar_departamento="Biología";
echo "Asignatura: " .$docente2->Visualizar_asignatura="Quimíca";


?>