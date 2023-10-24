<?php 

require_once('../../private/initialize.php');

$test = $GET_['test'] ?? '';

if($test == '404')  {
 error_404(); 
} else if ($test == '500'){
  error_500();
  }
  else if ($test == 'redirect') {
    redirect_to(url_for('phase02/public/salamanders/index.php'));
  }
 else {
  echo 'No error';
}
?>