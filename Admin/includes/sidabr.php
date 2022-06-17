
  <body>
    <header>
        <div class="container-fluid header_full">
            
        </div>
    </header>
    <section>
        <div class="container-fluid content_part_full">
            <div class="row">
                <div class="col-md-2 sidebar_part">
                  <div class="user_part">
                    <img src="uploads/<?=$_SESSION['photo'];?>" alt="avatar">
                    <h4><?=$_SESSION['name'];?></h4>
                    <h4><?=$_SESSION['role'];?></h4>
                    <p><i class="fa fa-circle"></i> Online</p>
                  </div>
                  <div class="menu">
                      <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>

                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' || $_SESSION['role']=='Editor' ) { ?>
                         <li><a href="alluser.php"><i class="fa fa-user-circle"></i> All User</a></li>
                        <?php }?>

                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>
                        <li><a href="registration.php"><i class="fa fa-user-plus"></i> Add User</a></li>
                        <?php }?>

                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>
                        <li><a href="apinfo.php"><i class="fa fa-bandcamp"></i> Appoinment Info </a></li>
                        <?php }?>

                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>
                        <li><a href="bannerinfoadd.php"><i class="fa fa-bandcamp"></i> Banner Add</a></li>
                        <?php }?>

                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>
                        <li><a href="worktimeadd.php"><i class="fa fa-bandcamp"></i> Working Time</a></li>
                        <?php }?>

                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>
                        <li><a href="careadd.php"><i class="fa fa-bandcamp"></i> Service Add </a></li>
                        <?php }?>

                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>
                        <li><a href="clientadd.php"><i class="fa fa-bandcamp"></i> Client Add </a></li>
                        <?php }?>

                        <?php if ($_SESSION['role']=='Admin' || $_SESSION['role']=='Modaretor' ) { ?>
                        <li><a href="partneradd.php"><i class="fa fa-bandcamp"></i> Partner Add </a></li>
                        <?php }?>

                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>


                      </ul>
                  </div>
                </div>
                <div class="col-md-10 content_part">
                    <div class="row custom_bread_part">
                        <div class="col-md-12 bread">
                             <ul>
                               <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                               <li><a href="#"><i class="fa fa-angle-double-right"></i> Dashboard</a></li>
                             </ul> 
                        </div>
                    </div>