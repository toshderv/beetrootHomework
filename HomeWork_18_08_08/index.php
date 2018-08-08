<?
include 'components/db.php';
include 'models/connection.php';
include 'models/validation.php';
include 'models/requests.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDO student add</title>
</head>
<body>
  <h1>На данной странице вы можете посмотреть список студентов или добавить студента(-ов)</h1>

  <h2>В этом месте вы можете получить полный список студентов</h2>
  <form action="" method="post">
    <input type="submit" name="see_list_students" value="Click me to see the list of students">
  </form>
  <?if (isset($resultListStudents)) {?>
    <table>
      <tr><th>№ п/п</th><th>Имя студента</th><th>Возраст студента</th><th>О студенте</th><th>Университет</th><th>Описание университета</th></tr>
      <?foreach ($resultListStudents as $key => $value) {?>
        <tr>
          <td><?= ++$key?></td>
          <td><?= $value['name']?></td>
          <td><?= $value['age']?></td>
          <td><?= $value['student_description']?></td>
          <td><?= $value['university']?></td>
          <td><?= $value['university_description']?></td>
        </tr>
      <?}?>
    </table>
  <?} elseif ($errors['list_students']) {
    echo $errors['list_students'];
  }?>

  <h2>Добавьте студента с помощью этой формы</h2>
  <form action="" method="post">
  <?= $insertAnswer ? '<p style="color:'.$insertAnswer['style'].'">'.$insertAnswer['message'].'</p>' : ''?>
    <p>Имя студента:
      <input type="text" name="name" required <?//maxlength="15"?> placeholder="Имя студента">
      <?= $errors['name'] ? '<br><small style="color:red">'.$errors['name'].'</small>' : ''?>
    </p>
    <p>Возраст студента:
      <input type="number" name="age" required <?//min="18" max="100"?> placeholder="Возраст студента">
      <?= $errors['age'] ? '<br><small style="color:red">'.$errors['age'].'</small>' : ''?>
    </p>
    <p>Университет: 
      <select name="universityId" id="universityId" required>
        <option value="1">ДГМА</option>
        <option value="2">КЭГИ</option>
        <option value="3">ДЖКХ</option>
      </select>
    </p>
    <input type="submit" name="add_student" value="Add student">
  </form>
</body>
</html>