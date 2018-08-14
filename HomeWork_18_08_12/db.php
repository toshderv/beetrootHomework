<?
$dbConfig = [
  'server' => 'localhost',
  'db' => 'beetroot_homework_books',
  'username' => 'root',
  'password' => '',
  'charset' => 'utf8',
];

try {
  $pdo = new PDO("mysql:host={$dbConfig['server']};dbname={$dbConfig['db']};charset={$dbConfig['charset']}", $dbConfig['username'], $dbConfig['password']);
  $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Подключение не удалось: " . $e->getMessage());
}