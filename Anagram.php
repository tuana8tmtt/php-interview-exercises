<?php

declare(strict_types=1);

namespace Exercises\Anagram;

/**
 * Two strings are anagrams if same characters are used in both.
 * Only case insensitive characters, not spaces or punctuation should be counted.
 *
 * @method static bool check(string $first, string $second)
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis, 'lives') === true
 */
final class Anagram
{
    public static function check(string $first, string $second){
        $first = strtolower($first);
        $second = strtolower($second);
        $array1 = str_split($first, 1);
        sort($array1);
        $array2 = str_split($second, 1);
        sort($array2);
        if($array1 == $array2){
            return true;
        }elseif ($array1 != $array2){
            return false;
        }else {
            return false;
        }

    }
}
var_dump(Anagram::check('roast beef', 'goat roast'));