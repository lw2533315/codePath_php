
<?php
  require_once('../private/initialize.php');

  // Set default values for all variables the page needs.
	$first_n="";
	$last_n="";
	$email_adr="";
	$usename="";
	$errors = [];
	$options = [];
  // if this is a POST request, process the form
  // Hint: private/functions.php can help
  // Confirm that POST values are present before accessing them.
	if (isset($_POST['submit'])){
		
    // Perform Validations
	// valid firstName
	if (is_blank($_POST['firstName'])){
		$errors[] = "firstName cannot be blank.";
		
	}
	else if (!has_length($_POST['firstName'],$options))
		$errors[] = "firstName must be between 2 and 255 characters";
	else 
		$first_n = $_POST['firstName'];
	
	//valid lastName
	if (is_blank($_POST['lastName']))
		$errors[] = "lastName cannot be blank.";
	else if (!has_length($_POST['lastName'],$options))
		$errors[] = "lastName must be between 2 and 255 characters";
	else 
		$last_n = $_POST['lastName'];
	
	//valid email
	if (is_blank($_POST['email']))
		$errors[] = "email cannot be blank.";
	else if (!has_length($_POST['email'],$options))
		$errors[] = "email must be between 2 and 255 characters";
	else if (!has_valid_email_format($_POST['email']))
		$errors[] = 'email must include "@" sign';
	else 
		$email_adr = $_POST['email'];
	
	//valid usename
	if (is_blank($_POST['useName']))
		$errors[] = "useName cannot be blank.";
	else if (!has_length($_POST['useName'],$options))
		$errors[] = "useName must be between 2 and 255 characters";
	else 
		$usename = $_POST['useName'];
	
	
	
	
	
    // Hint: Write these in private/validation_functions.php
    // if there were no errors, submit data to database
	if (empty($errors)){
		$time=date("Y-m-d H:i:s");
	

      // Write SQL INSERT statement
       $sql = "INSERT INTO users(first_name,last_name,email,usename,created_at)
	   VALUES('$first_n','$last_n','$email_adr','$usename','$time')";

      // For INSERT statments, $result is just true/false
       $result = db_query($db, $sql);
       if($result) {
         db_close($db);
		 

      //   TODO redirect user to success page
		header("Location: registration_success.php");
		exit;
		
       } else {
         // The SQL INSERT statement failed.
         // Just show the error, not the form
        echo db_error($db);
        db_close($db);
        exit;
       }
	}
	}

?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    // TODO: display any form errors here
    // Hint: private/functions.php can help
	$output = display_errors($errors);
	echo $output;
  ?>

  <!-- TODO: HTML form goes here -->
  <form action="#" method="post">
	     First name: <br>
		 
		<input type="text" name="firstName" value="<?php echo $first_n; ?>" /><br>
		Last name:<br>
		<input type="text" name="lastName" value="<?php echo $last_n;?>" /><br>
		Email: <br>
		<input type="text" name ="email" value="<?php echo $email_adr; ?>" /><br>
		UseName: <br>
		<input type="text" name="useName" value="<?php echo $usename; ?>"/><br>
		
		<input type="submit" name="submit" value="Submit" /><br>
		
	</form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>


