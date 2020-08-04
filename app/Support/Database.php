<?php 

   namespace Edu\Board\Support;
   use PDO;

   /**
    * Database Managements System
    */
   abstract class Database
   {
   	
   	 /**
   	  * Server Information Property
   	  */
      private $host = HOST;
      private $user = USER;
      private $pass = PASS;
      private $db = DB;

      private $connection;
      
      /**
       * Database managements Method
       */
      private function connection()
      {
      	
        return $this -> connection = new PDO("mysql:host=". $this -> host .";dbname=". $this -> db, $this -> user ,$this -> pass);

      }

      /**
       * Data Check Method
       */
      public function dataCheck($tbl, $data)
      {
        
        $stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE email='$data' || uname='$data' ");
        $stmt -> execute();

        $nam = $stmt -> rowCount();

        return [
          'nam' => $nam,
          'data' => $stmt
        ];

      }
     
   }






 ?>