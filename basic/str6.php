<?php
// Show all errors
//error_reporting(E_ALL);
//
//$great = 'fantastic';
//
//// Won't work, outputs: This is { fantastic}
//echo "This is { $great}";
//
//// Works, outputs: This is fantastic
//echo "This is {$great}";
//
//// Works
//echo "This square is {$square->width}00 centimeters broad."; 
//
//
//// Works, quoted keys only work using the curly brace syntax
//echo "This works: {$arr['key']}";
//
//
//// Works
//echo "This works: {$arr[4][3]}";
//
//// This is wrong for the same reason as $foo[bar] is wrong  outside a string.
//// In other words, it will still work, but only because PHP first looks for a
//// constant named foo; an error of level E_NOTICE (undefined constant) will be
//// thrown.
//echo "This is wrong: {$arr[foo][3]}"; 
//
//// Works. When using multi-dimensional arrays, always use braces around arrays
//// when inside of strings
//echo "This works: {$arr['foo'][3]}";
//
//// Works.
//echo "This works: " . $arr['foo'][3];
//
//echo "This works too: {$obj->values[3]->name}";
//
//echo "This is the value of the var named $name: {${$name}}";
//
//echo "This is the value of the var named by the return value of getName(): {${getName()}}";
//
//echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";
//
//// Won't work, outputs: This is the return value of getName(): {getName()}
//echo "This is the return value of getName(): {{getName()}}";
//?>
//<?php
//class foo {
//    var $bar = 'I am bar.';
//}
//
//$foo = new foo();
//$bar = 'bar';
//$baz = array('foo', 'bar', 'baz', 'quux');
//echo "{$foo->$bar}\n";
//echo "{$foo->{$baz[1]}}\n";
//?>

//<?php
// Show all errors.
//error_reporting(E_ALL);
//
//class beers {
//    const softdrink = 'rootbeer';
//    public static $ale = 'ipa';
//}
//
//$rootbeer = "A & W";
//$ipa = 'Alexander Keith\'s';
//
//// This works; outputs: I'd like an A & W
//echo "I\"d like an {${beers::softdrink}}\n";
//
//// This works too; outputs: I'd like an Alexander Keith's
//echo "I'd like an {${beers::$ale}}\n";
//?>

//<?php
// Get the first character of a string
//$str = 'This is a test.';
//$first = $str[0];
//
//// Get the third character of a string
//echo $third = $str[2];
//
//// Get the last character of a string.
//$str = 'This is still a test.';
//echo $last = $str[strlen($str)-1]; 
//
//// Modify the last character of a string
//$str = 'Look at the sea';
//echo $str[strlen($str)-1] = 'e';
//echo $str;

//?>

//<?php
echo $foo = 1 + "10.5";                // $foo is float (11.5)
echo $foo = 1 + "-1.3e3";              // $foo is float (-1299)
echo $foo = 1 + "bob-1.3e3";           // $foo is integer (1)
echo $foo = 1 + "bob3";                // $foo is integer (1)
echo $foo = 1 + "10 Small Pigs";       // $foo is integer (11)
echo $foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2)
echo $foo = "10.0 pigs " + 1;          // $foo is float (11)
echo $foo = "10.0 pigs " + 1.0;        // $foo is float (11)     
//?>