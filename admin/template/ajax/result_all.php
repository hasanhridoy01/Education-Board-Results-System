<?php 


    require_once "../../../vendor/autoload.php";
    require_once "../../../config.php";

    use Edu\Board\Controller\Result;

    $result = new Result;

    $data = $result -> allResults();

    foreach( $data as $result_data ):

 ?>

<tr>
	<td>01</td>
	<td><?php echo $result_data['student_id'] ?></td>
	<td><?php echo $result_data['ban'] ?>||<?php $data = $result -> getGradeGpa($result_data['ban']); echo $data['gpa']; ?></td>
	<td><?php echo $result_data['eng'] ?>||<?php $data = $result -> getGradeGpa($result_data['eng']); echo $data['gpa']; ?></td>
	<td><?php echo $result_data['math'] ?>||<?php $data = $result -> getGradeGpa($result_data['math']); echo $data['gpa']; ?></td>
	<td><?php echo $result_data['ss'] ?>||<?php $data = $result -> getGradeGpa($result_data['ss']); echo $data['gpa']; ?></td>
	<td><?php echo $result_data['s'] ?>||<?php $data = $result -> getGradeGpa($result_data['s']); echo $data['gpa']; ?></td>
	<td><?php echo $result_data['rel'] ?>||<?php $data = $result -> getGradeGpa($result_data['rel']); echo $data['gpa']; ?></td>
	<td><?php echo $data['grade']; ?></td>
	<td>Passed</td>
</tr>

<?php endforeach; ?>