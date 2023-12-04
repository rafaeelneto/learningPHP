<?php
/*
 * Variables
 */
$firstName = 'John';


echo $firstName;

$firstName = 'Jane';

echo $firstName;

// variable variables
$foo = 'bar';

// $bar = 'baz';
$$foo = 'baz';

echo $bar;

/*
 * Constants
 */
// defined at runtime
define('PI', 3.14);
define('STATUS_PAID', 1);

echo PI;
echo STATUS_PAID;

// defined at compile time
const BRAND_NAME = 'Acme';

echo BRAND_NAME;

/*
 * Data Types
 */

# Scalar
    // string - 'foo', "bar"
    $name = 'John';
    // bool - true / false
    $isHuman = true;
    // int - 1, 2, 3
    $buys = 3;
    // float - 1.3
    $height = 6.2;

    echo $name . '<br/>';
    echo $isHuman . '<br/>';
    echo $buys . '<br/>' ;
    echo $height;

# Compound
    // array
    $array = ['John', 'Jane', 'Joe', 1, true, -9.2];
    print_r($array);

    // object
    // callable
    // iterable

# special
    // resource
    // null

var_dump($buys);

function sum($a, $b) {
    return $a + $b;
}

// set strict mode
// declare(strict_types=1);

// type coercion
function sum_typed(int $a, int $b) {
    return $a + $b;
}

echo sum_typed(1, '2') . '<br/>'; 

// type casting

$x = (int) '5';

var_dump($x);