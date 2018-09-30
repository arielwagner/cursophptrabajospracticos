<?php
/*
* Clase Financiera para los modelos de prueba
* del curso de PHP
* --- PHP ---
*/
class Finance {
		
    	public $_pagos;
    	public $_tna;
    	const TNA_MENSUAL = 12;
    	public $_tnaMensual;
    	public $_monto;
    	public $_presMonto;
    	public $_cuota;
    	public $_saldo;
    	public $_deuda;
    	
    	/**
    	 * Calcula el préstamo en función al monto y los meses en cuotas abonadas.
    	 */
    	public function calcular() {
    		// Determinar como mínimo un mes. 
    		// No se puede dividir por cero.
    		// Calcular cuota y el monto.
    		$this->_tnaMensual = $this->_tna/self::TNA_MENSUAL;
    		$this->_cuota = $this->pago($this->_tnaMensual/100, $this->_monto, $this->_pagos);
    		$this->_presMonto = $this->_cuota * $this->_pagos;   		
    		// Obtener los array para el número de cuotas
    		// sobre deuda y saldo
    		$this->_saldo[1] = 0;
    		$this->_deuda[1] = $this->_presMonto;
    		for($i = 1; $i < $this->_pagos + 1; $i++) {
    			if($i == 1) {
    				$this->_saldo[$i] = $this->_deuda[$i] - $this->_cuota;
    			} else {
    				$this->_deuda[$i] = $this->_saldo[$i - 1];
    				$this->_saldo[$i] = $this->_deuda[$i] - $this->_cuota;
    			}
    		}
    	}
    	
    	/*
    	 * Fórmula para el cálculo del préstamo.
    	 */
	    private function pago($tnaMes, $valor, $meses) {
			return (($valor * $tnaMes) * (1/(pow(1 + $tnaMes, $meses) - 1))) + ($valor * $tnaMes);
		}
 	}
?>
