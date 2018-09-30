<?php
    /*
    * Clase Financiera para los modelos de prueba
    * del curso de PHP
    * --- PHP ---
    */
    class Finance {
		
        // Calcula el n�mero de pagos seg�n el monto y el plazo en meses...
	    function pago($tnaMes, $valor, $meses) {
			return (($valor * $tnaMes) * (1/(pow(1 + $tnaMes, $meses) - 1))) + ($valor * $tnaMes);
		}
 	}
?>