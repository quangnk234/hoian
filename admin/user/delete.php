<?php require_once $_SERVER['DOCUMENT_ROOT'].'/hoian/library/ConnectDatabaseLibrary.php' ?>
<?php
  if(isset($_GET['idUser'])){
  $id_user = $_GET['idUser'];
  if($id_user == 1) header("Location: /hoian/admin/user?msg=deladmin");
  else{
  $sql = "DELETE FROM user WHERE id_user = {$id_user}";
  echo $sql;
  $query = $conn->query($sql);
  if(!$query)
  	header("Location: /hoian/admin/user?msg=delsuccess");
  else
  	header("Location: /hoian/admin/user?msg=delerror");
     }
   }
?>