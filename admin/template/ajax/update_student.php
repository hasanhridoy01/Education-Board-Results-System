<?php 


    require_once "../../../vendor/autoload.php";
    require_once "../../../config.php";

    use Edu\Board\Controller\Student;

    $stu = new Student;

    $id = $_POST['student_id'];
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $reg = $_POST['reg'];
    $board = $_POST['board'];
    $inst = $_POST['inst'];
    $exam = $_POST['exam'];
    $year = $_POST['year'];
    $photo = $_POST['old_photo'];
    
    $stu -> updateStudent($id, $name, $roll, $reg, $board, $inst, $exam, $year, $photo);
    


 ?>