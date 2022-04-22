<!DOCTYPE html>
<html>

<head>
    <title>Formularios de Tranferencia en Teatro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <style>
            .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:bold;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
        </style>
</head>
<?php

        /*
        Israel Gómez
        Taller “Uso de formularios para transferencia”
        */

        //Se requieren las funciones para imprimir el escenario y para enviar las acciones del usuario
        require("escenario.php");
        require("accion.php");

         //Se ejecuta el if cuando el usuario envie la informacion del formulario
         if(isset($_REQUEST["Enviar"])){

                //Se captura la información que se ha enviado del formulario
    
                $fila = $_POST['fila'];
                $puesto= $_POST['puesto'];
                $accion= $_POST['accion'];
                $StringEscenario=$_POST['ListEscenario'];
    
             //El String que se genera, esta oculto y se convierte en un array
    
                $count=0;
                for($i=0;$i<5;$i++){
                    for($j=0;$j<5;$j++){
                        $count=5*$i+$j;
    
                        //Cada captura que llega de cada elemento del array, se esta extrayendo dicho elemento del String
                        $ListEscenario[$i][$j]=substr($StringEscenario,$count,1);
                    }
                    $count=0;
                }
      
                
             // Se ejecuta la función para mostrar el Escenario, que esta dado por el Array modificado
             $ListEscenario=Accion($fila,$puesto,$accion,$ListEscenario);
      
        //Se ejecuta la funcion para mostrar el Escenario, dado el Array modificado
        Escenario($ListEscenario);
}


             //Se tiene que ejecutar el siguiente elseif cuando el usuario borra la informacion del formulario y cuando se recarga o refresca la pagina 

             else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
             $ListEscenario=array(array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"),array("L","L","L","L","L"));
             Escenario($ListEscenario);
}
?>
    

<body>
    <table style="margin:auto;">
        <form method="post">

            <!-- Se tiene que preparar el array $lista en un string y de forma oculta -->
            <input type="text" name="ListEscenario" value="<?php foreach ($ListEscenario as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>" style="display:none" />

            <!-- Se crean los inputs, que van a ser el radio que van a capturar la informacion y las acciones -->

            <tr>
                <td>Fila: </td>
                <td>

                    <!-- Se muestra la lista con las posibles opciones para la fila-->

                    <select name="fila">
                        <option size="4">1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
            </tr>
            <tr>

                <td>Puesto: </td>
                <td>

                    <!-- Se muestra la lista con las posibles opciones para la puesto-->

                    <select name="puesto">
                        <option size="4">1</option>
                        <option size="4">2</option>
                        <option size="4">3</option>
                        <option size="4">4</option>
                        <option size="4">5</option>
                    </select>
                </td>
            </tr>

            <!-- Se muestra el radio button con las posibles acciones -->

            <tr>
                <td>Reservar: </td>
                <td>
                    <input type="radio" name="accion" value="R" />
                </td>
            </tr>
            <tr>
                <td>Comprar: </td>
                <td>
                    <input type="radio" name="accion" value="V" />
                </td>
            </tr>
            <tr>
                <td>Liberar: </td>
                <td>
                    <input type="radio" name="accion" value="L" checked="checked" />
                </td>
            </tr>
            <tr>

                <!-- Se muestran los botones con las acciones de enviar la información o borrar toda la informacion que se hayan ingresado-->

                <td>
                    <input type="submit" value="Enviar" name="Enviar" />
                </td>
                <td>
                    <input type="submit" value="Borrar" name="Reset" />
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
