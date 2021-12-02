<?php
class A {
    function calling(){
        static::hello();
        $this->hello();
    }
}

class B extends A {
    function hello(){
        print "hehe";
    }
}
$variable = new A;
?> 

<h1><?php echo $variable->calling() ?></h1>