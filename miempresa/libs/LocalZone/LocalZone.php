<?php

/**
 * Desarrollado por Job Systems Solutions
 * JSS
 * Copyrigth 9-10-2013
 * @author Ariel Alejandro Wagner.
 *
 * Autorizado para usar. No cambiar.
 */
class LocalZone {
	
	/**
	 * Establecer la zona horaria acorde a su localidad.
	 * Debe usar la interfaz ILocalZone para ajustar la
	 * constante adecuada.
	 * @param unknown_type $setZoneTime
	 */
	public static function setLocalZoneTime($setZoneTime) {
		if(trim($setZoneTime)=='') {
			die('Error - Debe establecer una zona horaria.');
			exit;
		} else {
			date_default_timezone_set($setZoneTime);
		}
	}
}
?>