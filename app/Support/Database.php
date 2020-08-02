<?php 

   require_once "../../config.php";

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
      	
        $this -> connection = new PDO("mysql:host=". $this -> host .";dbname=".$this -> user,$this -> pass,$this -> db);

      }
     
   }






 ?>