<?php
//declare(strict_types = 1);
//
//function fun1(int $a, int $b){
//    echo $a+ $b;
//}
//fun1(10, 21);

?>


<?php
//
//$makefoo = true;
//
///* We can't call foo() from here 
//   since it doesn't exist yet,
//   but we can call bar() */
//
//bar();
//
//if ($makefoo) {
//  
//  function foo()
//  {
//    echo "I don't exist until program execution reaches me.\n";
//  }
//   foo();
//}
//
///* Now we can safely call foo()
//   since $makefoo evaluated to true */
//
//if ($makefoo) foo();
//
//function bar() 
//{
//  echo "I exist immediately upon program start.\n";
//}

?>
<?php
//function foo() 
//{
//  function bar() 
//  {
//    echo "I don't exist until foo() is called.\n";
//  }
//}
//
///* We can't call bar() yet
//   since it doesn't exist. */
//
//foo();
//
///* Now we can call bar(),
//   foo()'s processing has
//   made it accessible. */
//
//bar();

?>

<?php
//function recursion($a)
//{
//    if ($a < 100) {
//        echo "$a\n";
//        recursion($a + 1);
//        echo '1234';
//    }
//}
////recursion(0);
//Recursion(0);
?>
<?php
//function add_some_extra(&$string)
//{
//    $string .= 'and something extra.';
//}
//$str = 'This is a string, ';
//add_some_extra($str);
//echo $str;    // outputs 'This is a string, and something extra.'
?>

<?php
////Default argument values
//function makecoffee($type = "cappuccino")
//{
//    return "Making a cup of $type.\n";
//}
//echo makecoffee();
//echo makecoffee(null);
//echo makecoffee("espresso");
?>

<?php
//function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
//{
//    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
//    return "Making a cup of ".join(", ", $types)." with $device.\n";
//}
//echo makecoffee();
//echo makecoffee(array("cappuccino", "lavazza"), "teapot");
//?>
//<?php
//function makeyogurt($type = "acidophilus", $flavour)
//{
//    return "Making a bowl of $type $flavour.\n";
//}
// 
//echo makeyogurt("raspberry");   // won't work as expected
?>
<?php
//class C {}
//class D extends C {}
//
//// This doesn't extend C.
//class E {}
//
//function f(C $c) {
//    echo get_class($c)."\n";
//}
//
//f(new C);
//f(new D);
//f(new E);
?>

<?php
/////Basic interface type declaration
//interface I { public function f(); }
//class C implements I { public function f() {} }
//
//// This doesn't implement I.
//class E {}
//
//function f(I $i) {
//    echo get_class($i)."\n";
//}
//
//f(new C);
//f(new E);
?>

<?php
////Nullable type declaration
//class C {}
//
//function f(C $c = null) {
//    var_dump($c);
//}
//
//f(new C);
//f(null);
?>
<?php
//function sum(...$numbers) {
//    $acc = 0;
//    foreach ($numbers as $n) {
//        $acc += $n;
//    }
//    return $acc;
//}
//
//echo sum(1, 2, 3, 4);
?>
<?php
//function add($a, $b) {
//    return $a + $b;
//}
//
//echo add(...[1, 2])."\n";
//
//$a = [1, 2];
//echo add(...$a);
?>
<?php
//function foo() {
//    echo "In foo()<br />\n";
//}
//
//function bar($arg = '')
//{
//    echo "In bar(); argument was '$arg'.<br />\n";
//}
//
//// This is a wrapper function around echo
//function echoit($string)
//{
//    echo $string;
//}
//
//$func = 'foo';
//$func();        // This calls foo()
//
//$func = 'bar';
//$func('test');  // This calls bar()
//
//$func = 'echoit';
//$func('test');  // This calls echoit()
?>
<?php
//class Foo
//{
//    function Variable()
//    {
//        $name = 'Bar';
//        $this->$name(); // This calls the Bar() method
//    }
//    
//    function Bar()
//    {
//        echo "This is Bar";
//    }
//}
//
//$foo = new Foo();
//$funcname = "Variable";
//$foo->$funcname();  // This calls $foo->Variable()

?>
<?php
//class Foo
//{
//    static $variable = 'static property';
//    static function Variable()
//    {
//        echo 'Method Variable called';
//    }
//}
//
//echo Foo::$variable; // This prints 'static property'. It does need a $variable in this scope.
//$variable2 = "Variable2";
//Foo::$variable2;  // This calls $foo->Variable() reading $variable in this scope.

?>
<?php
$abc = function($match) {
    return strtoupper($match[1]);
};

echo preg_replace_callback('~-([a-z])~',$abc , 'hello-world');
// outputs helloWorld

?>
<?php
//$message = 'hello';
//
//// No "use"
//$example = function () {
//    var_dump($message);
//};
////$example();
//
//// Inherit $message
//$example = function () use ($message) {
//    var_dump($message);
//};
////$example();
//
//// Inherited variable's value is from when the function
//// is defined, not when called
//$message = 'world';
////$example();
//
//// Reset message
//$message = 'hello';
//
//// Inherit by-reference
//$example = function () use (&$message) {
//    //$message = "world";
//    var_dump($message);
//};
//
////$example();
//$message;
//
//// The changed value in the parent scope
//// is reflected inside the function call
//$message = 'world';
////$example();
//
//// Closures can also accept regular arguments
//$example = function ($arg) use ($message) {
//    var_dump($arg . ' ' . $message);
//};
//$example("hello");
//?>
<?php
// A basic shopping cart which contains a list of added products
// and the quantity of each product. Includes a method which
// calculates the total price of the items in the cart using a
// closure as a callback.
class Cart
{
    const PRICE_BUTTER  = 1.00;
    const PRICE_MILK    = 3.00;
    const PRICE_EGGS    = 6.95;

    protected $products = array();
    protected  $abc = 20;
    public function add($product, $quantity)
    {
        $this->products[$product] = $quantity;
    }
    
    public function getQuantity($product)
    {
        return isset($this->products[$product]) ? $this->products[$product] :
               FALSE;
    }
    
    public function getTotal($tax)
    {
        $total = 0.00;
        
        $callback =
            function ($quantity, $product) use ($tax, &$total)
            {
                $pricePerItem = constant(__CLASS__ . "::PRICE_" .
                    strtoupper($product));
                $total += ($pricePerItem * $quantity) * ($tax + 1.0);
            };
          
        array_walk($this->products, $callback);
        return round($total, 2);
    }
}

$my_cart = new Cart;

// Add some items to the cart
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);

// Print the total with a 5% sales tax.
print $my_cart->getTotal(0.05) . "\n";
// The result is 54.29
?>
<?php

//class Test
//{
//    public function testing()
//    {
//        return function() {
//            var_dump($this);
//        };
//    }
//}
//
//$object = new Test;
//$function = $object->testing();
//$function();
    
?>
<?php

//class Foo
//{
//    function __construct()
//    {
//        $func = static function() {
//            var_dump($this);
//        };
//        $func();
//    }
//};
//new Foo();

?>
<?php
//class a{}
//$func =   function() {
//    // function body
//    echo "Hi";
//};
//$abc = new a;
//$func = $func->bindTo($abc);
//$func();
?>

<?php

class A {
    function __construct($val) {
        $this->val = $val;
    }
    function getClosure() {
        //returns closure bound to this object and scope
        return function() { return $this->val; };
    }
}

$ob1 = new A(1);
$ob2 = new A(2);

$cl = $ob1->getClosure();
echo $cl(), "\n";
$cl = $cl->bindTo($ob2);
echo $cl(), "\n";
?>

