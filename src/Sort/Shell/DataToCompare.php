<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/30
 * Time: 5:20 PM
 */

namespace Sort\Shell;


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

    public function compareTo(Comparable $obj)
    {
        // TODO: Implement compareTo() method.
        if($this->valueToCompare > $obj->valueToCompare) return +1;
        else if($this->valueToCompare < $obj->valueToCompare) return -1;
        else return 0;
    }
}