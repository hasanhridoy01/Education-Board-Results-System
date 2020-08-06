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

      /**
       * 
       */
      public function dataCheckPro($tbl, array $data, $condition = 'AND')
      {
        
        $query_string = '';
        foreach ($data as $key => $value) {
          
          $query_string .= $key . "= '$value' $condition ";

        }
        $query_array = explode(' ', $query_string);
        array_pop($query_array);
        array_pop($query_array);

        $final_query_string = implode(' ', $query_array);

        $stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE $final_query_string");
        $stmt -> execute();


      }
      
      /**
       * UpDate Method
       */
      public function upDate($tbl, $id, $data)
      {
         
          $query_string = '';
          foreach ($data as $key => $value) {
            
            $query_string .= "$key = '$value' , ";

          }

          $query_array = explode(' ', $query_string);
          array_pop($query_array);
          array_pop($query_array);

          $final_query_string = implode(' ', $query_array);

          $stmt = $this -> connection() -> prepare("UPDATE $tbl SET $final_query_string WHERE id='$id' ");
          $stmt -> execute();

      }

   }



 ?>