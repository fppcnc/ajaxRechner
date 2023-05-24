<?php

// retrieve the input values
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$op = $_POST['op'];

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

// perform the calculation based on the operator
switch ($op) {
    case 'add':
       $result = $val1 + $val2;
       break;
    case 'subtract':
       $result = $val1 - $val2;
       break;
    case 'multiply':
       $result = $val1 * $val2;
       break;
    case 'divide':
       $result = $val1 / $val2;
       break;
    case 'modulo':
       $result = $val1 % $val2;
       break;
    default:
        $result = '';
        break;
}

//if (isset($result)) echo $result;
// return the result
echo $result;