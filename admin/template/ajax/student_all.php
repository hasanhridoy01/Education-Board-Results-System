<?php 

    require_once "../../../vendor/autoload.php";
    require_once "../../../config.php";

    use Edu\Board\Controller\Student;

    $stu = new Student;

    $data = $stu -> allStudents();
    
    $i = 1;
    foreach( $data as $val ) :

 ?>

 <tr>
  <td><?php echo $i; $i++; ?></td>
  <td><?php echo $val['name'] ?></td>
  <td><?php echo $val['roll'] ?></td>
  <td><?php echo $val['reg'] ?></td>
  <td><?php echo $val['board'] ?></td>
  <td><?php echo $val['inst'] ?></td>
  <td><?php echo $val['exam'] ?></td>
  <td><?php echo $val['year'] ?></td>
  <td><img style="width: 50px;height:50px;" src="students/<?php echo $val['photo'] ?>" alt=""></td>
  <td><?php echo $val['status'] ?></td>
  <td>
    <a id="all_student" student_view_id="<?php echo $val['id'] ?>" class="btn btn-sm btn-info" href="#">View</a>
    <a id="edit_student" student_edit="<?php echo $val['id'] ?>" class="btn btn-sm btn-warning" href="#">Edit</a>
    <a id="student_delete" student_id="<?php echo $val['id'] ?>" class="btn btn-sm btn-danger" href="#">Delete</a>
  </td>
</tr>

<?php endforeach; ?>