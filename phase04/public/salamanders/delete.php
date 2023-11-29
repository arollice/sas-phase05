<?php 
require_once('../../private/initialize.php'); 
include(SHARED_PATH . '/salamander-header.php');

if(!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
  }
    $id = $_GET['id'];
   
    
    $salamander = find_salamander_by_id($id);
    
    if(is_post_request()) {
      $sql = "DELETE FROM salamander ";
      $sql .= "WHERE id='".$id."' ";
      $sql .= "LIMIT 1";

      $result = mysqli_query($db, $sql);

       //For DELETE statements, $result is true/false
    if($result){

      redirect_to(url_for('salamanders/index.php'));
    } else {

      //Delete failed 
      echo mysqli_error($db);
      db_disconnect($db);  
      exit;
    }
     
   }
  
  $pageTitle = 'Delete Salamander'; 
  ?>

   <div>
      <h1>Delete Salamander</h1>
      <a href="<?php echo url_for('salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>

      <p>Are you sure you want to delete this salamander?</p>
      <p><?php echo h($salamander['name']); ?></p>
  
      <form action="<?php echo url_for('salamanders/delete.php?id='.h(u($salamander['id']))); ?>" method="post">
          <input type="submit" name="commit" value="Delete Salamander">
      </form>
      
  </div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>