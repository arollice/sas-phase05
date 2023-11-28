<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php'); 

  $id = $_GET['id'];

  if(is_post_request()){
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';

    $result = update_salamander($salamander);
   
    if($result){
      redirect_to(url_for('salamanders/show.php?id=' .$salamander['id']));
    }

  } else {
    $salamander = find_salamander_by_id($id);

   // $salamander_set = find_all_salamanders();
    //$salamander_count = mysqli_num_rows($salamander_set);
    //mysqli_free_result($salamander_set);
  }
?>

<div>
  <h1>Edit Salamander</h1>
  <form action="<?php echo url_for('salamanders/edit.php?id='.h(u($id)));?>" method="post">
    <label for= "name">Name: </label><br>
    <input type="text" name="name" value="<?= h($salamander['name']);?>"><br>

    <label for= "habitat">Habitat: </label><br>
    <textarea name="habitat" cols="40" rows="5"><?= h($salamander['habitat']);?></textarea><br>

    <label for= "description">Description: </label><br>
    <textarea name="description" cols="40" rows="5"><?= h($salamander['description']);?></textarea><br>

  <input type="submit" value="Edit Salamander">
  </form>

</div>

<?php
 include(SHARED_PATH . '/salamander-footer.php'); ?>
