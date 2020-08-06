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
                        <h3 class="m-b-xs text-black">Setttings</h3> <small>Welcome back, <?php echo $_SESSION['name'] ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php echo $_SESSION['email'] ?></small> </div>
                    </section>
                    
                    <!-- Our Page Content -->
                    <?php 

                       if ( isset($_POST['pass']) ) {
                           
                           //Get Value
                           $old_pass = $_POST['old_pass'];
                           $new_pass = $_POST['new_pass'];
                           $confirm_pass = $_POST['confirm_pass'];
                           $user_id = $_SESSION['id'];

                           //Check Confirm
                           if ( $new_pass == $confirm_pass ) {
                               $cpass = true;
                           }else{
                               $cpass = false;
                           }

                           //Old pass Check
                           if ( password_verify($old_pass, $_SESSION['pass']) ) {
                               $old_pass_check = true;
                           }else{
                               $old_pass_check = false;
                           }

                           if ( empty($old_pass) || empty($new_pass) || empty($confirm_pass) ) {

                               $mess = "<p class=\"alert alert-danger\">All fields are required ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

                           }elseif ( $cpass == false ) {
                               
                               $mess = "<p class=\"alert alert-warning\">Confirm password not Match! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

                           }elseif ( $old_pass_check == false ) {
                               
                               $mess = "<p class=\"alert alert-danger\">Old password not Match! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

                           }else{

                               $mess = $user -> passwordChange($user_id, $new_pass);

                           }

                       }


                     ?>
                     <div class="row">
                        <div class="col-sm-10">
                            <?php  

                                if ( isset($mess) ) {
                                    echo $mess;
                                }

                            ?>
                            <section class="panel panel-default">
                                <header class="panel-heading font-bold">Change Password</header>
                                <div class="panel-body">
                                    <form class="bs-example form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Old Password</label>
                                            <div class="col-lg-10"><input name="old_pass" type="password" placeholder="Old Password" class="form-control" /> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">New Password</label>
                                            <div class="col-lg-10"><input name="new_pass" type="password" placeholder="New Password" class="form-control" /></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Confirm Password</label>
                                            <div class="col-lg-10"><input name="confirm_pass" type="password" placeholder="Confirm Password" class="form-control" /></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10"><button name="pass" type="submit" class="btn btn-sm btn-default">Change Password</button></div>
                                        </div>

                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>


                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
    <?php require_once "template/footer.php"; ?>