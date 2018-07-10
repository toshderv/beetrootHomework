<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HomeWork_08_07_18</title>
  <style>
    body{font-family:sans-serif}
    p{margin-bottom:.3125rem}
    code{display:block;margin:1rem 0;padding:.6250rem;font-size:87.5%;color:#e83e8c;word-break:break-word;border-radius:.3125rem;background-color:#eee}
    code pre{margin:0}
  </style>
</head>
<body>
  <h1>HomeWork_08_07_18</h1>

  <h2>Задача 1: Комментарии</h2>
  <p>
    Создать файл php. В начале файла добавить 2 комментария (однострочный и многострочный) с именем автора и датой выполнения.
    Напечатать приветствие при помощи echo.
  </p>
  <code>
    <pre>
      &lt;?
        // Это однострочный комментарий
        // И это тоже однострочный комментарий
        /**
          * Created by Visual Studio Code.
          * User: Anton Derevyanko
          * Date: 09.07.2018
          * Time: 23:25
          * Сomment: Это многострочный комментарий
          */
        echo 'Это сообщение можно вывести с помощью «echo»';
      ?&gt;
    </pre>
  </code>

  <h2>Задача 2: Именование переменных</h2>
  <p>
    Придумайте и запишите имена переменных для таких сущностей: название телеканала, 
    адрес производителя, цвет автомобиля, температура воды, модель телефона.
    Следуйте правилам именования переменных. Используйте lowerCamelCase для имен, 
    составленных из двух и более слов.
  </p>
  <code>
    <pre>
      &lt;?
        $tvChannelName = 'Discovery';
        $manufacturerAddress = 'г. Киев, пр. С. Бандеры, 6';
        $carColor = 'Blue';
        $waterTemperature = '+3';
        $phoneModel = 'Samsung Galaxy 7';
      ?&gt;
    </pre>
  </code>

  <h2>Задача 3: Операторы</h2>
  <ul>
    <li>
      Создайте 3 переменных с произвольными именами на свой выбор. Присвойте им 
      значения 3, 5, 8 соответственно. Выведите значения этих переменных на 
      страницу.
    </li>
    <li>
      Найдите сумму этих переменных и запишите ее в новую переменную. Выведите 
      значение новой переменной.
    </li>
    <li>
      Найдите значение такого выражения: 2+6+2/5-1. Запишите его в переменную с 
      именем $result и выведите на страницу.
    </li>
  </ul>
  <code>
    <pre>
      &lt;?
        $firstNumber = 3;
        $secondNumber = 5;
        $thirdNumber = 8;
        echo $firstNumber.', '.$secondNumber.', '.$thirdNumber;
      ?&gt;
      <?
        $firstNumber = 3;
        $secondNumber = 5;
        $thirdNumber = 8;
        echo 'Result php: '.$firstNumber.', '.$secondNumber.', '.$thirdNumber;
      ?>.
    </pre>
  </code>
  <code>
    <pre>
      &lt;?
        $sumNumbers = $firstNumber + $secondNumber + $thirdNumber;
        echo $sumNumbers;
      ?&gt;
      Итак, переменная $sumNumbers равна(Result php): <?
        $firstNumber = 3;
        $secondNumber = 5;
        $thirdNumber = 8;
        $sumNumbers = $firstNumber + $secondNumber + $thirdNumber;
        echo $sumNumbers;
      ?>.
    </pre>
  </code>
  <code>
    <pre>
      &lt;?
        $result = 2 + 6 + 2 / 5 - 1;
        echo $result;
      ?&gt;
      Result php: <?
        $result = 2 + 6 + 2 / 5 - 1;
        echo $result;
      ?> .
    </pre>
  </code>

  <h2>Задача 4: Копирование значений переменных и копирование переменных по ссылке</h2>
  <p>Будем использовать переменные $a, $b, $c, $d.</p>
  <ul>
    <li>Задайте значения 1 и 2 переменным $a, $b соответственно.</li>
    <li>Выведите значения переменных $a, $b.</li>
    <li>Скопируйте значение переменной $a в переменную $c.</li>
    <li>Скопируйте переменную $b в переменную $d по ссылке.</li>
    <li>Распечатайте значения переменных $c, $d.</li>
    <li>Присвойте переменным $a, $b значения 3 и 4 соответственно.</li>
    <li>Распечатайте переменнные $a, $b, $c, $d.</li>
    <li>Сделайте выводы относительно полученных результатов.</li>
  </ul>
  <code>
    <pre>
      &lt;?
        $a = 1;
        $b = 2;
        echo 'Переменная $a = '.$a.', переменная $b = '.$b.'&lt;br&gt;';
        $c =&amp; $a;
        $d =&amp; $b;
        echo 'Ссылка $c = '.$c.', ссылка $d = '.$d.'&lt;br&gt;';
        $a = 3;
        $b = 4;
        echo 'Переменная $a = '.$a.', переменная = '.$b.', ссылка = '.$c.', ссылка = '.$d;
      ?&gt;

      Result php:
      <?
        $a = 1;
        $b = 2;
        echo 'Переменная $a = '.$a.', переменная $b = '.$b.'<br>';
        $c =& $a;
        $d =& $b;
        echo '      Ссылка $c = '.$c.', ссылка $d = '.$d.'<br>';
        $a = 3;
        $b = 4;
        echo '      Переменная $a = '.$a.', переменная = '.$b.', ссылка = '.$c.', ссылка = '.$d;
      ?>.
    </pre>
  </code>

  <h2>Задача 5: Константы</h2>
  <ul>
    <li>
      Создайте 2 константы с произвольными именами со значениями 41 и 33.
    </li>
    <li>
      Найдите и выведите сумму этих констант.
    </li>
    <li>
      Попытайтесь переопределить одну из констант. Внимательно прочтите подсказку 
      об ошибке в Вашей IDE (если поддерживается).  
    </li>
  </ul>
  <code>
    <pre>
      &lt;?
        const FIRST_NUMBER = 41;
        const SECOND_NUMBER = 33;
        const SUM_FIRST_AND_SECOND_NUMBERS = FIRST_NUMBER + SECOND_NUMBER;
        echo SUM_FIRST_AND_SECOND_NUMBERS;
      ?&gt;
      Result php: <?
        const FIRST_NUMBER = 41;
        const SECOND_NUMBER = 33;
        const SUM_FIRST_AND_SECOND_NUMBERS = FIRST_NUMBER + SECOND_NUMBER;
        echo SUM_FIRST_AND_SECOND_NUMBERS;
      ?>.

      &lt;?  
        const SECOND_NUMBER = 99;
        echo SECOND_NUMBER;
      ?&gt;
      Result php: <?       
        const SECOND_NUMBER = 99;
        echo SECOND_NUMBER;
      ?>.
    </pre>
  </code>

  <h2>Задача 6: Типы переменных</h2>
  <p>Определите типы следующих переменных и выведите их на экран:</p>
  <code>
    <pre>
      &lt;?
        $a = 152;
        $b = '152';
        $c = 'London';
        $d = array(152);
        $e = 15.2;
        $f = false;
        $g = true;
        echo 'Переменная $a имеет тип: '.gettype($a);
        echo 'Переменная $b имеет тип: '.gettype($b);
        echo 'Переменная $c имеет тип: '.gettype($c);
        echo 'Переменная $d имеет тип: '.gettype($d);
        echo 'Переменная $e имеет тип: '.gettype($e);
        echo 'Переменная $f имеет тип: '.gettype($f);
        echo 'Переменная $g имеет тип: '.gettype($g);
      ?&gt;

      Result php:
      <?       
        $a = 152;
        $b = '152';
        $c = 'London';
        $d = array(152);
        $e = 15.2;
        $f = false;
        $g = true;
        echo 'Переменная $a имеет тип: '.gettype($a).'<br>';
        echo '      Переменная $b имеет тип: '.gettype($b).'<br>';
        echo '      Переменная $c имеет тип: '.gettype($c).'<br>';
        echo '      Переменная $d имеет тип: '.gettype($d).'<br>';
        echo '      Переменная $e имеет тип: '.gettype($e).'<br>';
        echo '      Переменная $f имеет тип: '.gettype($f).'<br>';
        echo '      Переменная $g имеет тип: '.gettype($g).'<br>';
      ?>
    </pre>
  </code>

  <h2>Задача 7: Работа со строками и переменными</h2>
  <p>
    Написать код, который будет формировать строку и выводить ее на экран,<br>
    подставляя в нее значения переменных $a и $b.<br>
    Например:<br>
    Дано: a = 10, b = 5.<br>
    Результат: 5 из 10ти студентов посетили лекцию.<br>
    Условия<br>
    Строки в PHP можно формировать используя одинарные ' и двойные " кавычки.<br>
    Решите эту задачу двумя способами с применением одинарных и двойных кавычек.<br>
    Подсказка:<br>
    В случае использования двойных кавычек будет полезной возможность экранирования переменных<br>
    при помощи { }.
  </p>
  <code>
    <pre>
      &lt;?
        $a = 10;
        $b = 5;
        echo 'Результат: '.$b.' из '.$a.'ти студентов посетили лекцию.';
        echo "Результат: $b из {$a}ти студентов посетили лекцию.";
      ?&gt;

      Result php(Сначала одинарные, затем двойные):
      <?       
        $a = 10;
        $b = 5;          
        echo 'Результат: '.$b.' из '.$a.'ти студентов посетили лекцию.<br>';
        echo "      Результат: $b из {$a}ти студентов посетили лекцию";
      ?>.
    </pre>
  </code>

  <h2>Задача 8: Работа со строками и переменными</h2>
  <ul>
    <li>
      Определить три переменных со значениями:
      “Доброе утро”
      “дамы”
      “и господа”
    </li>
    <li>
      Вывести значения переменных в браузер.
    </li>
    <li>
      Сформировать строку "Доброе утро, дамы и господа" используя созданные переменные и 
      комбинированный оператор склеивания.
    </li>
  </ul>
  <code>
    <pre>
      &lt;?
        $firstWord = 'Доброе утро';
        $secondWord = 'дамы';
        $thirdWord = 'и господа';
        echo $firstWord.'&lt;br&gt;';
        echo $secondWord.'&lt;br&gt;';
        echo $thirdWord.'&lt;br&gt;';
        echo '"'.$firstWord.', '.$secondWord.' '.$thirdWord.'"';
      ?&gt;

      Result php:
      <?       
        $firstWord = 'Доброе утро';
        $secondWord = 'дамы';
        $thirdWord = 'и господа';
        
        echo $firstWord.'<br>';
        echo '      '.$secondWord.'<br>';
        echo '      '.$thirdWord.'<br>';
        echo '      "'.$firstWord.', '.$secondWord.' '.$thirdWord.'"';
      ?>.
    </pre>
  </code>

  <h2>Задача 9: Работа с массивами</h2>
  <ul>
    <li>
      Создать 2 простых массива с количеством элементов 5.
    </li>
    <li>
      В первый массив добавить один элемент с индексом (!) element и произвольным значением.
    </li>
    <li>
      Из второго массива удалить элемент с индексом 0. Используйте функцию unset();
    </li>
    <li>
      Вывести на экран элементы под индексом 2 из первого и второго массива.
    </li>
    <li>
      Вывести на экран содержимое массивов полностью.
    </li>
    <li>
      Найти количество элементов в каждом массиве. Используйте функцию count(). Вывести 
      результаты на экран.
    </li>
  </ul>
  <code>
    <pre>
      &lt;?
        $firstArr = [true, 2.1, 'check', 9, 'lesson1'];
        $secondArr = [895.7586, 'Just do it!', '108', 5, false];
        $firstArr += ['element' => 'cyrcle'];
        unset($secondArr[0]);
        echo 'Элементы под индексом 2 из первого и второго массива: '.$firstArr[2].' и '.$secondArr[2].'&lt;br&gt;';
        var_dump($firstArr, $secondArr);
        echo 'Количество элементов в первом массиве: '.count($firstArr).'&lt;br&gt;';
        echo 'Количество элементов во втором массиве: '.count($secondArr);
      ?&gt;

      Result php:
      <?       
        $firstArr = [true, 2.1, 'check', 9, 'lesson1'];
        $secondArr = [895.7586, 'Just do it!', '108', 5, false];
        $firstArr += ['element' => 'cyrcle'];
        unset($secondArr[0]);
        echo 'Элементы под индексом 2 из первого и второго массива: '.$firstArr[2].' и '.$secondArr[2].'<br>';
        var_dump($firstArr, $secondArr);
        echo '      Количество элементов в первом массиве: '.count($firstArr).'<br>';
        echo '      Количество элементов во втором массиве: '.count($secondArr);
      ?>.
    </pre>
  </code>

  <h2>Задача 10: Вхождение числа в диапазон</h2>
  <p>
    Диапазон значений, определяется костантами MIN = 10, MAX = 50.<br>
    Написать программу, которая проверяет вхождение переменной x в диапазон (больше MIN, меньше MAX).<br>
    Если х входит в диапазон, вывести сообщение "+", иначе вывести сообщение "-".<br>
    Если х находится на границе диапазона (х = 10 или х = 50), вывести сообщение "+-".
  </p>
  <code>
    <pre>
      &lt;?
        const MIN = 10;
        const MAX = 50;
        for ($i = 0; $i <= 60; $i++) {
          echo 'В переменной x записано число - '.$i;
          if($i > MIN && $i < MAX) {
            echo ' "+" &mdash; Ура! мы находимся в диапозоне =)&lt;br&gt;';
          } elseif($i == MIN || $i == MAX) {
            echo ' "+-" &mdash; Осторожно! мы находимся на границе диапозона! =O&lt;br&gt;';
          } else {
            echo ' "-" &mdash; К сожалению мы находимся вне диапозона =(&lt;br&gt;';
          }          
        }
      ?&gt;

      Result php:
      <?       
        const MIN = 10;
        const MAX = 50;
        for ($i = 0; $i <= 60; $i++) {
          echo 'В переменной x записано число - '.$i;
          if($i > MIN && $i < MAX) {
            echo ' "+" &mdash; Ура! мы находимся в диапозоне =)<br>';
          } elseif($i == MIN || $i == MAX) {
            echo ' "+-" &mdash; Осторожно! мы находимся на границе диапозона! =O<br>';
          } else {
            echo ' "-" &mdash; К сожалению мы находимся вне диапозона =(<br>';
          }          
        }
      ?>
    </pre>
  </code>

  <h2>Задача 11: Квадратное уравнение</h2>
  <p>
    Решить квадратное уравнение. 10x^2 + 21x - 10 = 0;<br>
    Определить значения переменнных $a, $b, $c числовыми значениями (с ними и работать дальше).<br>
    По формуле найти дискриминант (D).<br>
    Используя условный оператор (if, elseif, else) сравнить значение D c 0:<br>
  </p>
  <ul>
    <li>Если D > 0, вычислить и напечатать 2 корня уравнения (x1, x2)</li>
    <li>Если D = 0, найти 1 корень (х)</li>
    <li>Если D < 0, вывести сообщение: "Нет корней"</li>
  </ul>
  <p>Подсказки:</p>
  <ol>
    <li>Вспомнить теорию и проверить работу своей программы можно на сайте. http://100formul.ru/kvadrat</li>
    <li>
      Арифметические операторы мы уже знаем. Для нахождения квардратного корня используется функция  s  qrt() :<br>
      echo sqrt(9); // Выведет "3"
    </li>
  </ol>
  <code>
    <pre>
      &lt;?
        $a = 10;
        $b = 21;
        $c = 10;
        $D = pow($b, 2) - 4 * $a * $c;
        if ($D > 0) {
          echo 'Дискриминант больше нуля. Уравнение имеет два действительных корня.&lt;br&gt;';
          $x1 = (-$b - sqrt($D)) / (2 * $a);
          $x2 = (-$b + sqrt($D)) / (2 * $a);
          echo 'x1 = '.$x1.',&lt;br&gt; x2 = '.$x2.'.';
        } elseif ($D == 0) {
          echo 'Дискриминант равен нулю. Уравнение имеет один действительный корень.&lt;br&gt;';
          $x1 = -$b / (2 * $a);
          echo 'x1 = '.$x1.'.';
        } else {
          echo 'Дискриминант меньше нуля. Уравнение не имеет кореней.';
        }
      ?&gt;

      Result php:
      <?       
        $a = 10;
        $b = 21;
        $c = 10;
        $D = pow($b, 2) - 4 * $a * $c;
        if ($D > 0) {
          echo 'Дискриминант больше нуля. Уравнение имеет два действительных корня.<br>';
          $x1 = (-$b - sqrt($D)) / (2 * $a);
          $x2 = (-$b + sqrt($D)) / (2 * $a);
          echo '      x1 = '.$x1.',<br>      x2 = '.$x2.'.';
        } elseif ($D == 0) {
          echo 'Дискриминант равен нулю. Уравнение имеет один действительный корень.<br>';
          $x1 = -$b / (2 * $a);
          echo '      x1 = '.$x1.'.';
        } else {
          echo 'Дискриминант меньше нуля. Уравнение не имеет кореней.';
        }
      ?>
    </pre>
  </code>
</body>
</html>