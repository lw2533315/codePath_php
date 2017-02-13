<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Staff: Users'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>
<!--向后链接-->
<div id="main-content">
  <!--"../index.php"连接到上层的index.php-->
  <a href="../index.php">Back to Menu</a><br />  

  <h1>Users</h1>
  
  <a href="new.php">Add a User</a><br />
  <br />

  <?php
    $users_result = find_all_users();
	/*tr 表格行，th 表格表头   td 表格单元格*/
    echo "<table id=\"users\" style=\"width: 500px;\">";
    echo "<tr>";   
    echo "<th>First name</th>";   
    echo "<th>Last name</th>";
    echo "<th>Username</th>";
    echo "<th></th>";
    echo "<th></th>";
    echo "</tr>";
    while($user = db_fetch_assoc($users_result)) {
      echo "<tr>";
      echo "<td>" . $user['first_name'] . "</td>";
      echo "<td>" . $user['last_name'] . "</td>";
      echo "<td>" . $user['username'] . "</td>";
      echo "<td>";
	  
	  /*用一个标签跳转同时传递参数 <a href = "deal.php?id=5"></a>*/
      echo "<a href=\"show.php?id=" . u($user['id']) . "\">Show</a>";
      echo "</td>";
      echo "<td>";
      echo "<a href=\"edit.php?id=" . u($user['id']) . "\">Edit</a>";
      echo "</td>";
      echo "</tr>";
    } // end while $user
    db_free_result($users_result);
    echo "</table>"; // #$users
  ?>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
