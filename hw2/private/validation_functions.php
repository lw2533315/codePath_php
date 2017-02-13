<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }
  
  //has (0-9,a-z,A-Z,_)
  function has_validSignal($value){
	 return preg_match('/^[A-Za-z0-9_]+$/',$value)? true:false;
  }
  
  //has 0-9,spaces,(),-
  function has_validPhone($value){
	
	return preg_match('/^[0-9\(\)\-]+$/',$value)? true:false;
  }
  
  function hase_validStates($value){
	  return preg_match('/^[A-Za-z]+$/',$value)? true:false;
  }
  
  //code less than name of state
  function is_lessLengthToStateName($value1,$value2){
	  return strlen($value1)<strlen($value2)? true: false;
  }
  
  // digit
  function is_digit($value){
	  return preg_match('/^[0-9]+$/',$value)?true:false;
  }
  
  //Capital
  function is_capital($value){
//	  return true;
if ($value===strtoupper($value))
return 	true;
else return false;
  }

  
 
  
  // has_valid_email_format('test@test.com')
  // XXX@   is wrong format  custom validation 1
  function has_valid_email_format($value) {
	    if(strpos($value,"@")){
			if(substr_count($value,"@") == 1 && strripos($value,"@") != strlen($value)-1 ){
				if(substr_count($value,'.') == 1 &&strripos($value,'.') !=strlen($value)-1){
					if(strpos($value,'.') > (strpos($value,'@')+1)){
					if(preg_match('/^[A-Za-z0-9_.-@]+$/',$value)){
						return true;
					}
					else 
						return false;
					}else return false;
				}
				else
					return false;
			}
			else 
				return false;
		
		}
		else
			return false;

	
	
  
  }
?>
