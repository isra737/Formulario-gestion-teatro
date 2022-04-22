# Formulario-gestion-teatro

Este es un pequeño proyecto de prueba sobre gestionar las sillas de un teatro (o cine, sirve para ese tipo de instalaciones).

El objetivo de este pequeño proyecto es poner en práctica lo aprendido en el lenguaje PHP. A continuación se dará los datos de la situación a resolver 

El teatro tiene una sala de 5 filas y cada una cuenta con 5 sillas Para las transacciones se tienen las siguientes reglas:


* Solo se puede modificar la informacion de un puesto a la vez.
* Si el puesto que se esta eligiendo, está libre debe aparecer la letra "L" en mayuscula (L), si el puesto de casualiad esta reservado debe mostrar la letra "R" en mayuscula (R), 
si el puesto ya esta vendido debe aparecer la letra "V" en mayuscula (V).
* Un puesto que este libre (L) se puede pasar a estado vendido (V) (mediante la opcion comprar) o reservado (R).
* Un puesto en estado reservado (R) puede ser pasado a estado vendido (V) o liberado (L).
* Un puesto en estado vendido (V) no puede cambiar a estado reservado (R) ni liberado (L).
* Siempre que el usuario intente hacer una operacion no valida ( esto quiere decir, como pasar un puesto en estado vendido (V) ha estado liberado (L)),
el sistema va a mostrarte un mensaje (hecho en un script) que le indique que la operacion no pudo realizarse o El puesto ya esta vendido no se puede liberar, reservar 
o compàr, depende de lo que el usuario este eligiendo.


# Lenguaje utilizado 

El lenguaje es PHP, pero se puede realizar con cualquier tipo de lenguaje de programación 

# Licencia

Completamente gratuita, la persona que vea este codigo es libre de usarlo, editarlo, descargarlo, es completamente libre sin derechos de autor o cosas por el estilo :) 
