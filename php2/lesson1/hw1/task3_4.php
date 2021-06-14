<?php

echo '<br>Дан код, Что он выведет на каждом шаге? Почему?:<br>
class A {<br>
    public function foo() {<br>
        static $x = 0;<br>
        echo ++$x;<br>
    }<br>
}<br>
$a1 = new A();<br>
$a2 = new A();<br>
$a1->foo();<br>1<br>
$a2->foo();<br>2<br>
$a1->foo();<br>3<br>
$a2->foo();<br>4<br>
так как это все одна переменная, значения просто суммируются<br>

Немного изменим п.5:<br>
class A {<br>
    public function foo() {<br>
        static $x = 0;<br>
        echo ++$x;<br>
    }<br>
}<br>
class B extends A {<br>
}<br>
$a1 = new A();<br>
$b1 = new B();<br>
$a1->foo(); <br>1<br>
$b1->foo(); <br>1<br>
$a1->foo(); <br>2<br>
$b1->foo();<br>2<br>
так как тут две переменных, то в первых двух строках 0+1, во вторых 1+1<br>';