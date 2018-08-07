<?
setcookie('last_time', date('H:i:s d.m.Y'));
if (isset($_COOKIE['last_time'])) {
  echo 'С возвращением, дружище! Последний раз ты заходил: '.$_COOKIE['last_time'];
} else {
  echo 'Добро пожаловать, новичек! Последний раз ты зааходил: никогда.';
}