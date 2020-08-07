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
       * Data Create Method
       */
      public function create($table, array $data)
      {
         
         // Make SQL Column form data
        $array_key = array_keys($data);
        $array_col = implode(',', $array_key);

        // make SQL values from data 
        $array_val = array_values($data);

        foreach ($array_val as $value) {
          
          $form_value[] = "'".$value."'";

        }

        $array_values = implode(',', $form_value);




        // Data send to table
        $sql = "INSERT INTO $table ($array_col) VALUES ($array_values)" ;
        $stmt = $this -> connection() -> prepare($sql);
        $stmt -> execute();
        
        if ( $stmt ) {
          return true;
        }else {
          return false;
        }

      }

      /**
       * Data find Method by Id
       */
      public function find($id)
      {
        
      }

      /**
       * Data Delete Method
       */
      public function delete($id)
      {
        
      }

      /**
       * Data Show Method
       */
      public function all($tbl, $order = 'DESC')
      {
          $sql = "SELECT * FROM $tbl ORDER BY id $order" ;
          $stmt = $this -> connection() -> prepare($sql);
          $stmt -> execute();

          return $stmt;
      }

      /**
       * Data Check Method
       */
      public function dataCheck($tbl, array $data, $condition = 'AND')
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

        $nam = $stmt -> rowCount();

        return [
           'nam' => $nam,
           'data' => $stmt,
        ];


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