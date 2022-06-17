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
                                          <a class="btn btn-sm btn-dark card_top_btn" href="careadd.php"><i class="fa fa-th"></i> Registration User</a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover custom_table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">Title </th>
                                        <th scope="col">Sub Title </th>
                                        <th scope="col">ICON </th>
                                       
                                        <th scope="col">Manage</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $sel="SELECT * FROM in_serv ORDER BY servin_id DESC";
                                        $alq=mysqli_query($con,$sel);
                                        while ($data=mysqli_fetch_assoc($alq)) {
                                         
                                       
                                    ?>


                                      <tr>
                                        <td><?=$data['serv_title'];?></td>
                                        <td><?=$data['serv_subtitle'];?></td>
                                        <td><?=$data['serv_icon'];?></i></td>
                                        
                                        <td>
                                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' || $_SESSION['role']=='Editor') { ?>
                                            <a href="aboutuser.php?view=<?=$data['servin_id'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <?php }?>

                                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>    
                                            <a href="edituser.php?edit=<?=$data['servin_id'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                        <?php }?> 

                                        <?php if ($_SESSION['role']=='Admin' ) { ?> 
                                            <a href="deletuser.php?delet=<?=$data['servin_id'];?>"><i class="fa fa-trash fa-lg"></i></a>
                                         <?php }?> 
                                        </td>    
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