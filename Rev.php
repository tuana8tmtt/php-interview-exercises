<?php

declare(strict_types=1);

namespace Exercises\Reverse;

/**
 * Create methods that reverse given input by its positions.
 *
 * @method static int int(int $number)
 * @method static string string(string $string)
 * @example Rev::int(12) === 21
 * @example Rev::int(912) === 219
 * @example Rev::int(120) === 21
 * @example Rev::int(-12) === -21
 * @example Rev::int(-120) === -21
 * @example Rev::string('qwerty')  === 'ytrewq'
 * @example Rev::string('apple')  === 'elppa'
 */
final class Rev
{
    public function string(string $string){
        echo strrev($string);
    }
    public function int(int $int){
        if($int > 0) {
            $num = strval($int);
            $rev =  strrev($num);
            echo (int)$rev;
        }else if($int <0){
            $num = strval(abs($int));
            $rev =  '-'.strrev($num);
            echo (int)$rev;

        }
    }
}
Rev::string('apple');
Rev::int(-120);