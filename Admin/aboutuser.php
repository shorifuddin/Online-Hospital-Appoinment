<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();

$id=$_GET['view'];
$sel="SELECT * FROM user_data  NATURAL JOIN user_role WHERE user_id='$id'";
$view=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($view);


?>
                    <div class="row">
                        <div class="col-md-12 main_content">
                            <div class="card">
                              <div class="card-header">
                                  <div class="row">
                                      <div class="col-md-8">
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> About User</h4>
                                      </div>
                                      <div class="col-md-4 text-right">
                                          <a class="btn btn-sm btn-dark card_top_btn" href="alluser.php"><i class="fa fa-th"></i> All User </a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-8">
                                          <table class="table table-bordered table-striped table-hover custom_view_table">
                                              <tr>
                                                  <td>Name</td>
                                                  <td>:</td>
                                                  <td><?= $data['user_name']; ?></td>
                                              </tr>
                                              <tr>
                                                  <td>Email</td>
                                                  <td>:</td>
                                                  <td><?=$data['user_email'];?></td>
                                              </tr>
                                              <tr>
                                                  <td>Username</td>
                                                  <td>:</td>
                                                  <td><?=$data['user_username'];?></td>
                                              </tr>
                                              <tr>
                                                  <td>Role</td>
                                                  <td>:</td>
                                                  <td><?=$data['role_name'];?></td>
                                              </tr>
                                              <tr>
                                                  <td>Photo</td>
                                                  <td>:</td>
                                                  <td>

                                                  <?php
                                                if ($data['user_photo']!='') {
                                                ?>
                                                <img height="50px" src="uploads/<?=$data['user_photo'] ?>"/>

                                             <?php   }else{ ?>

                                              <img height="50px" src="images/avatar.png"/>

                                              <?php } ?>
                                                  
                                                  </td>
                                              </tr>
                                          </table>
                                      </div>
                                      <div class="col-md-2"></div>
                                  </div>
                              </div>
                              <div class="card-footer text-center">
                                  .
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
   get_footer();

?>