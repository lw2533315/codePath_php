<?php
require_once('../../private/initialize.php');
 require_login();
?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="main-content">
	
	<?php 
	 	// print($_SESSION['last_login']);
		// print("session id".$_SESSION['logged_in']);?>
		
  <h1>Menu</h1>
  <ul>
    <li>
      <a href="users/index.php">Users</a>
    </li>
    <li>
      <a href="salespeople/index.php">Salespeople</a>
    </li>
    <li>
      <a href="countries/index.php">Countries, States, &amp; Territories</a>
    </li>
  </ul>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
