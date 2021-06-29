<?php
function debug($value)
{

  echo '<pre>';
  var_dump($value);
  echo '</pre>';

}

//debug($_POST);

$language = isset($_GET['language']) ? $_GET['language'] : 0;

switch ($language) {
  case '0':
    echo 'Buen día';
    break;
  case '1':
    echo 'Good Day';
    break;
  case '2':
    echo 'Bon Jour';
    break;
}