<?php
echo '1.Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. <br>Затем написать скрипт, который работает по следующему принципу:
<br>если $a и $b положительные, вывести их разность;
<br>если $а и $b отрицательные, вывести их произведение;
<br>если $а и $b разных знаков, вывести их сумму;
<br>Ноль можно считать положительным числом.<br><br>';
$a = rand(-10, 10);
$b = rand(-10, 10);
if ($a >= 0 && $b >= 0){
    echo "a = $a, b = $b - положительные, их разность равна ";
    echo $a - $b;
} elseif ($a < 0 && $b < 0){
    echo "a = $a, b = $b - отрицательные, произведение равно ";
    echo $a * $b;
} else {
    echo "a =$a, b = $b - разных знаков, сумма равна ";
    echo $a + $b;
};
echo '<br>';

// функция
echo '<br>решение функцией<br>';
function one($num1, $num2){
    if ($num1 >= 0 && $num2 >= 0) {
        return 'Разность значений = ' . ($num1 - $num2);
    } elseif ($num1 <=0 && $num2 <= 0) {
        return 'произведение значений = ' . ($num1 * $num2);
    } return 'сумма значений = ' . ($num1 + $num2);
}
echo one($a,$b);


echo '<br><br>2. Присвоить переменной $а значение в промежутке [0..15]. <br>С помощью оператора switch организовать вывод чисел от $a до 15. <br>При желании сделайте это задание через рекурсию.
<br>';
$a = rand(0, 15);
echo '<br>Метод switch<br>';
switch ($a) {
    case 0:
        echo "{$a} "; $a++;
    case 1:
        echo "{$a} "; $a++;
    case 2:
        echo "{$a} "; $a++;
    case 3:
        echo "{$a} "; $a++;
    case 4:
        echo "{$a} "; $a++;
    case 5:
        echo "{$a} "; $a++;
    case 6:
        echo "{$a} "; $a++;
    case 7:
        echo "{$a} "; $a++;
    case 8:
        echo "{$a} "; $a++;
    case 9:
        echo "{$a} "; $a++;
    case 10:
        echo "{$a} "; $a++;
    case 11:
        echo "{$a} "; $a++;
    case 12:
        echo "{$a} "; $a++;
    case 13:
        echo "{$a} "; $a++;
    case 14:
        echo "{$a} "; $a++;
    case 15:
        echo "{$a} "; $a++;
}

echo '<br><br>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. <br>В делении проверьте деление на 0 и верните текст ошибки.<br><br>';
$a = rand(-10, 10);
$b = rand(-10, 10);
echo "a = $a, b = $b";
function summ($num1, $num2) {
    return ($num1 + $num2);
}
echo '<br>функция суммирования = ' . summ($a, $b);
function sub($num1, $num2) {
    return ($num1 - $num2);
}
echo '<br>функция вычитания = ' . sub($a, $b);

function mult($num1, $num2) {
    return ($num1 * $num2);
}
echo '<br>функция умножения = ' . mult($a, $b);

function div($num1, $num2) {
    return ($num2!=0)?$num1/$num2:"Деление на 0";
}
echo '<br>функция деления = ' . div($a, $b);

echo '<br><br>4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), <br>где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. <br>В зависимости от переданного значения операции выполнить одну из арифметических операций <br>(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).<br><br>
';

function calc($a, $b, $operation){
    switch ($operation){
        case '+': $func = "summ"; break;
        case '-': $func = "sub"; break;
        case '*': $func = "mult"; break;
        case '/': $func = "div";
    };
    echo "$func <br>";
    if (function_exists($func))
        return $func($a, $b);
        else return 'Недопустимые значение параметров';
}

echo "calc(1, 1.5,'+') = " . calc(1, 1.5,'+') . '<br>';
echo "calc(1, 1.5,'-') = " . calc(1, 1.5,'-') . '<br>';
echo "calc(9, 1.5,'/') = " . calc(9, 1.5,'/') . '<br>';
echo "calc(10, 1.5,'*') = " . calc(10, 1.5,'*') . '<br>';
echo "calc(1, 0,'/') = " . calc(1, 0,'/') . '<br>';
echo "calc(1, 1.5,'()') = " . calc(1, 1.5,'()') . '<br>';
?>