<?php 

    require_once "../../../vendor/autoload.php";
    require_once "../../../config.php";

    use Edu\Board\Controller\Result;

    $result = new Result;


    $result -> addResult($_POST);


 ?>