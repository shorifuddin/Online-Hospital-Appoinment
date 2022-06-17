<?php
		require_once('function/function.php');
		get_header();

?>
	

	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for an Emergency Service!</span>
              <h2 class="text-color mt-3">+84 789 1256 </h2>
          </div>
      </div>
      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appoinment</h2>
            <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
            
<?php
					if (!empty($_POST)) {
  					$name=$_POST['name'];
					$dc=$_POST['dc'];
					$pblm=$_POST['pblm'];
					$date=$_POST['date'];
					$time=$_POST['time'];
					$phone=$_POST['phone'];
					$sms=$_POST['sms'];

						if (!empty($name)) {

								$insert="INSERT INTO apmt(ap_name,dc_id,ap_pb,ap_date,ap_time,ap_phn,ap_sms) 
									VALUE ('$name','$dc','$pblm','$date','$time','$phone','$sms')";

        	if (mysqli_query($con,$insert)){
            echo "success";
						}else{
						echo "Failed";
						}

        }else{
						echo "Enter Your Full Name";
						}
     }
?>
	
  <button  class="btn" ><a href="confirmation.php"   class="btn btn-info btn-md" target="_blank">Confirmated Appointments </a></button>
					     <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
					<div class="col-lg-12">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="dc">
                                  <option>Choose Doctors</option>
								  <?php

                                          $sel="SELECT * FROM doctors  ORDER BY dc_id ASC";
                                          $rol=mysqli_query($con,$sel);
                                          while ($dc=mysqli_fetch_assoc($rol)) {
                                         
                                   ?>
                                  <option  value="<?= $dc['dc_id']; ?>"><?= $dc['dc_name'];?></option>

								  <?php } ?>
                                 
                                </select>
                            </div>
                        </div>
						<div class="col-lg-6">
                            <div class="form-group">
                                <input name="pblm" id="date" type="text" class="form-control" placeholder="Write Your Problem">
                            </div>
                        </div>
                       

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="time" class="form-control" placeholder="Time">
                            </div>
                        </div>
                        

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="sms" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

					<button class="btn"><i class="btn btn-danger btn-md" target="_blank">Make Appointments </i></button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- footer Start -->
<?php

		get_footer();

?>