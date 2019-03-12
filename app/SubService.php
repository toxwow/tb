<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    public $timestamps = false;
    public static function ConvertToPolish($text){
        $aArr1 = array('Ą', 'Ć', 'Ę', 'Ł', 'Ń', 'Ó', 'Ś', 'Ź', 'Ż', 'ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ź', 'ż');
        $aArr2 = array('A', 'C', 'E', 'L', 'N', 'O', 'S', 'Z', 'Z', 'a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z');
        $wynik = str_replace($aArr1, $aArr2, $text);
        $wynik = strtolower($wynik);
        $alias_new = str_replace(' ', '-', $wynik);
        return $alias_new;
    }
}
