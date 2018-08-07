<?
if (isset($_COOKIE['visit_counter'])) {
  $_COOKIE['visit_counter']++;
  setcookie('visit_counter', $_COOKIE['visit_counter']);
  echo 'С возвращением, дружище! Ты к нам зашел '.$_COOKIE['visit_counter'].' раз(а)';
} else {
  setcookie('visit_counter', 0);
  echo 'Добро пожаловать, новичек! Ты к нам еще не заходил.';
}