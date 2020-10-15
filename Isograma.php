<?php

/**
 * @author Manuel Jesús Márquez Benítez <manueljesus.marquez@iesdonana.org>
 * @copyright Copyright (c) 2020 Manuel Jesús Márquez Benítez
 * @license 
 */

/**
 * Comprueba si una cadena tiene algún caracter repetido
 * 
 * @param string $s La cadena a comprobar
 * @return bool true si esta formado por caracteres unicos
 *              false si tiene algún caracter repetido.
 */

function esIsograma($s)
{
    $s = mb_str_split(mb_ereg_replace('[- ]', '', mb_strtolower($s)));
    return array_unique($s);
}