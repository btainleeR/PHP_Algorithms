<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/27
 * Time: 12:40 PM
 */
namespace Sort\Insertion;
use InterfaceR\Comparable;

class DataToCompare implements Comparable
{
    private $valueToCompare;

    public function __construct(int $valueToCompare) {
        $this->valueToCompare = $valueToCompare;
    }

    public function getValue() : int {
        return $this->valueToCompare;
    }

    public function compareTo(Comparable $obj) {
        if($this->valueToCompare > $obj->valueToCompare) return +1;
        else if($this->valueToCompare < $obj->valueToCompare) return -1;
        else return 0;
    }

}