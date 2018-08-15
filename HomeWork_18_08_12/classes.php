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

  final public static function setSortBy() {
    return self::$sortBy;
  }

  public function printInfo() {    
    require 'view/layout/books.php';
  }
}

class BookTxt extends Books {
  final public function printInfo() {
    require 'view/layout/books.php';
  }
}

class BookDoc extends Books {
  final public function printInfo() {
    require 'view/layout/books.php';
  }
}

class BookPdf extends Books {
  final public function printInfo() {
    require 'view/layout/books.php';
  }
}

final class BookDefault extends Books {
  final public function printInfo() {
    require 'view/layout/books.php';
  }
}