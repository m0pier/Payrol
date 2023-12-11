<?php
    namespace App\Pagos\modelo;

    class empleado
    {
        private $nombres;
        private $sueldo;
        private $ventas;
        private $porcentaje;

        public function __construct($nombres, $sueldo, $ventas, $porcentaje)
        {
            $this -> nombres = $nombres;
            $this -> sueldo = $sueldo;
            $this -> ventas = $ventas;
            $this -> porcentaje = $porcentaje;
        }

        public static function aporteIESS($sueldo, $porcentaje)
        {
            $decimal = floatval($porcentaje)/100;
            $aporte = $sueldo * $decimal;
            return $aporte;
        }
        
        public function setComisionCinco($ventas)
        {
            $this -> ventas = $ventas;
        }

        public function getComisionCinco()
        {
            $comicionC = $this -> ventas * 0.05;

            return $comicionC;

        }

        public function setComisionSiete($ventas)
        {
            $this -> ventas = $ventas;
        }

        public function getComisionSiete()
        {
            $comicionS = $this ->ventas * 0.07;

            return $comicionS;
        }

        public function setComisionDiez($ventas)
        {
          $this -> ventas = $ventas;
        }

        public function getComisionDiez()
        {
            $comicionD = $this -> ventas * 0.10;

            return $comicionD;
        }

    }
?>