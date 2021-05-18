<?php
require("connect.php");


$action = isset($_GET['action']) ? $_GET['action'] : "";

switch ($action) {
  case 'testimonial':
    testimonial();
    break;
  case 'membership':
    membership();
    break;
  default:
    homepage();
}

function homepage()
{
  require(TEMPLATE_PATH . "/homepage.php");
}

function testimonial()
{
  require(TEMPLATE_PATH . "/listTestimonial.php");
}

function showClass()
{
}

function membership()
{
  require(TEMPLATE_PATH . "/listMembership.php");
}
