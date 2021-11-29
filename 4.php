<?php
    // Definicion de la clase Animal, en este caso definimos la
    // clase animal con la propiedad $nombre string.
    class Animal{

        public string $nombre;

        public function __construct($nombre){
            $this -> nombre = $nombre; 
        }
    }

    // Creamos la variable $gato y instanciamos un objeto animal 
    // pasando por constructor el valor gato a la propiedad $nombre del objeto.
    $gato = new Animal('gato');

    // La función de PHP var_dump() muestra el tipo de variable 
    // y su contenido, en el caso de los arrays muestra el tipo de contenido de cada campo.

    // La usamos para comprobar que no existe ninguna propiedad mas propia de la clase a parte de $nombre.
    var_dump($gato);

    // A la variable $gato que contiene un objeto instanciado de Animal, 
    // le añadimos la propiedad nueva_prop string con valor 'nueva' al vuelo.
    $gato -> nueva_prop = 'nueva';

    // Volvemos a revisar con var_dump y ahora vemos como el object(Animal) contiene 2 propiedades, 
    // $nombre que es establecida por la clase y $nueva prop que la hemos añadido posteriormente de
    // instanciar la clase.

    // Esta variable se ha añadido al objeto guardado en la variable $gato, 
    // esta propiedad no ha quedado registrada ni definida para la clase Animal.
    var_dump($gato);

    // property_exists comprueba si el objeto o la clase contienen una propiedad.
    var_dump(property_exists($gato, 'nombre')); // true
    var_dump(property_exists($gato, 'nueva_prop')); // true
    var_dump(property_exists($gato, 'noexisto')); // false
?>