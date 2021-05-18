<?php

class fitnessClass {

    public $ID = null;

    public $title = null;

    public $description = null;

    public $image = null;

    public function __construct($data = array()) {
        if (isset($data['ID'])) $this->ID = (int) $data['ID'];
        if (isset($data['title'])) $this->title = $data['title'];
        if (isset($data['description'])) $this->description = $data['description'];
        if (isset($data['image'])) $this->image = $data['image'];
    }

    public static function getList()
    {
      $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
      $sql = "SELECT * FROM class";
  
      $st = $conn->prepare($sql);
      $st->execute();
      $list = array();
  
      while ($row = $st->fetch()) {
        $fitnessClass = new fitnessClass($row);
        $list[] = $fitnessClass;
      }
  
      // Now get the total number of articles that matched the criteria
      $conn = null;
      return (array("results" => $list));
    }


}
