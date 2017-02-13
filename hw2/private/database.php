<?php
  require_once('db_credentials.php');

  function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if(mysqli_connect_errno()) {
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= " (" . mysqli_connect_errno() . ")";
      exit($msg); /*退出同时输出 msg*/
    }
    return $connection;
  }
	
/*查询语句
	$sql如果时select，show，describe，就返回结果集，否则返回true/false*/	
  function db_query($connection, $sql) {  
	//$sql = mysqli_real_escape_string($connection,$sql); //sanitized for sql query
    $result_set = mysqli_query($connection, $sql);
    if(substr($sql, 0, 7) == 'SELECT ') {
      confirm_query($result_set);
    }
    return $result_set;
  }

  function confirm_query($result_set) {
    if(!$result_set) {
      exit("Database query failed.");
    }
  }

  /*将mysqli_query()返回的结果集的一行转成关系数组,并返回此数组
  所以如多*/
  function db_fetch_assoc($result_set) {
    return mysqli_fetch_assoc($result_set);
  }

  /*释放查询结果所暂用的空间*/
  function db_free_result($result_set) {
    return mysqli_free_result($result_set);
  }

  /*返回结果集中行的数目*/
  function db_num_rows($result_set) {
    return mysqli_num_rows($result_set);
  }

  function db_insert_id($connection) {
    return mysqli_insert_id($connection);
  }

  function db_error($connection) {
    return mysqli_error($connection);
  }

  function db_close($connection) {
    return mysqli_close($connection);
  }

  function db_escape($connection, $string) {
    return mysqli_real_escape_string($connection, $string);
  }

?>
