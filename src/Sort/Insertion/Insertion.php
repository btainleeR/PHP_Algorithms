<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/27
 * Time: 1:05 PM
 */

namespace Sort\Insertion;



use InterfaceR\Comparable;

class Insertion
{
    public function sort(&$arrayToSort) {
        $N = sizeof($arrayToSort);

        for($i=1; $i<$N; $i++) {
            for($j=$i; $j>0 && $this->less($arrayToSort[$j], $arrayToSort[$j-1]) ; $j--) {
                $this->exch($arrayToSort,$j,$j-1);
            }
        }
    }

    public function less(Comparable $valueA, Comparable $valueB) {
        return $valueA->compareTo($valueB) > 0 ;
    }

    public function exch(&$array, int $indexA, int $indexB) {
        $tmp = $array[$indexA];
        $array[$indexA] = $array[$indexB];
        $array[$indexB] = $tmp;
    }


}