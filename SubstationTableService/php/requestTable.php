<?php
class Table {
  public $table_number;
  public $table_fullName;

  function __construct($table_number, $full_name) {
    $this->table_number = $table_number;
    $this->$table_fullName = $full_name;
  }
}

class Tables {
  public $tables = []
  function addTable($table_number, $full_name)
  {

  }

}




 ?>
