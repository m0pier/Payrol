<?php
namespace App\Pagos\controlador;
use App\Pagos\modelo\empleado;

class operaciones 
{
    public static function operarComision()
    {
        $nombre = $_POST['nombres'];
        $sueldo = $_POST['sueldo'];
        $ventas = $_POST['ventas'];
        $porcentaje = $_POST['porcentaje'];

        if(isset($_POST['nombres']) && isset($_POST['sueldo']) && isset($_POST['ventas']) && isset($_POST['porcentaje']))
        {
            $empleado = new empleado($nombre, $sueldo, $ventas, $porcentaje);

            if($ventas < 1000)
            {
                $comision = 0;
            }
            elseif($ventas >= 1000 && $ventas < 2000)
            {
                $empleado->setComisionCinco($ventas);
                $comision = $empleado->getComisionCinco();  
            }
            elseif($ventas >= 2000 && $ventas < 3000)
            {
                $empleado->setComisionSiete($ventas);
                $comision = $empleado->getComisionSiete();
            }
            elseif($ventas >= 3000)
            {
                $empleado->setComisionDiez($ventas);
                $comision = $empleado->getComisionDiez();
            }

            $sueldoSin = $sueldo + $comision;
            $aporte = empleado::aporteIESS($sueldo, $porcentaje);
            $sueldoTotal = $sueldoSin - $aporte;

            echo "<strong>Nombre del empleado: </strong> $nombre \n<br>";
            echo "<strong>Sueldo ingresado:</strong> $ $sueldo \n <br>";
            echo "<strong>Valor de ventas:</strong> $ $ventas \n <br>";
            echo "<strong>Porcentaje de aporte al IESS: </strong> % $porcentaje \n <br>";
            echo "<strong>Valor de aporte al IESS: </strong> $ $aporte \n <br>";
            echo "<strong>Valor por comision de ventas: </strong> $ $comision\n <br>";
            echo "<strong>Valor a percibir por sueldo: </strong> $ $sueldoTotal";
        }
    }
}
?>