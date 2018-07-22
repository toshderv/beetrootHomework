<?
session_start();

const URL_SECURITY = '/HomeWork_20_07_18_independent_work/task7.php';
$urlCurrentAbsolute = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$urlCurrentRelative = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION['user']['visited_pages'])) {
  $_SESSION['user']['visited_pages'] = [$urlCurrentAbsolute];

  if (URL_SECURITY == $urlCurrentRelative) {
    echo 'Ты кажется не посещал ранее тайных страниц, но как ты тут оказался?<br>
          Мы тщательно будем наблюдать за тобой!';
  }
} else {
  if (!in_array($urlCurrentAbsolute, $_SESSION['user']['visited_pages'])) {
    $_SESSION['user']['visited_pages'][] = $urlCurrentAbsolute;
  }
  
  if (URL_SECURITY == $urlCurrentRelative) {
    echo 'Мы насобирали на тебя досье. Держи:<br>';

    foreach ($_SESSION['user']['visited_pages'] as $url) {
      echo $url . '<br>';
    }

    echo 'Что скажешь в свое оправдание?';
  }
}