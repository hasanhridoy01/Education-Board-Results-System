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

           <div id="add_user_modal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <!-- <div class="modal-header"></div> -->
                      <div class="modal-body">
                          <h2>Add new Results</h2>
                          <div class="mess"></div>
                          <hr>
                          <form id="add_user_form" action="" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label for="">Name</label>
                                  <input class="form-control" name="name" type="text">
                              </div>

                              <div class="form-group">
                                  <label for="">Username</label>
                                  <input class="form-control" name="uname" type="text">
                              </div>

                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input class="form-control" name="email" type="text">
                              </div>

                              <div class="form-group">
                                  <label for="">Cell</label>
                                  <input class="form-control" name="cell" type="text">
                              </div>

                              <div class="form-group">
                                  <label for="">Role</label>
                                  <select class="form-control" name="role" id="">
                                      <option value="">- select -</option>
                                      <option value="Admin">Admin</option>
                                      <option value="Teacher">Teacher</option>
                                      <option value="Staff">Staff</option>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label for=""></label>
                                  <input class="btn btn-primary" name="add" type="submit" value="Add Results">
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

                <a id="add_user_btn" class="btn btn-sm btn-primary" href="#">Add new user</a> 

                <br>
                <br>

                <section class="panel panel-default">
                    <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> All users Data</header>
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
                        <tbody id="all_users_tbody">
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