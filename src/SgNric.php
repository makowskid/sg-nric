<?php

namespace makowskid\SgNric;

/**
 * Class SgNricValidator
 * @package makowskid\SgNric
 * @author  Dawid Makowski <dawid.makowski@gmail.com>
 * @author  Marshall Jones <marshall@offby3.com> https://github.com/mjallday
 */
class SgNricValidator
{

    /**
     * SgNricValidator constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $theNric
     * @return bool
     */
    public function isNricValid($theNric)
    {

        $multiples = array(2, 7, 6, 5, 4, 3, 2);

        if (!$theNric || $theNric == '') {
            return false;
        }

        if (strlen($theNric) != 9) {
            return false;
        }

        $total = 0;
        $count = 0;
        $numericNric = 0;

        $first = $theNric[0];
        $last = $theNric[strlen($theNric) - 1];

        if ($first != 'S' && $first != 'T') {
            return false;
        }

        $numericNric = substr($theNric, 1, strlen($theNric) - 2);

        if (!is_numeric($numericNric)) {
            return false;
        }

        while ($numericNric != 0) {
            $total += ($numericNric % 10) * $multiples[sizeof($multiples) - (1 + $count++)];

            $numericNric /= 10;
            $numericNric = floor($numericNric);
        }

        $outputs = '';
        if (strcmp($first, "S") == 0) {
            $outputs = ['J', 'Z', 'I', 'H', 'G', 'F', 'E', 'D', 'C', 'B', 'A'];
        } else {
            $outputs = array['G', 'F', 'E', 'D', 'C', 'B', 'A', 'J', 'Z', 'I', 'H'];
        }

        return $last == $outputs[$total % 11];

    }

    /**
     * @param $fin
     * @return bool
     */
    public function isFinValid($fin)
    {
        $multiples = [2, 7, 6, 5, 4, 3, 2];
        if (!$fin || $fin == '') {
            return false;
        }

        if (strlen($fin) != 9) {
            return false;
        }

        $total = 0;
        $count = 0;
        $numericNric = 0;
        $first = $fin[0];
        $last = $fin[strlen($fin) - 1];

        if ($first != 'F' && $first != 'G') {
            return false;
        }

        $numericNric = substr($fin, 1, strlen($fin) - 2);

        if (!is_numeric($numericNric)) {
            return false;
        }

        while ($numericNric != 0) {
            $total += ($numericNric % 10) * $multiples[sizeof($multiples) - (1 + $count++)];

            $numericNric /= 10;
            $numericNric = floor($numericNric);
        }

        $outputs = array();

        if (strcmp($first, 'F') == 0) {
            $outputs = ['X', 'W', 'U', 'T', 'R', 'Q', 'P', 'N', 'M', 'L', 'K'];
        } else {
            $outputs = ['R', 'Q', 'P', 'N', 'M', 'L', 'K', 'X', 'W', 'U', 'T'];
        }

        return $last == $outputs[$total % 11];
    }
}
