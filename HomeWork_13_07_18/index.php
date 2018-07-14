<?
// Задача 1: Дана строка 'HelloWorld'. Сделайте из нее строку 'HELLOWORLD'.
$strHelloWorld = 'HelloWorld';
$strHelloWorldUppercase = strtoupper($strHelloWorld);
echo $strHelloWorldUppercase.'<br><br>';

// Задача 2: В переменной $date лежит дата в формате '23-11-2035'. Преобразуйте эту дату в формат '2035.11.'.
$date = '23-11-2035';
$dateNewFormat = date('Y.m.d', strtotime($date));
echo $dateNewFormat.'<br><br>';

// Задача 3: Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
$strBeforeExplode = 'html css php';
$strAfterExplode = explode(' ', $strBeforeExplode);
foreach ($strAfterExplode as $valueArrayItemExplode) {
  echo $valueArrayItemExplode.'<br>';
}
echo 'Или <br>';
echo mb_substr($strBeforeExplode, 0, 4).'<br>';
echo mb_substr($strBeforeExplode, 5, 3).'<br>';
echo mb_substr($strBeforeExplode, 9, 3).'<br><br>';

// Задача 4: Дана строка '30.11.2016'. Замените все точки на дефисы
$strBeforeStrReplace = '30.11.2016';
$strAfterStrReplace = str_replace('.', '-', $strBeforeStrReplace);
echo $strAfterStrReplace.'<br><br>';

/*
  Задача 5: Дана строка 'слова слова слова.'.
  В конце этой строки может быть точка, а может и не быть.
  Сделайте так, чтобы в конце этой строки гарантировано стояла точка.
  То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать.
  Задачу решите без всяких ифов.
*/
$strBeforeDotTest = 'слова слова слова. ';
$strAfterDotTest = rtrim($strBeforeDotTest, ' \t\n\r\0\x0B.').'.';
echo $strAfterDotTest.'<br><br>';

// Задача 6: Создайте массив, заполненный числами от 1 до 100. Найдите сумму элементов данного массива. (Повторяю использовать функции)
$arrCreate = range(1, 100);
$arrSum = array_sum($arrCreate);
echo $arrSum.'<br><br>';
//var_dump($arrCreate);

// Задача 7: Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.
$keySearchIntThree = array_search(3, $arrCreate);
echo 'Если далее вы увидете не false(а значит мы не нашли необходимого значения), значит вы видете ключ с найденный значением: <strong>'.
      $keySearchIntThree.'</strong><br><br>';

/* 
  Задача 8: Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'.
  Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.
*/
$arrForMergeFirst = [1, 2, 3];
$arrForMergeSecond = ['a', 'b', 'c'];
$arrMerge = array_merge($arrForMergeFirst, $arrForMergeSecond);
var_dump($arrMerge);
echo '<br><br>';

// Задача 9: Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива, а в $values – значения.
$arrSplitValues = ['a'=>1, 'b'=>2, 'c'=>3];
$arrOnlyKeys = array_keys($arrSplitValues);
$arrOnlyValues = array_values($arrSplitValues);
var_dump($arrOnlyKeys, $arrOnlyValues);
echo '<br><br>';

// Задача 10: Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.
$arrBeforeUnique = ['a', 'b', 'c', 'b', 'a'];
$arrAfterUnique = array_unique($arrBeforeUnique);
var_dump($arrAfterUnique);