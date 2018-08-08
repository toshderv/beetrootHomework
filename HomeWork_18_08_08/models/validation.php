<?
/**
 * Валидация на стороне сервера.
 * 
 * @param array ожидаем здесь увидеть глобальную переменную $_POST
 * с данными из формы «Добавить студента»
 * 
 * @return array Возвращаем массив с ошибками
 */
function fieldsValidation (array $arr) {
  
  if (mb_strlen($_POST['name']) > 15) {
    $errorMsg = 'Длина текста не должна превышать 15 символов. Сейчас: '.mb_strlen($_POST['name']).' символов.';
    $errors['name'] =  $errorMsg;
  }

  if ($_POST['age'] < 18 || $_POST['age'] > 100) {
    $errorMsg = 'Значение должно быть в промежутке 18 - 100 включительно. Сейчас значение: '.$_POST['age'].'.';
    $errors['age'] =  $errorMsg;
  }

  return $errors;
}

/**
 * Функция проверяет, прошел ли запрос успешно или нет
 * 
 * @param bool|NULL Может прийти как булев тип, так и NULL
 * 
 * @return array Возвращаем массив с результатом и соответствующим сообщением
 */
function insertStudent ($result) {
  if ($result) {
    $answer['style'] = 'green';
    $answer['message'] = 'Пользователь добавлен';
  } else {
    $answer['style'] = 'red';
    $answer['message'] = 'Ошибка добавления пользователя';
  }

  return $answer;
}