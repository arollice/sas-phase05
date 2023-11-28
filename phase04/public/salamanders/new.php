<?php require_once('../../private/initialize.php'); 
include(SHARED_PATH . '/salamander-header.php');
?>

<div>
  <h1>Create Salamander</h1>
  <form action="<?php echo url_for('salamanders/create.php')?>" method="post">
    <label for= "name">Name: </label><br>
    <input type="text" name="name"><br>

    <label for= "habitat">Habitat: </label><br>
    <textarea name="habitat" cols="40" rows="5"></textarea><br>

    <label for= "description">Description: </label><br>
    <textarea name="description" cols="40" rows="5"></textarea><br>

  <input type="submit" value="Create Salamander">
  </form>

</div>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
