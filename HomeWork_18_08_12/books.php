<?require_once 'data.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List books</title>
  <style>
    body{font-family:sans-serif}
    table{border-collapse:collapse}
    th,td{border:1px solid lightgrey;padding:10px}
    a{white-space:nowrap}
    img{border:1px solid grey}
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Author</th>
        <th>Download</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>
      <?
        foreach ($bookList as $key => $book) {
          $book->printInfo();
        }
      ?>
    </tbody>
  </table>
</body>
</html>