<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();

if (!empty($_POST)) {
  
  $ptt=$_POST['ptt'];
  
  $photo=$_FILES['img'];
  $imagename='';

            if ($photo['name']!='') {
              $imagename='upload-'. rand(10,100) . time() . '.' . pathinfo($photo['name'],PATHINFO_EXTENSION);
            }

      if (!empty($ptt)) {


              $insert="INSERT INTO pt(pt_title,pt_img) 
                VALUE ('$ptt','$imagename')";

              if (mysqli_query($con,$insert)) {
                move_uploaded_file($photo['tmp_name'],'../images/'.$imagename);
                echo "Success";
              }else{
                echo "failed";
              }

 
      }else{
       echo "Enter Your Full Title";
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
                                            <a class="btn btn-sm btn-dark card_top_btn" href="partnerinfo.php"><i class="fa fa-th"></i> All User Information </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="card-body">

                                <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Partner Title:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="ptt">
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