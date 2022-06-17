<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();


?>
                    <div class="row">
                        <div class="col-md-12 main_content">
                            <div class="card">
                              <div class="card-header">
                                  <div class="row">
                                      <div class="col-md-8">
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All User</h4>
                                      </div>
                                      <div class="col-md-4 text-right">
                                          <a class="btn btn-sm btn-dark card_top_btn" href="clientadd.php"><i class="fa fa-th"></i> Registration User</a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover custom_table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">Client Comment </th>
                                        <th scope="col">Client Name </th>
                                        <th scope="col">Client SMS </th>
                                        
                                        <th scope="col">Client Photo </th>
                                        <th scope="col">Manage</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $sel="SELECT * FROM clint ORDER BY cl_id DESC";
                                        $alq=mysqli_query($con,$sel);
                                        while ($data=mysqli_fetch_assoc($alq)) {
                                         
                                       
                                    ?>


                                      <tr>
                                        <td><?=$data['cl_cmt'];?></td>
                                        <td><?=$data['cl_name'];?></td>
                                        <td><?=$data['cl_info'];?></td>
                                        
                                        <td>

                                          <?php
                                                if ($data['cl_img']!='') {
                                                ?>
                                                <img height="50px" src="../images/<?=$data['cl_img'] ?>"/>

                                             <?php   }else{ ?>

                                              <img height="50px" src="images/avatar.png"/>

                                              <?php } ?></td>
                                        <td>
                                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' || $_SESSION['role']=='Editor') { ?>
                                            <a href="aboutuser.php?view=<?=$data['cl_id'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <?php }?>

                                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>    
                                            <a href="edituser.php?edit=<?=$data['cl_id'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                        <?php }?> 

                                        <?php if ($_SESSION['role']=='Admin' ) { ?> 
                                            <a href="deletuser.php?delet=<?=$data['cl_id'];?>"><i class="fa fa-trash fa-lg"></i></a>
                                         <?php }?>     
                                        </td>
                                      </tr>
                                    <?php  } ?>
                                    </tbody>
                                  </table>
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