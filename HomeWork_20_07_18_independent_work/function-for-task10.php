<?
/**
 * Сортировка пузырьком.
 * Метод не эффективен и используется только в учебных целях!
 * Сортирует численный массив
 * 
 * @param array
 * @param callable
 * @return array
 */
function bubbleSort(array $arr, callable $callback = NULL) {
  $c = count($arr) - 1;
  do {
    $swapped = false;
    for ($i = 0; $i < $c; ++$i) {
      if ($arr[$i] > $arr[$i + 1]) {
        list($arr[$i + 1], $arr[$i]) = array($arr[$i], $arr[$i + 1]);
        $swapped = true;
      }
    }
  } while ($swapped);

  if ($callback) {
    $arr = call_user_func($callback, $arr);
  }

  return $arr;
}