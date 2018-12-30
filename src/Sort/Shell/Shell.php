<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/30
 * Time: 5:20 PM
 */

namespace Sort\Shell;

use InterfaceR\Comparable;

class Shell
{
    public function sort(&$arrayToSort) {
        $N = sizeof($arrayToSort);

        $h = 1;

        while($h< $N/3) $h = 3*$h +1;

        while($h >= 1) {
            for($i = $h; $i<$N; $i++) {
                for($j = $i; $j >= $h && $this->less($arrayToSort[$j], $arrayToSort[$j-$h]); $j-=$h) {
                    $this->exch($arrayToSort, $j, $j-$h);
                }
            }
            $h = $h/3;
        }
    }

    public function less(Comparable $valueA, Comparable $valueB) : bool {
        return $valueA->compareTo($valueB) > 0;
    }

    public function exch(&$array, int $indexA, int $indexB) {
        $tmp = $array[$indexA];
        $array[$indexA] = $array[$indexB];
        $array[$indexB] = $tmp;
    }
}