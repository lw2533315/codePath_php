<?php
require_once('../../../private/initialize.php');
?>

<?php $page_title = 'Staff: New Salesperson'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<?php
$errors = array();
$user = array(
	'first_name' =>'',
	'last_name' => '',
	'phone' => '',
	'email' => ''
);

if(is_post_request()) {

  // Confirm that values are present before accessing them.
  if(isset($_POST['first_name'])) { $user['first_name'] = $_POST['first_name']; }
  if(isset($_POST['last_name'])) { $user['last_name'] = $_POST['last_name']; }
  if(isset($_POST['phone'])) { $user['phone'] = $_POST['phone']; }
  if(isset($_POST['email'])) { $user['email'] = $_POST['email']; }

  $result = insert_salesperson($user);
  if($result === true) {
    $new_id = db_insert_id($db);
    redirect_to('show.php?id=' . $new_id);
  } else {
    $errors = $result;
  }
}

?>

<div id="main-content">
  <a href="index.php">Back to Salespeople List</a><br />

  <h1>New Salesperson</h1>
  <?php echo display_errors($errors); ?>
  <!-- TODO add form -->
  <form action="#", method="POST">
	First Name:<br/ >
	<input type="text" name="first_name"  value="<?php echo h($user['first_name']);?>"/><br/>
	Last Name:<br/>
	<input type="text"name="last_name" value="<?php echo h($user['last_name']);?>"/><br/>
	Phone:<br>
	<input type="text"  name="phone"  value="<?php echo h($user['phone']); ?> "/><br/>
	Email: <br/>
	<input type="text" name="email" value="<?php echo h($user['email']);?>"/><br/>
	<br/>
	<input type="submit" name="submit" value="Create" />
  </form>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
