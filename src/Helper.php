<?php namespace Mehedi\PhpAlphacountCli;

class Helper{             

    public static function alphaCount(string $string): int {
        $chars = str_split($string);

        $total = 0;
        foreach($chars as $char) {
            if(ctype_alpha($char))
                $total++;
        }

        return $total;
    }
}