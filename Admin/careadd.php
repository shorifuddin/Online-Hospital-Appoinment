<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();

if (!empty($_POST)) {
  
  $sertitle=$_POST['title'];
  $sersubtitle=$_POST['subtitle'];
  $sericon=$_POST['icon'];
 
      if (!empty($sertitle)) {


              $insert="INSERT INTO in_serv(serv_title,serv_subtitle,serv_icon) 
                VALUE ('$sertitle','$sersubtitle','$sericon')";

              if (mysqli_query($con,$insert)) {
                
                echo "Success";
              }else{
                echo "failed";
              }

      }else{
       echo "Enter Your Title";
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
                                            <a class="btn btn-sm btn-dark card_top_btn" href="careinfo.php"><i class="fa fa-th"></i> All User Information </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="card-body">

                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Title:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">SubTitle:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="subtitle">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Icon:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="icon">
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