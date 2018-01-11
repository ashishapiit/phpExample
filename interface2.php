<?php
//Example #2 Extendable Interfaces
interface a
{
    //public function __construct();
    public function foo();
}

interface b extends a
{
     function baz(Baz $baz);
}

// This will work
class c implements b
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}
//
//// This will not work and result in a fatal error
//class d implements b
//{
//    public function foo()
//    {
//    }
//
//    public function baz(Foo $foo)
//    {
//    }
//}
?>