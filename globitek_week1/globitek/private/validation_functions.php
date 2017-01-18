<?php

 
 // is_blank('abcd')
  function is_blank($value='') {
    // TODO
	return !isset($value) || trim($value) == "";  //$value not exist or trimmed part
	//is ""
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    // TODO
	$length=strlen($value);
	$options = ['min'=>2,'max'=>255];
	if ($length > $options['max'] || $length < $options['min'])
		return false;
	else
		return true;
	
	
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    // TODO
	if(strpos($value,"@"))
		return true;
	else
		return false;
	//return strpos($value,"@") == -1? false : true; 
  }
?>
