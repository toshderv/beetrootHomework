<?
/** Задача 1: Информация о товарах в корзине 
 * Написать функцию для получения итогов (общей информации) о корзине покупок. 
 * Функция принимает массив c информацией о выбранных товарах примерно такого вида:
 * $products = array(
 *   array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
 *   array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
 *   array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
 * );
 * Возвращает массив, который содержит:
 * • Общую сумму покупок
 * • Общее количество выбранных товаров
 */
echo '<h2>Задача 1: Информация о товарах в корзине</h2>';

/**
 * Функция для вывода результатов пользователю его корзины
 * 
 * @param array $goods
 * @return array $userBasket
 */
function userBasket($goods) {
  $userBasket = array(
    'totalPrice' => 0, 'totalCount' => 0
  );

  foreach ($goods as $valueGoods) {
    $userBasket['totalPrice'] += $valueGoods['price'] * $valueGoods['quantity'];
    $userBasket['totalCount'] += $valueGoods['quantity'];
  }

  return $userBasket;
}

$products = array(
  array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
  array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
  array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2)
);

$userBasketArray = userBasket($products);
echo 'Общая сумма покупок: '.$userBasketArray['totalPrice'].
     '<br>Общее количество выбранных товаров: '.$userBasketArray['totalCount'].'<br><br>';

/**
 * Задача 2: Квадратное уравнение. Частично используйте код из прошлого домашнего задания.
 * Написать функцию, которая решает квадратное уравнение. Функция принимает 3 аргумента (коефициенты).
 * Возвращает:
 * • Массив с двумя корнями х1, х2, если D > 0
 * • Один корень х, если D = 0
 * • false, если D < 0
 */
echo '<h2>Задача 2: Квадратное уравнение. Частично используйте код из прошлого домашнего задания.</h2>';

/**
 * Функция для решения квадратного уравнения
 * 
 * @param array $variables
 * @return array $result
 */
function quadraticEquation($variables) {
  foreach ($variables as $keyVariable => $valueVariable) {
    if ($valueVariable['a'] != 0) {
      $D = pow($valueVariable['b'], 2) - 4 * ($valueVariable['a']) * ($valueVariable['c']);
      if ($D > 0) {
        $result[$keyVariable] = [
          'a' => $valueVariable['a'],
          'b' => $valueVariable['b'],
          'c' => $valueVariable['c'],
          'x1' => round((-$valueVariable['b'] - sqrt($D)) / (2 * $valueVariable['a']), 2),
          'x2' => round((-$valueVariable['b'] + sqrt($D)) / (2 * $valueVariable['a']), 2),
          'comment' => 'Дискриминант больше нуля. Уравнение имеет два действительных корня.'
        ];
      } elseif ($D == 0) {
        $result[$keyVariable] = [
          'a' => $valueVariable['a'],
          'b' => $valueVariable['b'],
          'c' => $valueVariable['c'],
          'x1' => (-$valueVariable['b'] - sqrt($D)) / (2 * $valueVariable['a']),
          'x2' => NULL,
          'comment' => 'Дискриминант равен нулю. Уравнение имеет один действительный корень.'
        ];
      } else {
        $result[$keyVariable] = [
          'a' => $valueVariable['a'],
          'b' => $valueVariable['b'],
          'c' => $valueVariable['c'],
          'x1' => NULL,
          'x2' => NULL,
          'comment' => 'Дискриминант меньше нуля. Уравнение не имеет кореней.<br>'
        ];
      }
    } else {
      $result[$keyVariable] = [
        'a' => $valueVariable['a'],
        'b' => $valueVariable['b'],
        'c' => $valueVariable['c'],
        'x1' => NULL,
        'x2' => NULL,
        'comment' => '<strong>Ошибка!</strong> Коэффициент «a» должен присутствовать и не может быть нулем.<br>'
      ];
    }
  }

  return $result;
}

$variables = array(
  array('a' => 0, 'b' => 24, 'c' => -54),
  array('a' => -1, 'b' => -16, 'c' => -67),
  array('a' => 1, 'b' => -6, 'c' => 9),
  array('a' => -2, 'b' => -2, 'c' => 0),
  array('a' => -5, 'b' => 35, 'c' => 300),
  array('a' => 1, 'b' => 26, 'c' => 175),
  array('a' => -5, 'b' => -90, 'c' => -400),
  array('a' => 4, 'b' => -8, 'c' => 0),
  array('a' => 1, 'b' => 28, 'c' => 197),
  array('a' => 1, 'b' => 1, 'c' => -56),
  array('a' => -3, 'b' => 42, 'c' => 0),
  array('a' => -4, 'b' => 48, 'c' => 0),
  array('a' => 2, 'b' => 44, 'c' => 210)
);

$outputQuadraticEquation = quadraticEquation($variables);

foreach ($outputQuadraticEquation as $keyOutput => $valueOutput) {
  echo 'Уравнение вида, где «a» = '.$valueOutput['a'].
       ', «b» = '.$valueOutput['b'].
       ', «c» = '.$valueOutput['c'].
       ', имеет следующий результат:<br>'.
       $valueOutput['comment'].'<br>';

  if (is_numeric($valueOutput['x1']) && is_numeric($valueOutput['x2'])) {
    echo 'x<sub><small>1</small></sub> = '.$valueOutput['x1'].', x<sub><small>2</small></sub> = '.$valueOutput['x2'].'<br><br>';
  } elseif (is_numeric($valueOutput['x1']) && is_null($valueOutput['x2'])) {
    echo 'x<sub><small>1</small></sub> = '.$valueOutput['x1'].'<br><br>';
  } 
}
// echo '<pre>';
// var_dump(quadraticEquation($variables));
// echo '</pre>';

/**
 * Задача 3: Удаление отрицательных элементов из массива (вариант 1)
 * Есть массив с элементами (отрицательными и положительными). Нужно написать такую функцию
 * deleteNegtives(), которая будет принимать массив, удалять из него элементы меньше 0 и
 * возвращать этот массив.
 * Подсказки:
 * Можно использовать цикл foreach для обхода элементов массива.
 * Пример:
 * // Сейчас $digits содержит отрицательные и положительные числа
 * $digits = array(2, -10, -2, 4, -5, 1, 6, 200, 1.6, -95);
 * $digits = deleteNegtives($digits);
 * // Теперь $digits содержит только положительные числа * 
 */
echo '<h2>Задача 3: Удаление отрицательных элементов из массива (вариант 1)</h2>';

/**
 * Функция для вывода результатов пользователю его корзины
 * 
 * @param array $argumentsAll
 * @return array $argumentsPositive
 */
function deleteNegatives($argumentsAll) {
  $argumentsPositive = [];
  foreach ($argumentsAll as $keyArguments => $valueArguments) {
    if ($valueArguments > 0) {
      $argumentsPositive[] = $valueArguments;
    }
  }

  return $argumentsPositive;
}

$digits = array(2, -10, -2, 4, -5, 1, 6, 200, 1.6, -95);

echo '<pre>';
var_dump(deleteNegatives($digits));
var_dump($digits);
echo '</pre>';

/**
 * Задача 4: Удаление отрицательных элементов из массива (вариант 2)
 * Решить задачу №3 используя передачу аргумента по ссылке.
 * Пример:
 * $digits = array(2, -10, -2, 4, -5, 1, 6, 200, 1.6, -95);
 * // Сейчас $digits содержит отрицательные и положительные числа
 * deleteNegtives($digits);
 * // Теперь $digits содержит только положительные числа
 */
echo '<h2>Задача 4: Удаление отрицательных элементов из массива (вариант 2)</h2>';

/**
 * Функция для вывода результатов пользователю его корзины
 * 
 * @param array &$argumentsAll2
 * @return array $argumentsAll2
 */
function deleteNegatives2(&$argumentsAll2) {
  foreach ($argumentsAll2 as $keyArguments2 => $valueArguments2) {
    if ($valueArguments2 < 0) {
      unset($argumentsAll2[$keyArguments2]);      
    }
  }
  $argumentsAll2 = array_values($argumentsAll2);

  return $argumentsAll2;
}

$digits2 = array(2, -10, -2, 4, -5, 1, 6, 200, 1.6, -95);
deleteNegatives2($digits2);

echo '<pre>';
var_dump($digits2);
echo '</pre>';