<?PHP

//declare(strict_types=1);    //¬ключаем строгую типизацию

$title = 'PHP Functions';

//function exchange(&$a, &$b)
//{
//    $buffer = $a;
//    $a = $b;
//    $b = $buffer;
//}

$exchange = fn(&$a, &$b) => [$a, $b] = [$b, $a];
//$exchange = fn(&$a, &$b) => [$a, $b] = [$b, $a];


function print_values($a, $b, $delimiter = ';')
{
    echo '<pre>';
    echo "$a\t$b$delimiter";
    echo '</pre>';
}

function sum_values(...$values)
{
    $sum = 0;
    for ($i = 0; $i < count($values); $i++) {
        $sum += $values[$i];
    }
    return $sum;
}
function FillRand(&$arr, $size = 5, $minRand = 0, $maxRand = 100)
{
    for ($i = 0; $i < $size; $i++) {
        $arr[$i] = rand($minRand, $maxRand);
    }
}
function PrintArr($arr)
{
    echo '<pre>';
    for ($i = 0; $i < count($arr); $i++) {
        echo "$arr[$i]\t";
    }
    echo '</pre>';
}

function increment()
{
    static $counter = 0;
    $counter += 10;
    return $counter;
}
function decrement()
{
    static $counter = 0;
    $counter -= 10;
    return $counter;
}

function summator($limit)
{
    static $sum = 0;
    $sum++;
    if ($sum < $limit)
        summator($limit);
    return $sum;
}

/////////////////////////////////////////////////////////


function sum(int $a, int $b):int
{
    return $a + $b;
}
//function sum(float $a, float $b): float
//{
//    return $a + $b;
//

$arrow_function     = fn () => 'Hello! I am Arrow Function!';   //Lambda
$non_arrow_function = function () { return 'Hello! I am NOT arrow function'; };

$PI = 3.14;
//$circle_area = function (float $radius) use ($PI)
//{
//    return $PI * $radius * $radius;
//};
 $circle_area = fn (float $radius) => $PI * $radius * $radius;


require 'index.view.php';