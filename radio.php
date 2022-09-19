<?php
include('header.php');
?>

<style>

    .card{
        background: rgba(245, 249, 250);
        border:none;
        display: flex;
        flex-direction:row;
    }
    .card2{
      box-shadow:0 10px 10px;
      padding: 20px;
    }

</style>

<div class="container">

       <div class="row">
          <div class="text-center">
            <h2 class="fw-bold text-info my-4">Radio Podcasts</h2>
            <p class="lead">Listen to our weekly podcasts here , and download</p>
          </div>
          <hr>
        </div>

        <div class="row">
         <div class="col-lg-9  col-sm-9">

            <div class="card p-3 mb-2 ">
                 <div class="card-body">
                        <h6 class="card-title">Honouring to be honoured</h6>
                        <p class="card-text"><small class="text-muted">Added 3 mins ago</small></p>
                 </div>
               <audio controls> <source  src="assets/med/try.mp3" type="audio/mpeg"></audio>
            </div>

            
            <div class="card p-3 mb-2">
                 <div class="card-body">
                        <h6 class="card-title">Speaking in tougues</h6>
                        <p class="card-text"><small class="text-muted">Added 9 hours ago</small></p>
                 </div>
               <audio controls> <source  src="assets/med/try.mp3" type="audio/mpeg"></audio>
            </div>

            <div class="card p-3 mb-2">
                 <div class="card-body">
                        <h6 class="card-title">Speaking in tougues</h6>
                        <p class="card-text"><small class="text-muted">Added 9 hours ago</small></p>
                 </div>
               <audio controls> <source  src="assets/med/try.mp3" type="audio/mpeg"></audio>
            </div>

            
            <div class="card p-3 mb-2">
                 <div class="card-body">
                        <h6 class="card-title">How a steward should pray</h6>
                        <p class="card-text"><small class="text-muted">Added 8 days ago</small></p>
                 </div>
               <audio controls> <source  src="assets/med/try.mp3" type="audio/mpeg"></audio>
            </div>

            <div class="card p-3 mb-2">
                 <div class="card-body">
                        <h6 class="card-title">How a steward should pray</h6>
                        <p class="card-text"><small class="text-muted">Added 8 days ago</small></p>
                 </div>
               <audio controls> <source  src="assets/med/try.mp3" type="audio/mpeg"></audio>
            </div>

            </div>

            <div class="col-lg-3">
            <div class="card2">
            <h4 class="fw-bold text- my-4"><i class="fas fa-radio fs-3"></i>  programs</h4>
            <p class="fw-bold text-muted"><i class=" fas fa-hand-point-right"></i>  Sunday word : Sunday, 6am (EAT) on METRO FM 93.4</p>
            <p class="fw-bold text-muted"><i class=" fas fa-hand-point-right"></i>  Podcast : Wednesday, 8am (EAT) at <a href="radio.php">Church Radio</a></p>
            </div>
        </div>


        </div>

      


<hr>
</div>






<?php 
  include('footer.php');
?>