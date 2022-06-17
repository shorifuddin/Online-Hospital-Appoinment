<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();

if (!empty($_POST)) {
  
  
  $wktitle=$_POST['title'];
  $sw=$_POST['sw'];
  $tf=$_POST['tf'];
  $ss=$_POST['ss'];
  
  
  

      if (!empty($wktitle)) {

        $insert="INSERT INTO work_ht(wk_title,Sun_Wed,Thu_Fri,Sat_sun ) 
        VALUE ('$wktitle','$sw','$tf','$ss')";

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
                                            <a class="btn btn-sm btn-dark card_top_btn" href="workingtimeinfo.php"><i class="fa fa-th"></i> All User Information </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="card-body">

                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">WORKING Title: </label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title" >
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Sun - Wed : </label>
                                        <div class="col-sm-7">
                                          <input type="time" class="form-control" id="" name="sw">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Thu - Fri :</label>
                                        <div class="col-sm-7">
                                          <input type="time" class="form-control" id="" name="tf">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Sat - sun  :</label>
                                        <div class="col-sm-7">
                                          <input type="time" class="form-control" id="" name="ss">
                                        </div>
                                      </div> 


                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn"> UPDATE WORKING TIME </button>
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