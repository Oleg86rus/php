<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
echo "Hello world!<br>";?>

<?php
$name = "GeekBrains user";
echo "Hello, $name!<br>";
?>

<?php
define('MY_CONST', 100);
echo MY_CONST . "<br>";
?>




<?php
$name = "Artem";
define("ZODIAC_SIGN", "KOZIROK");
echo "HELLO $name!";
echo "<br>You are " . ZODIAC_SIGN . "!<br>";
?>

<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>


<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3<br>";
?>


<?php
$a = 1;
echo "$a";
echo '$a<br>';
?>

<?php
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;
?>

<?php
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень
echo $a - $b . '<br>'; // вычитание
?>

<?php
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
$a = 0;
echo $a++;     // Постинкремент
echo ++$a;    // Преинкремент
echo $a­­--;     // Постдекремент
echo --$a;
?>

<?php
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно?>

<?php
// 3 задание
echo "<br><br><br><br><b>3 задание.</b><br>
Объяснить, как работает данный код: <br>
";
echo "a = 5;<br>
b = '05';<br>
var_dump($a == $b); <br>Почему true?<br>
var_dump((int)'012345'); <br>Почему 12345?<br>
var_dump((float)123.0 === (int)123.0);<br>Почему false?<br>
var_dump((int)0 === (int)'hello, world');<br> Почему true?<br>
<br>
Ответы:<br>
a - число<br>
б - строка<br>

";

$a = 5; // это число
$b = '05';  // это строка
var_dump($a == $b);                             // Почему true?    
echo "<br> Потому что нестрогое сравнение<br>";
var_dump((int)'012345');                        // Почему 12345?   
echo "<br> Явное преобразование, у чисел впереди не бывает нуля<br>";
var_dump((float)123.0 === (int)123.0); // Почему false?        
echo "<br> Левая часть явно приводится к типу float, правая часть к типу int. Строгое сравнение<br>";
var_dump((int)0 === (int)'hello, world'); // Почему true?     
echo "<br> Потому что в правой части нет чисел, получился ноль, а при сравнении оба нуля и получилась истина <br>";
?>



<?php
// 5 задание. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, 
//надо, чтобы получилось b = 1, a = 2. 
//Дополнительные переменные использовать нельзя.
echo "<br><br><b>Задание 5</b><br><br>";
$a = rand(0,10);
$b = rand(0,10);

echo "\$a = $a<br>";
echo "\$b = $b<br><br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = $a<br>";
echo "b = $b<br>";
?>



</body>
</html>
