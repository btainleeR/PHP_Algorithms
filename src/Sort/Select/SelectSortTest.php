<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/27
 * Time: 9:29 AM
 */
namespace Sort\Select;
use InterfaceR\Comparable;
require_once '../../../vendor/autoload.php';

class SelectSortTest
{
    public static function main()
    {
        //make a comparable array
        $arrayToCompare = Array();
        $N = 10;

        for($i=0; $i<$N; $i++) {
            $arrayToCompare[$i] = new DataToCompare(random_int(100,1000));
        }

        foreach($arrayToCompare as $value) {
            echo $value->getValue() . '  ';
        }
        echo PHP_EOL;
        //make a selectSort
        $selectSort = new SelectSort();
        $selectSort->sort( $arrayToCompare);

        foreach($arrayToCompare as $value) {
            echo $value->getValue() . '  ';
        }
        echo PHP_EOL;

    }
}

SelectSortTest::main();