<?php 

   namespace Edu\Board\Controller;

   use Edu\Board\Support\Database;
   use PDO;

   /**
    * Students Managements System
    */
   class Student extends Database
   { 
   	 
   	 /**
   	  * Add New Student Method
   	  */
   	 public function createStudent($data)
   	 {  
        //tarnary oparetor
   	 	$file_name = !empty($_FILES['photo']['name']) ? $this -> fileUpload($_FILES['photo'], '../../students/', $file_type = ['jpg','png','jpeg']) : '';

   	 	$data = $this -> create('students', [

             'name' => $data['name'],
             'roll' => $data['roll'],
             'reg' => $data['reg'],
             'board' => $data['board'],
             'inst' => $data['inst'],
             'year' => $data['year'],
             'exam' => $data['exam'],
             'photo' => $file_name,

   	 	]);
   	 }

   	 /**
   	  * Show All Students Method
   	  */
   	 public function allStudents()
   	 {
   	 	$data = $this -> all('students');
   	 	return $data;
   	 }

   	 /**
   	  * Student Delete Method
   	  */
   	 public function studentDelete($id)
   	 {
   	 	$data = $this -> delete('students', $id);
   	 	return $data;
   	 }

     /**
      * Student Add Search
      */
     public function studentSearch($search)
     {
       $data = $this -> customQuery("SELECT * FROM students WHERE name LIKE '%$search%' || roll LIKE '%$search%' || reg LIKE '%$search%'");
       return $data -> fetchAll(PDO::FETCH_ASSOC);
     }

   }


 ?>