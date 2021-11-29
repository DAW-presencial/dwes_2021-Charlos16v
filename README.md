# Respuestas Examen Practico

## EX 3:

## EX 4:

## EX 5:
En el fichero 5.php encontramos la definicion de la clase padre Vehiculo, y a continuacion la definicion de la clase Coche hija de Vehiculo.

En vehiculo estan definidos los metodos magicos __get y __set de forma que ambos comprueban antes si la propiedad existe en el objeto(programacion defensiva). 
Estos devuelven o settean la propiedad ya sea privada o protected, ya que el metodo se encuentra dentro de la definicion del objeto por lo que tiene acceso a las propiedades.

En las pruebas realizadas abajo se instancia primero un objeto Vehiculo, y le setteamos por el constructor la propiedad nombre, a continuacion mediante el metodo magico __set setteamos la propiedad $codigoMotor, y a continuacion mediante el metodo magico __get la obtenemos y la printeamos por pantalla.

A continuacion volvemos a repetir la misma secuencia anterior pero en vez de usar la clase Vehiculo para instanciar usamos la clase Coche que es hija de Vehiculo.
Como podemos observar el comportamiento es como en el caso anterior con Vehiculo, la hija accede a los metodos magicos de su clase padre Vehiculo y los usa!

Si una propiedad es protected o privada en la clase padre pero tenemos los metodos magicos definidos podremos manejar sus valores.
## EX 6:
