<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();


$id=$_GET['edit'];
$sel="SELECT * FROM user_data NATURAL JOIN user_role WHERE user_id='$id'";
$edit=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($edit);



if (!empty($_POST)) {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $img=$_FILES['img'];
      $imgname='';

      if ($img['name']!='') {
        $imgname='upload'. time().rand(10,1000).'.'.pathinfo($img['name'],PATHINFO_EXTENSION);
      }

    if (!empty($name)) {
      $update="UPDATE user_data SET user_name='$name',user_email='$email',user_photo='$imgname' WHERE user_id='$id'";

        if (mysqli_query($con,$update)) {
        if($img['name']!=''){
          $imgUpdate="UPDATE user_data SET user_photo='$imgname' WHERE user_id='$id'";
          mysqli_query($con,$imgUpdate);
          move_uploaded_file($img['tmp_name'],'uploads/'.$imgname);
          echo "Successfully Update";
          }else{
          echo "failed";
          }
      }else{
        echo "User registration failed!";
        }
      }else{
        echo "Please enter your name!";
      }
    }

?>
                    <div class="row">
                        <div class="col-md-12 main_content">
                            <form method="POST"  enctype="multipart/form-data" action="">
                              <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-8">
                                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Edit User Information</h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="alluser.php"><i class="fa fa-th"></i> All User Information </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="card-body">

                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Name:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="name" value="<?=$data['user_name']; ?>">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-7">
                                          <input type="email" class="form-control" id="" name="email" value="<?=$data['user_email']; ?>">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Username:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="username"  disabled value="<?=$data['user_username']; ?>">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">User Role:</label>
                                        <div class="col-sm-7">
                                          <select  class="form-control" id="" name="role"  disabled>
                                          <option value="<?=$data['role_id']; ?>"><?=$data['role_name']; ?></option>

                                          <?php

                                          $sel="SELECT * FROM user_role  ORDER BY role_id ASC";
                                          $rol=mysqli_query($con,$sel);
                                          while ($urole=mysqli_fetch_assoc($rol)) {
                                         
                                          ?>

                                          <option value="<?= $urole['role_id']; ?>"><?= $urole['role_name'];?></option>

                                              <?php } ?>
                                          


                                          </select>
                                        </div>
                                      </div> 



                                      <div class="form-group row custom_form_group">
                                        
                                                  <label class="col-sm-3 col-form-label">Photo:</label>
                                                  <div class="col-sm-7">
                                                    <input type="file" id="" name="img">
                                                  </div>
                                      </div>


                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
                                </div>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php
   get_footer();

?>