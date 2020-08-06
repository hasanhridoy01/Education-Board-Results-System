<?php 

   namespace Edu\Board\Controller;

    use Edu\Board\Support\Database;


   /**
    * User Managements System
    */
   class User extends Database
   {
   	
     public function  passwordChange($user_id, $new_pass)
     {
     	$this -> upDate('userss', $user_id, [
              'pass'  =>  password_hash($new_pass, PASSWORD_DEFAULT),
     	]);
        
        return "<p class=\"alert alert-success\">Password Change Successfull! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

     }
   	
   }




 ?>