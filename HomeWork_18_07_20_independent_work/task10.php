<?
include('function-for-task10.php');

$arrRandomNumbers = range(-50, 50, 3);
shuffle($arrRandomNumbers);

echo 'Ниже приведен массив, с хаотично разбросанными функцией shuffle числами от -50 до 50 c шагом 3:<br>';
foreach ($arrRandomNumbers as $value) {
  echo $value;
  echo (!next($arrRandomNumbers)) ? '.<br><br>' : ', ';
}

$arrSortForOnlyFunction = bubbleSort($arrRandomNumbers);
echo 'Сейчас проверим работу только функции bubbleSort без callback-a<br>';
foreach ($arrSortForOnlyFunction as $value) {
  echo $value;
  echo (!next($arrSortForOnlyFunction)) ? '.<br><br>' : ', ';
}

$arrSortWithCallback = (bubbleSort($arrRandomNumbers, function ($arrCallback) {
  $arr = [];

  foreach ($arrCallback as $value) {
    if ($value % 2 && $value < 0) {
      $arr[] = $value;
    }
  }

  return $arr;
}));

echo 'Сейчас проверим работу функции bubbleSort c callback, которая выводит нечетные числа ниже нуля<br>';
foreach ($arrSortWithCallback as $value) {
  echo $value;
  echo (!next($arrSortWithCallback)) ? '.<br><br>' : ', ';
}