<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}else{
$states_result = find_state_by_id($_GET['id']);
// No loop, only one result
$states = db_fetch_assoc($states_result);
}
$errors = array();

?>
<?php $page_title = 'Staff: Edit State ' . $states['name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>
<?php
if(is_post_request()) {

  // Confirm that values are present before accessing them.
  if(isset($_POST['name'])) { $states['name'] = $_POST['name']; }
  if(isset($_POST['code'])) { $states['code'] = $_POST['code']; }
  if(isset($_POST['country_id'])) { $states['country_id'] = $_POST['country_id']; }
 

  $result = update_state($states);
  if($result === true) {
    
    redirect_to('show.php?id=' . u($states['id']));
  } else {
    $errors = $result;
  }
}
?>
<div id="main-content">
  <a href="index.php">Back to States List</a><br />

  <h1>Edit State: <?php echo $states['name']; ?></h1>

  <!-- TODO add form -->
    <?php echo display_errors($errors);?>
  <!-- TODO add form -->
   <form action="#" method="post">
    name:<br />
    <input type="text" name="name" value="<?php echo $states['name']; ?>" /><br />
    code:<br />
    <input type="text" name="code" value="<?php echo $states['code']; ?>" /><br />
	Country_id:<br/>
	    <input type="text" name="country_id" value="<?php echo $states['country_id']; ?>" /><br />
    <br />
   
    <input type="submit" name="submit" value="Create"  />
  </form>

</div>
<br/>

<a href ="show.php?id=<?php echo $states['id']; ?>">Cancel</a>

<?php include(SHARED_PATH . '/footer.php'); ?>
