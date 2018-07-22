<?
include('task7.php'); // Не обращаем внимания. Это для 7-го задания.

if (isset($_COOKIE['user'])) {
  setcookie('user[number_of_visits]', ++$_COOKIE['user']['number_of_visits']);
  setcookie('user[date_of_last_last]', date('d/m/Y H:i:s'));

  echo 'Привет, дружище! Ты у нас уже был: ' . $_COOKIE['user']['number_of_visits'] . ' раз(а),<br>' .
       'а послений визит твой: ' . $_COOKIE['user']['date_of_last_last'];
} else {
  setcookie('user[number_of_visits]', 0);
  setcookie('user[date_of_last_last]', date('d/m/Y H:i:s'));

  echo 'Хм... Что-то я тебя не припомню...';
}