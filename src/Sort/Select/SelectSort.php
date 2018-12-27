<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/27
 * Time: 9:28 AM
 */
namespace Sort\Select;
use InterfaceR\Comparable;

class SelectSort
{

    public function sort(&$arrayToSort)
    {


        $N = sizeof($arrayToSort);

        for($i=0; $i<$N; $i++) {
            $min = $i;

            for($j=$i+1; $j<$N; $j++) {
                if(!$this->less($arrayToSort[$min], $arrayToSort[$j])) $min = $j;
            }

            $this->exch($arrayToSort, $min, $i);
        }
    }


    public function less(Comparable $valueA, Comparable $valueB)
    {
        return $valueA->compareTo($valueB) > 0;
    }

    public function exch(&$array, $indexA, $indexB)
    {
        $temp = $array[$indexA];
        $array[$indexA]  = $array[$indexB];
        $array[$indexB] = $temp;
    }


}