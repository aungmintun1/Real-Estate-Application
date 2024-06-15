<?php 
namespace App\Helper;

class Helper {
    public static function slugify($string) {
        // Assume $string is already UTF-8 or convert as necessary
        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $string = preg_replace('/[^a-z0-9- ]/i', '', $string);
        $string = str_replace(' ', '-', $string);
        $string = trim($string, '-');
        $string = strtolower($string);

        return empty($string) ? 'n-a' : $string;
    }
}
