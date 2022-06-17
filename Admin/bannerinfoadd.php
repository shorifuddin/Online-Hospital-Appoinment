<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();

if (!empty($_POST)) {
  
  
  $bantitle=$_POST['title'];
  $bansubtitle=$_POST['subtitle'];
  $bannerdetails=$_POST['baninfos'];
  $bannerbtn=$_POST['banbutton'];
  $btnurl=$_POST['banbtnurl'];
  
  

      if (!empty($bantitle)) {

              $insert="INSERT INTO banner_info(ban_title,ban_subtitle,ban_details,ban_btn_name,ban_url) 
                VALUE ('$bantitle','$bansubtitle','$bannerdetails','$bannerbtn','$btnurl')";

              if (mysqli_query($con,$insert)) {
                
                echo "Success";
              }else{
                echo "failed";
              }

       

      }else{
       echo "Enter Your Banner Title";
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
                                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Update Banner Info </h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="allbannerinfo.php"><i class="fa fa-th"></i> All User Information </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="card-body">

                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner Title: </label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner SubTitle: </label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="subtitle">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner Details :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="baninfos">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner Button Name :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="banbutton">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner Buttton URL :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="banbtnurl">
                                        </div>
                                      </div> 

                                      

                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn"> UPDATE BANNER AREA </button>
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