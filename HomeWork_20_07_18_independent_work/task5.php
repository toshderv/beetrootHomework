<?
include('task7.php'); // Не обращаем внимания. Это для 7-го задания.

/**
 * Создаем массив с автозаполнением на 9999 позиций
 * strpos отдает позицию первого вхождения,
 * а т.к. у нас вхождение int, с помощью strval int переводим в sting
 */
foreach (range(0, 9999) as $number) {
  if ((strpos(strval($number), '3') !== false) && (($number % 5) != 0)) {
    echo $number . '<br>';
  }
}