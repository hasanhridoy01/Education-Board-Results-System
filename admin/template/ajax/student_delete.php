<?php 

    require_once "../../../vendor/autoload.php";
    require_once "../../../config.php";

    use Edu\Board\Controller\Student;

    $stu = new Student;

    $id = $_POST['id'];

    $data = $stu -> studentDelete($id);

    if ( $data == true ) {
    	echo "<p class=\"alert alert-success\"> Students Deleted Successfull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    }



 ?>