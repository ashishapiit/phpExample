<?php
$a = 1234; // decimal number
$a = -123; // a negative number
$a = 0123; // octal number (equivalent to 83 decimal)
echo $a;
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)

$a = 0b11111111; // binary number (equivalent to 255 decimal)

/*Formally, the structure for integer literals is:

decimal     : [1-9][0-9]*
            | 0

hexadecimal : 0[xX][0-9a-fA-F]+

octal       : 0[0-7]+

binary      : 0b[01]+

integer     : [+-]?decimal
            | [+-]?hexadecimal
            | [+-]?octal
            | [+-]?binary
 * 
 */
?>
