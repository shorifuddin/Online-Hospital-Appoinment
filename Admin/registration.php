<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();

if (!empty($_POST)) {
  
  
  $name=$_POST['name'];
  $eml=$_POST['email'];
  $usname=$_POST['username'];
  $pw=md5($_POST['pas']);
  $rpw=md5($_POST['repas']);
  $role=$_POST['role'];
  $photo=$_FILES['img'];
  $imagename='';

            if ($photo['name']!='') {
              $imagename='upload-'. rand(10,100) . time() . '.' . pathinfo($photo['name'],PATHINFO_EXTENSION);
            }

      if (!empty($name)) {

        if ($pw===$rpw) {
              
    
    
 

              $insert="INSERT INTO user_data(user_name,user_email,user_username,user_pas,role_id,user_photo) 
                VALUE ('$name','$eml','$usname','$pw','$role','$imagename')";

              if (mysqli_query($con,$insert)) {
                move_uploaded_file($photo['tmp_name'],'uploads/'.$imagename);
                echo "Success";
              }else{
                echo "failed";
              }

        }else{
          echo "Pass Don't Match";
        }

      }else{
       echo "Enter Your Full Name";
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
                                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Registration Now </h4>
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
                                          <input type="text" class="form-control" id="" name="name">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-7">
                                          <input type="email" class="form-control" id="" name="email">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Username:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="username">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Password:</label>
                                        <div class="col-sm-7">
                                          <input type="password" class="form-control" id="" name="pas">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Confrim Password:</label>
                                        <div class="col-sm-7">
                                          <input type="password" class="form-control" id="" name="repas">
                                        </div>
                                      </div> 


                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">User Role:</label>
                                        <div class="col-sm-7">
                                          <select  class="form-control" id="" name="role">
                                          <option selected>Select Role</option>

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
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn"> REGISTRATION </button>
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