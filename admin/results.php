<?php require_once "template/header.php"; ?>
<?php
use Edu\Board\Controller\User;
$user = new User;
?>
<!-- MAIN CONTENT  -->
<section id="content">
  <section class="hbox stretch">
    <section>
      <section class="vbox">
        <section class="scrollable padder">
          <section class="row m-b-md">
            <div class="col-sm-6">
            <h3 class="m-b-xs text-black">All Results Data</h3> <small>Welcome back, <?php echo $_SESSION['name'] ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email'] ?></small> </div>
          </section>
          
          <!-- Our Page Content -->
          <div id="add_result" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- <div class="modal-header"></div> -->
                <div class="modal-body">
                  <h2>Add result</h2>
                  <button id="close" class="btn btn-sm btn-info">Cancle</button>
                  <hr>
                  <div class="student-res-data">
                    <img style="width: 200px;height: 200px;display: block;margin: auto;" src="" alt="">
                    <h3 class="text-center"></h3>
                    <h4 class="text-center"></h4>
                  </div>
                  <form id="add_student_result" action="" method="POST" >
                    <div class="form-group">
                      
                      <label id="idstudent" for="">Search Student</label>
                      <input id="search_student" class="form-control" name="student_id" type="text">
                      <div class="stu_res"></div>
                      
                    </div>
                    <div class="form-group">
                      <label for="">Bangla</label>
                      <input class="form-control" name="ban" type="text">
                    </div>
                    <div class="form-group">
                      <label for="">English</label>
                      <input class="form-control" name="eng" type="text">
                    </div>
                    <div class="form-group">
                      <label for="">Math</label>
                      <input class="form-control" name="math" type="text">
                    </div>
                    <div class="form-group">
                      <label for="">Social Scuence</label>
                      <input class="form-control" name="ss" type="text">
                    </div>
                    <div class="form-group">
                      <label for="">Science</label>
                      <input class="form-control" name="s" type="text">
                    </div>
                    <div class="form-group">
                      <label for="">Religion</label>
                      <input class="form-control" name="rel" type="text">
                    </div>
                    
                    <div class="form-group">
                      <label for=""></label>
                      <input class="btn btn-primary" name="add" type="submit" value="Add Result">
                    </div>
                  </form>
                </div>
                <!-- <div class="modal-footer"></div> -->
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-12">
              
              <div class="mess"></div>
              <a id="add_result_btn" class="btn btn-sm btn-primary" href="#">Add new Results</a>
              <br>
              <br>
              <section class="panel panel-default">
                <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> All Results Data</header>
                <table class="table table-striped m-b-none">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>email</th>
                      <th>Cell</th>
                      <th>Role</th>
                      <th>Photo</th>
                      <th>Status</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody id="">
                    <tr>
                      <td>01</td>
                      <td>Hasan Hridoy</td>
                      <td>hasanhridoy@gmail.com</td>
                      <td>01701007493</td>
                      <td>admin</td>
                      <td>
                        <img src="images/a6.png" alt="" style="height: 50px; width: 50px;">
                      </td>
                      <td>active</td>
                      <td>
                        <a href="" class="btn btn-sm btn-info">View</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>01</td>
                      <td>Hasan Hridoy</td>
                      <td>hasanhridoy@gmail.com</td>
                      <td>01701007493</td>
                      <td>admin</td>
                      <td>
                        <img src="images/a6.png" alt="" style="height: 50px; width: 50px;">
                      </td>
                      <td>active</td>
                      <td>
                        <a href="" class="btn btn-sm btn-info">View</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <td>01</td>
                      <td>Hasan Hridoy</td>
                      <td>hasanhridoy@gmail.com</td>
                      <td>01701007493</td>
                      <td>admin</td>
                      <td>
                        <img src="images/a6.png" alt="" style="height: 50px; width: 50px;">
                      </td>
                      <td>active</td>
                      <td>
                        <a href="" class="btn btn-sm btn-info">View</a>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </div>
          </div>
          
        </section>
      </section>
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
    </section>
  </section>
  <?php require_once "template/footer.php"; ?>