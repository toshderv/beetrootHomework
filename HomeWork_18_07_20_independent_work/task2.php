<?
include('task7.php'); // Не обращаем внимания. Это для 7-го задания.

/** Ускорение свободного падения.
 * Используем стандартное («нормальное») значение,
 * принятое при построении систем единиц.
 */
const G = 9.80665;

if (defined('G')) {
  echo 'Все верно, константа «G» существует.<br>Вот ее значение: ' . G . '<br><br>';
} else {
  echo 'Мы тут пробовали найти константу «G», но так и не нашли.<br><br>';
}

define('G', 10);

echo 'Хм... Наивные глупцы, эти ленивые школьники!<br>
      Вы думали, у вас получиться схитрить и округлить константу до 10?!<br>
      Вот вам константа: <strong>' . G . '</strong>.<br>Шевелите серым веществом, лентяи!';