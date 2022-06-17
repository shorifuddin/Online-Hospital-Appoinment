<?php
		require_once('function/function.php');
		get_header();

?>

<section class="section confirmation">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="confirmation-content text-center">
            <i class="icofont-check-circled text-lg text-color-2"></i>
              <h2 class="mt-3 mb-4">Thank you for your appoinment</h2>
              <p>We will contact with you soon.</p>
          </div>
      </div>
    </div>
  </div>
 
  <div class="container">
                             
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
                                      </tr>
                                    <?php  } ?>
                                    </tbody>
                                  </table>
                              </div>
                              <div class="card-footer text-center">
                                  .
                              </div>
  </div>                        
                   
</section>

<!-- footer Start -->
<?php

		get_footer();

?>