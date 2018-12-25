<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/25
 * Time: 9:14 AM
 */
namespace Sort\Select;

use InterfaceR\Comparable;

class Select implements Comparable
{

    public function desc()
    {
        echo "This is desc";
    }
    public function compareTo(Comparable $obj)
    {
        // TODO: Implement compareTo() method.
    }
}