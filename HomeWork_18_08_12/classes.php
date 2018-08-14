<?
class Books {  
  public static $sortBy = 'DESC';
  
  public $id;
  public $name;
  public $author;
  public $file_path;
  public $type;
  public $sort_order;

  function __construct($row) {
    $this->id = $row['id'];
    $this->name = $row['name'];
    $this->author = $row['author'];
    $this->file_path = $row['file_path'];
    $this->type = $row['type'];
    $this->sort_order = $row['sort_order'];
  }

  public static function setSortBy() {
    return self::$sortBy;
  }

  public function printInfo() {
    echo '<tr><td><img width="54" height="59" src="images/icons/default.png" alt="' . mb_strtolower(substr($this->type, 4)) . '"></td>';
    echo '<td>' . $this->name . '</td>';
    echo '<td>' . $this->author . '</td>';
    echo '<td><a href="' . ltrim($this->file_path, '/') . 'books/' . $this->name . '.' . mb_strtolower(substr($this->type, 4)) . '" title="download ' . $this->name . '">Click me for download</a></td>';
    echo '<td>Harry Potter is a series of fantasy novels written by British author J. K. Rowling...</td><tr>';
  }
}

class BookTxt extends Books {
  final public function printInfo() {
    echo '<tr><td><img width="54" height="59" src="images/icons/' . mb_strtolower(substr($this->type, 4)) . '.png" alt="' . mb_strtolower(substr($this->type, 4)) . '"></td>';
    echo '<td>' . $this->name . '</td>';
    echo '<td>' . $this->author . '</td>';
    echo '<td><a href="' . ltrim($this->file_path, '/') . 'books/' . $this->name . '.' . mb_strtolower(substr($this->type, 4)) . '" title="download ' . $this->name . '">Click me for download</a></td>';
    echo '<td>Harry Potter is a series of fantasy novels written by British author J. K. Rowling...</td><tr>';
  }
}

class BookDoc extends Books {
  final public function printInfo() {
    echo '<tr><td><img width="54" height="59" src="images/icons/' . mb_strtolower(substr($this->type, 4)) . '.png" alt="' . mb_strtolower(substr($this->type, 4)) . '"></td>';
    echo '<td>' . $this->name . '</td>';
    echo '<td>' . $this->author . '</td>';
    echo '<td><a href="' . ltrim($this->file_path, '/') . 'books/' . $this->name . '.' . mb_strtolower(substr($this->type, 4)) . '" title="download ' . $this->name . '">Click me for download</a></td>';
    echo '<td>Harry Potter is a series of fantasy novels written by British author J. K. Rowling...</td><tr>';
  }
}

class BookPdf extends Books {
  final public function printInfo() {
    echo '<tr><td><img src="images/icons/' . mb_strtolower(substr($this->type, 4)) . '.png" alt="' . mb_strtolower(substr($this->type, 4)) . '"></td>';
    echo '<td>' . $this->name . '</td>';
    echo '<td>' . $this->author . '</td>';
    echo '<td><a href="' . ltrim($this->file_path, '/') . 'books/' . $this->name . '.' . mb_strtolower(substr($this->type, 4)) . '" title="download ' . $this->name . '">Click me for download</a></td>';
    echo '<td>Harry Potter is a series of fantasy novels written by British author J. K. Rowling...</td><tr>';
  }
}