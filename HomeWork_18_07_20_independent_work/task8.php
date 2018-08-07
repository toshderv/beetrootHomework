<?
$name = 'Антон';
$age = 26;
$filePath = 'save-user-info.txt';
$arrUserInfo = [
  'name' => $name,
  'age' => $age
];

file_put_contents($filePath, serialize($arrUserInfo));

var_dump(unserialize(file_get_contents($filePath)));

foreach (unserialize(file_get_contents($filePath)) as $key => $value) {
  if ($key == 'name') {
    echo 'Его имя: ' . $value . '<br>';
  } elseif ($key == 'age') {
    echo 'Его возраст: ' . $value . '<br>';
  } else {
    echo 'Не понимаю, что вы тут ожидали...<br>';
  }
}