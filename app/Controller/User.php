<?php 

   namespace Edu\Board\Controller;

    use Edu\Board\Support\Database;


   /**
    * User Managements System
    */
   class User extends Database
   {
   	 
   	 /**
   	  * User Add Method
   	  */
   	 public function createUser($data)
   	 {
         $data = $this -> create('userss', [
             'name'  => $data['name'],
             'uname'  => $data['uname'],
             'pass'  => password_hash('login', PASSWORD_DEFAULT),
             'email'  => $data['email'],
             'cell'  => $data['cell'],
             'role'  => $data['role'],
         ]);

         if ( $data == true ) {

         	return "<p class=\"alert alert-success\">User Create Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
         }

        

   	 }

     /**
      * Password Change Method
      */
     public function  passwordChange($user_id, $new_pass)
     {
     	$this -> upDate('userss', $user_id, [
              'pass'  =>  password_hash($new_pass, PASSWORD_DEFAULT),
     	]);
        
        return "<p class=\"alert alert-success\">Password Change Successfull! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

     }

    /**
     * allUser Method
     */
    public function allUser()
    {
    	$data = $this -> all('userss');
    	return $data;
    }

   }




 ?>