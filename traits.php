<?php
//trait ezcReflectionReturnInfo {
//    public $type = 1;
//    public function getReturnType() { /*1*/ }
//    public function getReturnDescription() { /*2*/ }
//}
//
//class ezcReflectionMethod extends ReflectionMethod {
//    use ezcReflectionReturnInfo;
//    /* ... */
//}
//
//class ezcReflectionFunction extends ReflectionFunction {
//    use ezcReflectionReturnInfo;
//    /* ... */
//}
?>

<?php
//class Base {
//    public function sayHello() {
//        echo 'Hello ';
//    }
//}
//
//trait SayWorld {
//    public function sayHello() {
//        //parent::sayHello();
//        echo 'This is trait function!';
//    }
//    public function sayHi(){
//        echo "Hi, Everyone";
//    }
//}
//
//class MyHelloWorld extends Base {
//    use SayWorld;
//    
//}
//
//$o = new MyHelloWorld();
//$o->sayHello();
?>

<?php
//trait Hello {
//    public function sayHello() {
//        echo 'Hello ';
//    }
//}
//
//trait World {
//    public function sayWorld() {
//        echo 'World';
//    }
//}
//
//class MyHelloWorld {
//    use Hello, World;
//    public function sayExclamationMark() {
//        echo '!';
//    }
//}
//
//$o = new MyHelloWorld();
//$o->sayHello();
//$o->sayWorld();
//$o->sayExclamationMark();
?>
<?php
//trait A {
//    public function smallTalk() {
//        echo 'a';
//    }
//    public function bigTalk() {
//        echo 'A';
//    }
//}
//
//trait B {
//    public function smallTalk() {
//        echo 'b';
//    }
//    public function bigTalk() {
//        echo 'B';
//    }
//}
//
//class Talker {
//    use A, B {
//        A::smallTalk insteadof B;
//        B::bigTalk insteadof A;
//    }
//}
//
//class Aliased_Talker {
//    use A, B {
//        B::smallTalk insteadof A;
//        A::bigTalk insteadof B;
//        B::bigTalk as talk;
//    }
//}
//
//$myObj = new Aliased_Talker();
//$myObj->bigTalk();
?>

<?php
//trait HelloWorld {
//    public $newVar = "Hello";
//    public function sayHello() {
//        echo 'Hello World!';
//    }
//}
//
//// Change visibility of sayHello
//class MyClass1 {
//    //public $newVar = "Hello";
//    use HelloWorld { sayHello as public; }
//    function sayHi(){
//        echo $this->newVar;
//        $this->sayHello();
//    }
//}
//
//// Alias method with changed visibility
//// sayHello visibility not changed
//class MyClass2 {
//    use HelloWorld { sayHello as private myPrivateHello; }
//    function sayHi(){
//        echo $this->sayHello();
//        //$this->sayHello();
//    }
//}
//
//$newVar = new MyClass2();
//$newVar->sayHello();
?>

<?php
//trait HelloWorld {
//    public function sayHello() {
//        echo 'Hello World!';
//    }
//}
//
//// Change visibility of sayHello
//class MyClass1 {
//    use HelloWorld { sayHello as protected; }
//}
//
//// Alias method with changed visibility
//// sayHello visibility not changed
//class MyClass2 {
//    use HelloWorld { sayHello as private myPrivateHello; }
//}
?>
<?php
//trait Hello {
//    public function sayHello() {
//        echo 'Hello ';
//    }
//    public function __construct(){
//        echo "Ashish";
//    }
//}
//
//trait World {
//    public function sayWorld() {
//        echo 'World!';
//    }
//}
//
//trait HelloWorld {
//    use Hello, World;
//}
//
//class MyHelloWorld {
//    use HelloWorld;
//}
//
//$o = new MyHelloWorld();
//$o->sayHello();
//$o->sayWorld();
?>
<?php
trait Hello {
    public function sayHelloWorld() {
        echo 'Hello'.$this->getWorld();
    }
    abstract public function getWorld();
}

class MyHelloWorld {
    private $world;
    use Hello;
    public function getWorld() {
        return $this->world;
    }
    public function setWorld($val) {
        $this->world = $val;
    }
}
?>
<?php
//trait Counter {
//    public static $abc = "12";
//    public function inc() {
//        static $c = 0;
//        $c = $c + 1;
//        echo "$c\n";
//        echo self::$abc;
//    }
//}
//
//class C1 {
//    use Counter;
//}
//
//class C2 {
//    use Counter;
//    
//}
//
//$o = new C1(); $o->inc(); // echo 1
//$p = new C2(); $p->inc(); // echo 1
//echo C1::$abc;
?>

<?php
trait StaticExample {

    public static function doSomething() {
        return 'Doing something';
    }
}

class Example {
    use StaticExample;
}

Example::doSomething();
?>