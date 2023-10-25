<?php 
require_once('../../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404')  {
 error_404(); 
} 
else if ($test == '500'){
  error_500();
}
else if ($test == 'redirect') {
  redirect_to(url_for('/salamanders/index.php'));
}
?>

<?
$pageTitle = 'Create a Salamander';

include(SHARED_PATH . '/salamander-header.php')
?>
<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<h1>Create Salamander</h1>
<form action="<?php echo url_for('/salamanders/create.php');?>" method="post">
  <label for ="salamanderName">Name:</label>
  <br>
  <input type="text" name ="salamanderName">
  <br>
  <input type = "submit" value="Create Salamander">
</form>

<?php
include(SHARED_PATH . '/salamander-footer.php')
?>