<?php
namespace Savannabits\PrimevueDatatables;

class Utils {
    public static function removeAccentsOracle($str) {
        $a = array('Á', 'É', 'Í', 'Ó', 'Ú', 'À', 'È', 'Ì', 'Ò', 'Ù', 'Ü');
        $b = array('A', 'E', 'I', 'O', 'U', 'A', 'E', 'I', 'O', 'U', 'U');
        return str_replace($a, $b, $str);
    }
}
