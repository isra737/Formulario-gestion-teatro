<?php
function Accion($fila,$puesto,$accion,$ListEscenario){

        /*Se evalua la opción del usuario dependiendo de lo contenido en el Array
        Si de casualidad el puesto elegido por el usuario esta libre se modifica el Array con la acción que haya elegido*/


        if($ListEscenario[$fila-1][$puesto-1]=="L"){
            $ListEscenario[$fila-1][$puesto-1]=$accion;
        }

        //Si el puesto elegido por el suaurio ya esta vendido/ocupado se va a mostrar una alerta en forma de modificación de lo sucedio 

        else if($ListEscenario[$fila-1][$puesto-1]=="V"){


            echo "<script>alert('El puesto ya esta vendido";
            if($accion=="L"){echo " no se puede liberar";}
            else if($accion=="R"){echo " no se puede reservar";}
            else if($accion=="V"){echo " no se puede volver a vender";}
            echo "')";
            echo "</script>'";
        }

        //Si el puesto ya esta reservado y la accion es diferente a la de reservar se modifica el array con la accion elegida por el usuario

        else if($ListEscenario[$fila-1][$puesto-1]=="R" && $accion=="R"){
            echo "<script>
            alert('El puesto ya esta Reservado');
            </script>'";
        }

        //Si el puesto esta reservado y la accion es diferente a reservar se modifica el array con la accion elegida por el usuario

        else if($ListEscenario[$fila-1][$puesto-1]=="R" && $accion!="R"){
            $ListEscenario[$fila-1][$puesto-1]=$accion;
        }

        //Se retorna el Array que se ha modificado
        
        return $ListEscenario;
}
?>
