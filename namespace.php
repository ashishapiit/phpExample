<?php
//Declaring multiple namespaces, bracketed syntax
namespace MyProject{

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

}
namespace AnotherProject{

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}
//It is strongly discouraged as a coding practice to combine multiple namespaces into the same file. 
//The primary use case is to combine multiple PHP scripts into the same file.
?>
<?php
//namespace MyProject\Sub\Level;
//
//const CONNECT_OK = 1;
//class Connection { /* ... */ }
//function connect() { /* ... */  }
////The above example creates constant MyProject\Sub\Level\CONNECT_OK, 
////class MyProject\Sub\Level\Connection and function MyProject\Sub\Level\connect.
?>

<?php
////Declaring multiple namespaces, simple combination syntax
//namespace MyProject;
//
//const CONNECT_OK = 1;
//class Connection { /* ... */ }
//function connect() { /* ... */  }
//
//namespace AnotherProject;
//
//const CONNECT_OK = 1;
//class Connection { /* ... */ }
//function connect() { /* ... */  }
////This syntax is not recommended for combining namespaces into a single file. 
////Instead it is recommended to use the alternate bracketed syntax.
?>


