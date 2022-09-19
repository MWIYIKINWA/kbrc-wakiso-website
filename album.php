<?php
include('header.php');
?>

<style>
   .row{
      display: flex;
      flex-wrap:wrap;
    }

    .row .col{
      width: auto;
      overflow: hidden;
      padding:0 4px;
      height: 100%;
    }

    .row .col img{
      margin-top:2%;
      width:100%;
      height: 100%;
      cursor: pointer;
      filter:grayscale(0) brightness(0.5);
      border-radius:5%;
      transition:0.3s linear;
    }
   
    .row .col img:hover{
      filter:grayscale(0) brightness(1);
    }

    @media only screen and (max-width: 600px){
      .row .col{
        flex: 100%;
    }
    }


</style>

  <div class="container">
    <div class="row text-center">
      <h2 class="featurette-heading fw-normal lh-1 m-4">Church <span class="text-muted">GALLARY</span></h2>
      <p class="text-dark">Some of the moments at <strong>church</strong> in pictures. Mininstry is beautiful &#128512</p>
    </div>
  </div>
<hr class="m-4 p-2">

<!-- gggggggggggggggggggggggggggggggg -->
<div class="container my-3">
  <div class="row">
    <h6>About Today</h6>
  </div>
  <div class="row">
    <div class="col">
      <img src="assets/images/image/im1.JPG">
      <img src="assets/images/image/im2.JPG">
      <img src="assets/images/image/im10.JPG">
    </div>
    <div class="col">
      <img src="assets/images/image/im12.JPG">
      <img src="assets/images/image/im2.JPG">
      <img src="assets/images/image/im2.JPG">
    </div>
    <div class="col">
      <img src="assets/images/image/im4.JPG">
      <img src="assets/images/image/im4.JPG">
      <img src="assets/images/image/im4.JPG">
    </div>
     </div>
</div>



<?php
include('footer.php');
?>

