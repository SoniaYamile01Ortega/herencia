<?php


class Persona
{

	public int $id_persona;
	public string $nombre;
	public string $direccion;
	public float $identificacion;
	public string $sexo;

	/**
	 * Default constructor
	 */
	public function __construct($id_persona, $nombre,  $direccion,  $identificacion,  $sexo)
	{
		$this->id_persona= $id_persona;
		$this->nombre=$nombre;
		$this->direccion=$direccion;
		$this->identificacion=$identificacion;
		$this->sexo=$sexo;
	}

	/**
	 * 
	 */
	public function Entrar_direccion(string $direccion)
	{
		$this->direccion = $direccion;
	}

	public function Entrar_nombre(string $nombre)
	{
		$this->nombre = $nombre;
	}


	public function Visualizar_nombre()
	{
		return $this->nombre = "Juan Alberto Caicedo";
	}

	

	public function Visualizar_direccion()
	{
		return $this->direccion = "Calle 5 # 29";
	}

	/**
	 * 
	 */
	public function Visualizar_identificacion()
	{
		return $this->identificacion = 57062406503;
	}

	/**
	 * 
	 */
	public function Visualizar_sexo()
	{
		return $this->sexo = "Masculino";
	}

}


/*$persona1 = new persona(1010,"Juan Alberto Ciacedo","Calle 27 No 43-12",57062406503,"Masculino" );
echo "<br>";
echo "Nombre: " .$persona1-> Visualizar_nombre() ."\n";
echo "Dirección:" .$persona1->Visualizar_direccion() ."\n";
echo "Sexo: " .$persona1->Visualizar_sexo() ."\n";*/

/*$persona3 = new persona(242513,"Mariana Sanchez","Calle 19 No 11-42",25366,"Femenino" );
echo "<br>";
echo "nombre" .$persona3->nombre . "\n";
echo "dirección: " .$persona3->direccion . "\n";
echo "identificación" .$persona3->identificacion . "\n";
echo "sexo: " .$persona3->sexo . "\n";*/


?>