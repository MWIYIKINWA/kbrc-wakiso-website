<?php
  include('header.php');
  include('business/database.php');
  $subscriberSum = $newsLetter->subscriberNo();
  $adminSum = $admin->adminNo();
  $sermonSum = $content->sermonNo();

?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class=" pt-3 pb-2 mb-3">
        <div class="row d-flex">
          <div class="col-lg-3 col-sm-6">
            <img class="img-fluid" src="../pages/assets/images/pstr.jpg" style="height:10rem; width:10rem; border-radius:50%;">
          </div>
          <div class="col-lg-9 col-sm-6">
            <h4 class="h4 mt-5">Wecome Admin</h4>
            <p class="lead">pastorchris@gmail.com</p>
          </div>
        </div>
        <hr class="py-3">
      </div>

      <div class="container">

        <div class="row">

          <div class="col-lg-4 my-2">
            <div class="card bg-info" style="width:18rem ;">
              <div class="card-body">
                <h6 class=""><?php echo $subscriberSum; ?></h6>
                <p class="">Subscribers</p>
              </div>
            </div>
          </div>

            <div class="col-lg-4 my-2">
              <div class="card bg-success" style="width:18rem ;">
                <div class="card-body">
                  <h6 class=""><?php echo $adminSum; ?></h6>
                  <p class="">Admins</p>
                </div>
              </div>
              </div>

              <div class="col-lg-4 my-2">
                <div class="card bg-warning" style="width:18rem ;">
                  <div class="card-body">
                    <h6 class=""><?php echo $sermonSum; ?></h6>
                    <p class="">Sermons posted</p>
                  </div>
                </div>
                </div>
            
          </div>
        </div>
      </div>

      
       

    </main>
  
    <?php
      include('footer.php');
    ?>



 
