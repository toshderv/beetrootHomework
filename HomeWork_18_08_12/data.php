<?
require_once 'classes.php';
require_once 'db.php';

$sortQuery = Books::setSortBy();
$sql = $pdo->prepare('SELECT * FROM `books` ORDER BY `sort_order` ' . $sortQuery);
$sql->execute();

while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
  if (class_exists($row['type'])) {
    $bookList[] = new $row['type']($row);
  } else {
    $bookList[] = new BookDefault($row);
  }
  
}