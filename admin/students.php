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
            <h3 class="m-b-xs text-black">All Students Data</h3> <small>Welcome back, <?php echo $_SESSION['name'] ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email'] ?></small> </div>
          </section>
          
          <!-- Our Page Content -->

          <div id="add_student_modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- <div class="modal-header"></div> -->
                    <div class="modal-body">
                        <h2>Add new Student</h2>
                        <div class="student-mess"></div>
                        <hr>
                        <form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Student Name</label>
                                <input class="form-control" name="name" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Roll</label>
                                <input class="form-control" name="roll" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Reg</label>
                                <input class="form-control" name="reg" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Board</label>
                                
                                <select class="form-control" name="board">
                                      <option value="" selected="">Select</option>
                                      <option value="barisal">Barisal</option>
                                      <option value="chittagong">Chittagong</option>
                                      <option value="comilla">Comilla</option>
                                      <option value="dhaka">Dhaka</option>
                                      <option value="dinajpur">Dinajpur</option>
                                      <option value="jessore">Jessore</option>
                                      <option value="rajshahi">Rajshahi</option>
                                      <option value="sylhet">Sylhet</option>
                                      <option value="madrasah">Madrasah</option>
                                      <option value="tec">Technical</option>
                                      <option value="dibs">DIBS(Dhaka)</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="">Institute</label>
                                <input class="form-control" name="inst" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Year</label>
                                <select class="form-control" name="year">
                                    <option value="0000" selected="">Select</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="">Exam</label>
                                <select class="form-control" name="exam">
                                    <option value="hsc">HSC/Alim/Equivalent</option>
                                    <option value="jsc">JSC/JDC</option>
                                    <option value="ssc">SSC/Dakhil</option>
                                    <option value="ssc_voc">SSC(Vocational)</option>
                                    <option value="hsc">HSC/Alim</option>
                                    <option value="hsc_voc">HSC(Vocational)</option>
                                    <option value="hsc_hbm">HSC(BM)</option>
                                    <option value="hsc_dic">Diploma in Commerce</option>
                                    <option value="hsc">Diploma in Business Studies</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Photo</label>
                                <input class="" name="photo" type="file">
                            </div>

                            <div class="form-group">
                                <label for=""></label>
                                <input class="btn btn-primary" name="add" type="submit" value="Add Student">
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

                <a id="add_student_btn" class="btn btn-sm btn-primary" href="#">Add new Students</a> 

                <br>
                <br>

                <section class="panel panel-default">
                    <header class="panel-heading"><span class="label bg-danger pull-right m-t-xs">4 left</span> All users Data</header>
                    <table class="table table-striped m-b-none">
                        <thead>
                             <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Role</th>
                              <th>Reg</th>
                              <th>Board</th>
                              <th>Institute</th>
                              <th>Examation</th>
                              <th>Year</th>
                              <th>Photo</th>
                              <th>Status</th>
                              <th>action</th>
                            </tr>
                        </thead>
                        <tbody id="all_student_tbody">
                           
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