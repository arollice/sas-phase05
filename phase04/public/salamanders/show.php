<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0
$salamander = find_salamander_by_id($id);


$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php'); 

?>

  <div>
    <h1>Salamander Details</h1>
    <p><strong>ID: </strong> <?= h($id); ?> </p>
    <p><strong>Name: </strong> <?= h($salamander['name']); ?> </p>
    <p><strong>Habitat:</strong><br>
     <?= h($salamander['habitat']); ?> </p>
    <p> <strong>Description:</strong><br>
     <?= h($salamander['description']); ?> </p>
   </div>

   <a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
