<?php
		require_once('function/function.php');
		get_header();
	

	
?>

<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">

		<?php
		 $selban="SELECT * FROM banner_info ORDER BY banner_id DESC";
		 $Qb=mysqli_query($con,$selban);

		$banner=mysqli_fetch_assoc($Qb);
	

		?>

			<div class="col-lg-6 col-md-12 col-xl-7">
			
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing "><?= $banner['ban_subtitle'];  ?></span>
					<h1 class="mb-3 mt-3"><?= $banner['ban_title'];  ?></h1>
					
					<p class="mb-4 pr-5"><?= $banner['ban_details'];  ?></p>
					<div class="btn-container ">
						<a href="<?= $banner['ban_url'];  ?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full"><?= $banner['ban_btn_name'];  ?><i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Hours Service</span>
						<h4 class="mb-3">Online Appoinment</h4>
						<p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
						<a href="<?= $banner['ban_url'];  ?>" class="btn btn-main btn-round-full"><?= $banner['ban_btn_name'];  ?></a>
					</div>
					<?php
						$selban="SELECT * FROM work_ht ORDER BY wk_id DESC";
						$Qb=mysqli_query($con,$selban);

						$wk=mysqli_fetch_assoc($Qb);
	

		?>
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Sun - Wed : <span><?=$wk['Sun_Wed'];  ?></span></li>
		                    <li class="d-flex justify-content-between">Thu - Fri : <span><?=$wk['Thu_Fri'];  ?></span></li>
		                    <li class="d-flex justify-content-between">Sat - sun : <span><?=$wk['Sat_sun'];  ?></span></li>
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Emegency Cases</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="images/about/img-1.jpg" alt="" class="img-fluid">
					<img src="images/about/img-2.jpg" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="images/about/img-3.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">Personal care <br>& healthy living</h2>
					<p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.</p>

					<a href="service.php" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cta-section ">
	
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">58</span>k
						<p>Happy People</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">700</span>+
						<p>Surgery Comepleted</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">40</span>+
						<p>Expert Doctors</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">20</span>
						<p>Worldwide Branch</p>
					</div>
				</div>
			</div>
		</div>
	
</section>
<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Award winning patient care</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>

		<div class="row">

		<?php

					$selban="SELECT * FROM in_serv ORDER BY servin_id ASC";
					$Qb=mysqli_query($con,$selban);

					while ($serv=mysqli_fetch_assoc($Qb)) {
					

		?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="<?= $serv['serv_icon'];  ?>"></i>
						<h4 class="mt-3 mb-3"><?= $serv['serv_title'];  ?></h4>
					</div>

					<div class="content">
						<p class="mb-4"><?= $serv['serv_subtitle'];  ?></p>
					</div>
				</div>
			</div>

			<?php } ?>


			</div>

			
			
			
		</div>
	</div>
</section>
<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="images/about/img-3.jpg" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Book appoinment</h2>
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

								if (mysqli_query($con,$insert)) {
									header('Location:confirmation.php');
								}else{
									echo "failed";
								}

						}else{
						echo "Enter Your Full Name";
						}

}
?>

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

					<button class="btn"> <i class="btn btn-main btn-round-full">Make Appoinment <i class="icofont-simple-right ml-2  "></i></i></button>
                </form>


            </div>
			</div>
		</div>
	</div>
</section>
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>We served over 5000+ Patients</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">

			<?php

					$selban="SELECT * FROM clint ORDER BY cl_id ASC";
					$Qb=mysqli_query($con,$selban);

					while ($cl=mysqli_fetch_assoc($Qb)) {
					

			?>

				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="images/<?= $cl['cl_img'];  ?>" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4><?= $cl['cl_cmt'];  ?></h4>
						<span><?= $cl['cl_name'];  ?></span>
						<p><?= $cl['cl_info'];  ?>
						</p>
					</div>
				</div>

				<?php } ?>


			</div>
		</div>
	</div>
</section>
<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
		<?php

				$selban="SELECT * FROM pt ORDER BY pt_id ASC";
				$Qb=mysqli_query($con,$selban);

				while ($pt=mysqli_fetch_assoc($Qb)) {


?>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/<?= $pt['pt_img'];  ?>" alt="" class="img-fluid">
				</div>
			</div>

			<?php } ?>

		</div>
	</div>
</section>

<?php

		get_footer();

?>