<?php require_once('../../private/initialize.php');

$pageTitle = 'Edit Salamander';

include(SHARED_PATH . '/salamander-header.php')
?>
<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<h1>Edit Salamander</h1>
<form>
  <label for = "name">Name:</label>
  <br>
  <input type="text" name ="Name">
  <br>
  <input type = "submit" value="Edit Salamander">
</form>


<?php
include(SHARED_PATH . '/salamander-footer.php')
?>