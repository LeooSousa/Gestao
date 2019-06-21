<?php

/**
**
**  BY iCODEART
**
**********************************************************************
**                      REDES SOCIALES                            ****
**********************************************************************
**                                                                ****
** FACEBOOK: https://www.facebook.com/icodeart                    ****
** TWIITER: https://twitter.com/icodeart                          ****
** YOUTUBE: https://www.youtube.com/c/icodeartdeveloper           ****
** GITHUB: https://github.com/icodeart                            ****
** TELEGRAM: https://telegram.me/icodeart                         ****
** EMAIL: info@icodeart.com                                       ****
**                                                                ****
**********************************************************************
**********************************************************************
**/

// Evaluar los datos que ingresa el usuario y eliminamos caracteres no deseados.
function evaluar($valor) 
{
	$nopermitido = array("'",'\\','<','>',"\"");
	$valor = str_replace($nopermitido, "", $valor);
	return $valor;
}

// Formatear una fecha a microtime para añadir al evento, tipo 1401517498985.
function _formatear($Data)
{
	return strtotime(substr($Data, 6, 4)."-".substr($Data, 3, 2)."-".substr($Data, 0, 2)." " .substr($Data, 10, 6)) * 1000;
}
 ?>
