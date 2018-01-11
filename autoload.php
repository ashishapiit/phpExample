<?php
//kumar.ashish034@gmail.com
//8088615148
//Factory Design Pattern
//Singleton Design Pattern


spl_autoload_register(function ($class_name) {
   
    include $class_name . '.php';
});
include 'Person.php';

$obj  = new Person();
//$obj2 = new MyClass2(); 
?>
<?php
spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name.");
});

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
//?>