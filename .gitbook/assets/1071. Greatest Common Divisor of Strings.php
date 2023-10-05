<?php

class Solution
{
    public function gcd(string $a, string $b): string
    {
        $remainder = $a % $b;

        return ($remainder) ? $this->gcd($b, $remainder) : $b;
    }

    /** @noinspection PhpUnused */
    public function gcdOfStrings(string $str1, string $str2): string
    {
        $long = strlen($str1);
        $short = strlen($str2);
        $longStr = $str1;
        $shortStr = $str2;

        if ($long < $short) {
            [$long, $short, $longStr, $shortStr] = [$short, $long, $shortStr, $longStr];
        }

        if ($long % $short == 0) {
            return substr_count($longStr, $shortStr) == $long / $short ? $shortStr : '';
        } else {
            $gcd = $this->gcd($long, $short);
            $gcdStr = substr($longStr, 0, $gcd);

            return substr_count($longStr, $gcdStr) == $long / $gcd && substr_count($shortStr, $gcdStr) == $short / $gcd
                ? $gcdStr : '';
        }
    }
}
