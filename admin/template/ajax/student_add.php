<?php 


    require_once "../../../vendor/autoload.php";
    require_once "../../../config.php";

    use Edu\Board\Controller\Student;

    $stu = new Student;


    $stu -> createStudent($_POST);


 ?>