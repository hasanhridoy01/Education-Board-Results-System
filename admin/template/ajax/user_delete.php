<?php 

   require_once "../../../vendor/autoload.php";
   require_once "../../../config.php";

   use Edu\Board\Controller\User;

   $user = new User;

   $id = $_POST['id']; 

   $data = $user -> userDelete($id);

   if ( $data == true ) {
   	 echo "<p class=\"alert alert-success\"> User Deleted Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
   }

 ?>