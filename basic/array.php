
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);


// as of PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo"
];
?>
//<?php
//$array = array(
//    1    => "a",
//    "1"  => "b",
//    1.5  => "c",
//    true => "d",
//);
//var_dump($array);
//?>

//<?php
//$array = array(
//    "foo" => "bar",
//    "bar" => "foo",
//    100   => -100,
//    -100  => 100,
//);
//var_dump($array);
//?>

//<?php
//$array = array("foo", "bar", "hello", "world");
//var_dump($array);
//?>

//<?php
//$array = array(
//         "a",
//         "b",
//    6 => "c",
//         "d",
//);
//var_dump($array);
//?>

//<?php
// Accessing array elements
//$array = array(
//    "foo" => "bar",
//    42    => 24,
//    "multi" => array(
//         "dimensional" => array(
//             "array" => "foo"
//         )
//    )
//);
//
//var_dump($array["foo"]);
//var_dump($array[42]);
//var_dump($array["multi"]["dimensional"]["array"]);
//?>
As of PHP 5.4 it is possible to array dereference the result of a function or method call directly. Before it was only possible using a temporary variable.

As of PHP 5.5 it is possible to array dereference an array literal.

//<?php
//function getArray() {
//    return array(1, 2, 3);
//}
//
//// on PHP 5.4
//echo $secondElement = getArray()[1];
//
//// previously
//$tmp = getArray();
//$secondElement = $tmp[1];
//
//// or
// list(, $secondElement) = getArray();


//?>

//<?php
//$arr = array(5 => 1, 12 => 2);
//
//$arr[] = 56;    // This is the same as $arr[13] = 56;
//                // at this point of the script
//
//$arr["x"] = 42; // This adds a new element to
//                // the array with key "x"
//                print_r($arr);               
//unset($arr[5]); // This removes the element from the array
//print_r($arr);    
//unset($arr);    // This deletes the whole array
//print_r($arr);    
//?>

//<?php

//// Create a simple array.
//$array = array(1, 2, 3, 4, 5);
//print_r($array);
//
//// Now delete every item, but leave the array itself intact:
//foreach ($array as $i => $value) {
//    unset($array[$i]);
//}
//print_r($array);
//
//// Append an item (note that the new key is 5, instead of 0).
//$array[] = 6;
//print_r($array);
//
//// Re-index:
//$array = array_values($array);
//$array[] = 7;
//print_r($array);
//?>

//<?php
//$colors = array('red', 'blue', 'green', 'yellow');
//
//foreach ($colors as $key=>$abc) {
//    echo $key;
//    echo "Do you like $abc?\n";
//}

//?>



//<?php
//Example #11 One-based index
$firstquarter  = array(1 => 'January', 'February', 'March');
print_r($firstquarter);
//?>