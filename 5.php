<?php
class Vehiculo{
    public string $nombre;
    private $codigoMotor;

    public function __construct(string $nombre)
    {
        $this -> nombre = $nombre;
    }

    public function __get($propiedad){
        if(property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    public function __set($propiedad, $valor){
        if(property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }
    }
}

class Coche extends Vehiculo{
    public int $numeroRuedas;

    public function __construct(string $nombre, int $numeroRuedas)
    {
        $this -> numeroRuedas = $numeroRuedas;
        parent::__construct($nombre);
    }
}


$padre = new Vehiculo('Avion');
echo('Vehiculo clase padre'."<br>");

$padre->__set('codigoMotor', 88);
echo('CodigoMotor: '.$padre->__get('codigoMotor')."<br>");

$hija = new Coche('volkswagen', 4);
echo('Coche clase hija de Vehiculo'."<br>");

$hija->__set("codigoMotor", 44);
echo('CodigoMotor: '.$hija->__get("codigoMotor"). "<br>");
echo('NumeroRuedas: '.$hija->__get("numeroRuedas"). "<br>");

//Aqui podemos ver como tanto la clase padre como la hija pueden usar __get() 
//sin la necesidad de definirlas en la clase hija.
?>