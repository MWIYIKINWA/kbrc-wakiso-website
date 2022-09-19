  <?php
      include('header.php');
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Profile</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-secondary">
            Update profile
          </button>
        </div>
      </div>

     <div class="container">
      <div class="row">
        <div class="card bordered m-auto" style="width:30rem ;">
           <div class="card-body">
            <img class="img-fluid" src="../pages/assets/images/pstr.jpg" style="height:10rem; width:10rem; border-radius:50%;">
            <input type="file" class=" custom-file-input">
            <div class="my-2">
                <p class=""><strong>Username:</strong> Rubongonya</p>
                <p class=""><strong>Email:</strong> chris@gmail.com</p>
                <p class=""><strong>Password:</strong> P@ss1234</p>
            </div>
           </div>
        </div>
      </div>
     </div>

    </main>
 
    <?php
      include('footer.php');
    ?>