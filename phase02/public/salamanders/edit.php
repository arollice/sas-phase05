<?php require_once('../../private/initialize.php');

if(!isset($_GET['id'])){
  redirect_to((url_for('/salamanders/index.php')));
}

$id = $_GET['id'];
$salamanderName = '';

if(is_post_request()) {
  $salamanderName = $_POST['salamanderName'] ?? '';
  echo "Salamander Name: " . $salamanderName;
}

$pageTitle = 'Edit Salamander';

include(SHARED_PATH . '/salamander-header.php')
?>
<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<h1>Edit Salamander</h1>
<form action="<?php echo url_for('/salamanders/edit.php?id=' . h(u($id)));?>" method="post">
  <label for="salamanderName">Name:</label>
  <br>
  <input type="text" name ="salamanderName" value="<?php echo $salamanderName; ?>">
  <br>
  <input type="submit" value="Edit Salamander">
</form>


<?php
include(SHARED_PATH . '/salamander-footer.php')
?>