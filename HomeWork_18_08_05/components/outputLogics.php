<?
// Условие ниже может добавить в базу данных нового студента
if (isset($_POST['add_student'])) {
  $success = true;

  $sql = $dbConnection->prepare('INSERT INTO student (name, age, university_id) VALUES (:name, :age, :university_id)');
  $sql->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
  $sql->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
  $sql->bindParam(':university_id', $_POST['universityId'], PDO::PARAM_INT);
  $result = $sql->execute();

  if ($result) {
    $message = 'Пользователь добавлен';
  } else {
    $message = 'Ошибка добавления пользователя';
  }

  header('Location: /HomeWork_18_08_07/?success='.$success.'&message='.$message);
}

// Условие ниже может всех студентов из базы
if ($_POST['see_list_students']) {
  $sql = $dbConnection->prepare(
    "SELECT
      `student`.`name`,
      `age`,
      `university`.`name` AS 'university',
      `university`.`description` AS 'university_description',
      `student_metadata`.`description` AS 'student_description'
    FROM `student`
    LEFT JOIN `university` ON `student`.`id` = `university`.`id`
    LEFT JOIN `student_metadata` ON `student`.`id` = `student_metadata`.`student_id`;");

  $sql->execute();
  $resultListStudents = $sql->fetchAll(PDO::FETCH_ASSOC);
}