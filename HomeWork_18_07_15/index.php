<?
if (isset($_COOKIE['greeting'])) {
  echo 'С возвращением, дружище!';
} else {
  setcookie('greeting', 'friend', time()+36000);
  echo 'Добро пожаловать, новичек!';
}