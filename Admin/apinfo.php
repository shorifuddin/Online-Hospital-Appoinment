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
                                          <a class="btn btn-sm btn-dark card_top_btn" href="#"><i class="fa fa-th"></i> Registration User</a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover custom_table">
                                    <thead class="thead-dark">
                                      <tr>
                                      <th scope="col">Serial ID </th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Docotor Name </th>
                                        <th scope="col">Problem </th>
                                        <th scope="col">Appoinment Date</th>
                                       <th scope="col">Appoinment Time</th>
                                       <th scope="col">Phone Number</th>
                                       <th scope="col">Message</th>
                                        <th scope="col">Manage</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $sel="SELECT * FROM apmt NATURAL JOIN doctors ORDER BY ap_id ASC";
                                        $alq=mysqli_query($con,$sel);
                                        while ($data=mysqli_fetch_assoc($alq)) {
                                         
                                       
                                    ?>


                                      <tr>
                                        <td><?=$data['ap_id'];?></td>
                                        <td><?=$data['ap_name'];?></td>
                                        <td><?=$data['dc_name'];?></td>
                                        <td><?=$data['ap_pb'];?></td>
                                        <td><?=$data['ap_date'];?></td>
                                        <td><?=$data['ap_time'];?></td>
                                        <td><?=$data['ap_phn'];?></td>
                                        <td><?=$data['ap_sms'];?></td>
                                        <td>
                                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' || $_SESSION['role']=='Editor') { ?>
                                            <a href="aboutuser.php?view=<?=$data['ap_id'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <?php }?>

                                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>    
                                            <a href="edituser.php?edit=<?=$data['ap_id'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                        <?php }?> 

                                        <?php if ($_SESSION['role']=='Admin' ) { ?> 
                                            <a href="deletuser.php?delet=<?=$data['ap_id'];?>"><i class="fa fa-trash fa-lg"></i></a>
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