<?php
require_once('../../../private/initialize.php');
?>
<?php $page_title = 'Staff: New Territory'; 
$territory = array(
	'name' => '',
	'position' => '',
	'state_id' =>''
	);
	

$errors=array();
?>
<?php include(SHARED_PATH . '/header.php'); ?>
 <?php
if(is_post_request()){
	if(isset($_POST['name'])){$territory['name'] = $_POST['name'];}
	if(isset($_POST['position'])){$territory['position']=$_POST['position'];}
	if(isset($_POST['state_id'])){$territory['state_id']=$_POST['state_id'];}

 $result = insert_territory($territory);
 if($result === true) {
    $new_id = db_insert_id($db);
    redirect_to('show.php?id=' . $new_id);
  } else {
    $errors = $result;
  }
}
 ?>
<div id="main-content">
  <a href="../states/show.php">Back to State Details</a><br />

  <h1>New Territory</h1>
  <?php echo display_errors($errors);?>

  <!-- TODO add form -->
  <form action="#" method="post">
  Name: <br/>
  <input type="text" name="name" value="<?php echo h($territory['name']); ?>"/><br/>
  Position: <br/>
  <input type="text" name="position" value="<?php echo h($territory['position']); ?>"/><br/>
  <input type="hidden" name="state_id"  value="<?php echo h($_GET['id']); ?>"/><br/>
  <input type="submit" name="submit" value="Create" /><br/>
  </form>
  

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>

