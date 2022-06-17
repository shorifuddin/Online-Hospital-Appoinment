<?php

require_once('function/function.php');
logg();
get_hedar();
get_sidbar();



?>
                    <div class="row">
                        <div class="col-md-12 main_content">
                        <h4>Welcome - <?=$_SESSION['name'];?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php
   get_footer();

?>
 