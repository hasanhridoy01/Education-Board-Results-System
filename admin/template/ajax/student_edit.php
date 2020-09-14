<?php 

    require_once "../../../vendor/autoload.php";
    require_once "../../../config.php";

    use Edu\Board\Controller\Student;

    $stu = new Student;


    $id = $_POST['id'];

    $data = $stu -> editStudent($id);

    echo json_encode($data);



 ?>