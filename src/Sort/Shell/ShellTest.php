<?php
/**
 * Created by PhpStorm.
 * User: xueliang
 * Date: 2018/12/30
 * Time: 5:20 PM
 */

namespace Sort\Shell;

require '../../../vendor/autoload.php';


class ShellTest
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

        $shellSort = new Shell();
        $shellSort->sort($arrayToSort);


        foreach($arrayToSort as $value) {
            echo $value->getValue() . ' ';
        }
    }
}


ShellTest::main();