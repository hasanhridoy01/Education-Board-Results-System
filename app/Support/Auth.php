<?php 

   namespace Edu\Board\Support;

   use Edu\Board\Support\Database;
   use PDO;

   /**
    * Auth Managements System
    */
   class Auth extends Database
   {
   	 
   	 /**
   	  * Login Managements System
   	  */
     public function userLoginSystem($email_uname, $pass)
     {
     	$data = $this -> emailUsernameCheck($email_uname);
        
        $nam = $data['nam'];
     	$login_user_data = $data['data'] -> fetch(PDO::FETCH_ASSOC);

     	if ( $nam == 1 ) {
     		
     		if ( password_verify($pass, $login_user_data['pass']) ) {
     			
     			$_SESSION['id'] = $login_user_data['id'];
     			$_SESSION['name'] = $login_user_data['name'];
     			$_SESSION['uname'] = $login_user_data['uname'];
     			$_SESSION['pass'] = $login_user_data['pass'];
     			$_SESSION['photo'] = $login_user_data['photo'];
     			$_SESSION['email'] = $login_user_data['email'];
     			$_SESSION['role'] = $login_user_data['role'];
     			$_SESSION['cell'] = $login_user_data['cell'];

     			header("location:dashboard.php");

     		}else{
     			return "<p class=\"alert alert-warning\">Wrong password ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     		}

     	}else{
     		return "<p class=\"alert alert-danger\">Email or Username is incorrect ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
     	}

     }

     /**
      * User name Check
      */
     public function emailUsernameCheck($email_uname)
     {
     	return $this -> dataCheck( 'userss' ,[
              'email' => $email_uname,
              'uname' => $email_uname,
     	], 'OR');
     }

     /**
      * Logout System
      */
     public function userLogout()
     {
     	session_destroy();
     	header('location:index.php');
     }

   	
   }







 ?>