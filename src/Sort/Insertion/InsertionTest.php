<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/30
 * Time: 4:43 PM
 */
namespace Sort\Insertion;

require "../../../vendor/autoload.php";

class InsertionTest
{
    public static function main() {
        $N = 50;
        $arrayToSort = array();

        for($i=0; $i<$N; $i++) {
            $arrayToSort[$i] = new DataToCompare(rand(100,1000));
        }

        foreach($arrayToSort as $value) {
            echo $value->getValue() . ' ';
        }
        echo PHP_EOL;
        $insertionSort = new Insertion();
        $insertionSort->sort($arrayToSort);

        foreach($arrayToSort as $value) {
            echo $value->getValue() . ' ';
        }
    }
}


InsertionTest::main();