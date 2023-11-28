<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$sql = "SELECT * FROM salamander ";
$sql .= "WHERE id='".$id."'";
$result = mysqli_query($db, $sql);
confirm_result_set($result, $sql);

$salamander = mysqli_fetch_assoc($result);
mysqli_free_result($result);


$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php'); 

?>
  <a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div>
    <p><strong>ID: </strong> <?= h($id); ?> </p>
    <p><strong>Name: </strong> <?= h($salamander['name']); ?> </p>
    <p><strong>Habitat:</strong><br>
     <?= h($salamander['habitat']); ?> </p>
    <p> <strong>Description:</strong><br>
     <?= h($salamander['description']); ?> </p>
    
   </div>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
