<?
// Для объединения численного и строкового массивов
$arrIntegerFull = range(0, 9);
$arrString = range('a', 'j');
// Для объединения однотипных массивов
$arrIntegerEven = range(0, 9, 2);
$arrIntegerOdd = range(1, 9, 2);
//var_dump($arrIntegerFull, $arrString, $arrIntegerEven, $arrIntegerOdd);

$arrMixedType = array_merge($arrIntegerFull, $arrString);
sort($arrMixedType);
var_dump($arrMixedType);

$arrSameType = array_merge($arrIntegerEven, $arrIntegerOdd);
sort($arrSameType);
var_dump($arrSameType);