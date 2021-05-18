<?php

/**
 * Class to handle articles
 */

class testimonial
{

  // Properties

  /**
   * @var int The article ID from the database
   */
  public $ID = null;

  /**
   * @var int When the article was published
   */
  public $className = null;

  /**
   * @var int Full title of the article
   */
  public $testimonialDate = null;

  /**
   * @var string A short summary of the article
   */
  public $firstName = null;

  /**
   * @var string The HTML content of the article
   */
  public $comment = null;

  /**
   * @var string The HTML content of the article
   */
  public $approval = null;


  /**
   * Sets the object's properties using the values in the supplied array
   *
   * @param assoc The property values
   */

  public function __construct($data = array())
  {
    if (isset($data['ID'])) $this->ID = (int) $data['ID'];
    if (isset($data['testimonialDate'])) {
      $date = strtotime($data['testimonialDate']);

      $this->testimonialDate = date('d F Y', $date);
    }

    if (isset($data['className'])) $this->className = $data['className'];
    if (isset($data['firstName'])) $this->firstName = $data['firstName'];
    if (isset($data['comment'])) $this->comment = $data['comment'];
    if (isset($data['approval'])) $this->approval = (int) $data['approval'];
  }


  /**
   * Sets the object's properties using the edit form post values in the supplied array
   *
   * @param assoc The form post values
   */

  public function storeFormValues($params)
  {

    // Store all the parameters
    $this->__construct($params);

    // Parse and store the publication date
    if (isset($params['testimonialDate'])) {
      $testimonialDate = explode('-', $params['testimonialDate']);

      if (count($testimonialDate) == 3) {
        list($y, $m, $d) = $testimonialDate;
        $this->testimonialDate = mktime(0, 0, 0, $m, $d, $y);
      }
    }
  }


  /**
   * Returns all (or a range of) Article objects in the DBl
   *
   * @param int Optional The number of rows to return (default=all)
   * @return Array|false A two-element array : results => array, a list of Article objects; totalRows => Total number of articles
   */

  public static function getList()
  {
    $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    $sql = "SELECT * FROM testimonial where approval=1
            ORDER BY testimonialDate DESC";

    $st = $conn->prepare($sql);
    $st->execute();
    $list = array();

    while ($row = $st->fetch()) {
      $testimonial = new testimonial($row);
      $list[] = $testimonial;
    }

    // Now get the total number of articles that matched the criteria
    $conn = null;
    return (array("results" => $list));
  }
}
