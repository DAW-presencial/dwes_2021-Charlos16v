# Respuestas Examen Practico

## EX 3:
PHP_INT_MAX es una CONSTANTE PREDEFINIDA, dependiendo del sistema de bits (32 o 64), del equipo en el que estamos usando la constante nos devolvera un valor u otro.
Normalmente int(2147483647) en sistemas de 32 bits y int(9223372036854775807) en sistemas de 64 bits.
Para ejecutar el fichero: php 3.php

## EX 4:
Se pueden añadir propiedades al vuelo en php, pero estas se añadiran al objeto instanciado, no quedaran registradas en la clase ni definidas + explicacion en fichero 4.php junto al codigo.

## EX 5:
En el fichero 5.php encontramos la definicion de la clase padre Vehiculo, y a continuacion la definicion de la clase Coche hija de Vehiculo.

En vehiculo estan definidos los metodos magicos __get y __set de forma que ambos comprueban antes si la propiedad existe en el objeto(programacion defensiva). 
Estos devuelven o settean la propiedad ya sea privada o protected, ya que el metodo se encuentra dentro de la definicion del objeto por lo que tiene acceso a las propiedades.

En las pruebas realizadas abajo se instancia primero un objeto Vehiculo, y le setteamos por el constructor la propiedad nombre, a continuacion mediante el metodo magico __set setteamos la propiedad $codigoMotor, y a continuacion mediante el metodo magico __get la obtenemos y la printeamos por pantalla.

A continuacion volvemos a repetir la misma secuencia anterior pero en vez de usar la clase Vehiculo para instanciar usamos la clase Coche que es hija de Vehiculo.
Como podemos observar el comportamiento es como en el caso anterior con Vehiculo, la hija accede a los metodos magicos de su clase padre Vehiculo y los usa!

Si una propiedad es protected o privada en la clase padre pero tenemos los metodos magicos definidos podremos manejar sus valores.

## EX 6:
Se ha creado un formulario que admite la carga de 2 ficheros (type file), la logica esta pensada de forma defensiva ya comprobando primero si en la superglobal $POST se ha guardado la key 'submit', esta solo estara disponible desde el momento de presionar el boton submit, mas adelante se intenta sacar de la superglobal $FILES a partir del nombre que se la dado en el input del formulario los archivos, en este caso "firstFileInput" y "secondFileInput".

Se comprueba de forma individual si cada variable ha obtenido el archivo, se comprueba que las propiedades name y size sean distintas a "" y el tamaño no sea 0, lo que implica que haya "algo" subido en el input.

Si estas comprobaciones son correctas no salta ningun alert,
y acaba llegango a else con un alert que verifica que se han guardado los 2 ficheros.