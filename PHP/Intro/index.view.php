<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title><?php echo $for; ?></title>
</head>
<body>
    <h1><?php echo 'Hello PHP on IIS' ?></h1>
    <h2><?php echo $for;?></h2>
    <h2>Functions:</h2>
    <?PHP print_value('Test value', 1024)?>
    <?PHP echo "5 != ", factorial(5)?>
    <?PHP echo 2**-3;?>
    <p>Statements</p>
        <h2>Operators:</h2>
        <ol>
            <li>Арифметические операторы: <code>+, -, *, /, %, ** &mdash; оператор возведения в степень</code>; <br>
                <?PHP echo 2**8;?>
            </li>
            <li>Оператор <code>=</code> работает так же как в C++;</li>
            <li>Increment/Decrement (++/--)
                <?PHP
                    /*for($i = 0; $i<10; $i++)
                    {
                        echo "$i\t\t\t";
                    }*/
                    $i = 3;
                    //$j = ++$i;
                    $i = ++$i + ++$i;
                    echo "$i<br>";
                    //echo "$j<br>";
                ?>
            </li>
            <li>Составные присваивания &mdash; представляют собой комбинации арифметических и побитовых операторв с оператором <code>'='</code>
                <?PHP 
                    $i = 2;
                    $j = 3;
                    $i ^= $i;
                    echo $i;
                ?>
            </li>
            <li>Операторы сравнения: <code>==, !=, >, <, >=, <=, <b>===, !==</b></code>
            <li>Логические операторы: !, ||, &&</li>
            <li>Побитовые операторы:
            <code>
                <ul>
                    <li>~   NOT <?PHP echo ~5;?> </li>
                    <li>|    OR <?PHP echo 5 | 3;?></li>
                    <li>&   AND <?PHP echo 5 & 3?></li>
                    <li>^   XOR</li>
                    <li><<  Shift left</li>
                    <li>>>  Shift right</li>
                </ul>
            </code>
            </li>
            </li>
        </ol>
    <!-- <p>$name = value</p> -->
    <?php
        
        die();
        echo '<hr>';
        echo '<h1>Type conversions:</h1>';
        echo 'C-like notation: (type)value;<br>';
        $str = '123';
        $num = 12.3;
        echo var_dump($str+((string)$num));
        echo '<br>';
        echo 1+true;
        echo '<hr>';
        echo 'var_dump()<br>';
        echo var_dump('3.14');
        //echo 'NULL';
        echo '<hr>';
        $variable = NULL;
        //unset($variable);
        echo is_null($variable);
        //echo 123 === '123';
        //echo $variable;
        echo '<hr>';
        die();
        echo '<hr>';
        echo NAME;
        echo '<br>';
        //echo PI;
        //for($i=0; $i<10; $i++)
        //{
            //echo '<p>';
            //echo '<div style="display:flex;justify-content:space-between;">';
            //    echo '<div style="width:50px">';
            //        echo $i;
            //    echo '</div>';
            //echo '</div>';
            //echo '</p>';
        //}
        if(true)
        {
            //const PI = 3.14;
            define('PI', '3.14');
            echo PI;
            echo '<br>';
            define(PREFIX . '_1', '1');
            define(PREFIX . '_2', '2');
            define(PREFIX . '_3', '3');

            echo OPTION_1;
            echo '<br>';
            echo $int;
        }
    ?>
    <h2>Типы данных</h2>
    <ol>
        <li>Скалярные типы (Scalar types):
            <ul>
                <li>Boolean:    <?php echo true; echo FALSE; ?></li>
                <li>Integer:<br>
                    Size:<?php echo PHP_INT_SIZE; ?><br>
                    PHP_INT_MIN:<?php echo PHP_INT_MIN; echo '<br>'; echo 'PHP_INT_MAX:'; echo PHP_INT_MAX;?>
                    </li>
                <li>Float (double, real)</li>
                <li>String: <?php echo strlen('Hello')?>
                    <ul>
                    <li>'Single-quotted string'</li>
                    <li>"Double-quotted string"</li>
                    <li>Heredoc string (RAW-строка) - НЕ востринимает Escape-последовательности, и выводится в том виде, в котором определена.</li>
                    <li>Nowdoc string (RAW-строка)</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Составные типы (Conpound types):
            <ul>
                <li>Array</li>
                <li>Object</li>
                <li>callable</li>
                <li>iterable</li>
            </ul>
        </li>
        <li>Специальные типы (Special types)
            <ul>
                <li>Null</li>
                <li>Reference</li>
            </ul>
        </li>
    </ol>
    
    <?PHP
        echo '<hr>';
        echo $heredoc_string;
        echo '<hr>';
        echo $nowdoc_string;
        echo '<hr>';

        echo $escape_sequences;
    ?>
</body>
</html>