<?php
 include('header.php');  
  $results = $content->getTheme();
?>
 <?php 
  
  if (isset($_POST['subscribe'])) {
       
          $email = $_POST['email'];
         if($newsLetter->insert($email)){ 
            echo '<script>alert("Thanks for subscribing to our newsLetter");</script>';
            }
          
  }
 ?>

 <!-- home -->
 
  <div class="home" >
      <video class="videoSlider" src="assets/images/chcvid.MP4" autoplay muted loop style=""></video>
      <div class="overlay">
      <div class="content py-3">
        <h3 class="fw-bold display-3 text-light">Kampala Bible<br>Revelation Church</h3>
        <h4 class="fw-bold display-4 text-info">Wakiso</h4>
        <a class="btn btn-info text-light" href="about.php">About Church</a>
      </div>
    </div>
  </div >

  <!-- gggggggggggggggggggggggggggggggg -->
  <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>

  <div class="container-fluid py-5" style="background-color: #fff;">
    <div class="container p-4">
      <div class="row">
        <div class="col">
        <h5 class="text-dark display-6 fw-bold" id="">Its 2022</h5>
              <hr>
              <p class="text-dark fs-4"><?php echo $r['y_theme']; ?></p>
              <p class="text text-dark fs-6"><?php echo $r['y_confession']; ?></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
              <h5 class="text-dark display-6 fw-bold" id="mth">Its September,</h5>
              <hr>
              <p class="text-dark fs-4"><?php echo $r['m_theme']; ?></p>
              <p class="text text-dark fs-6"><?php echo $r['m_confession']; ?></p>
        </div>
      </div>
      <hr>
    </div>
  </div>
  <?php } ?>


  <div class="container my-4">
    <div class="row featurette">
    <div class="col-md-7 col-sm-12 text-center">
      <h2 class="featurette-heading fw-normal lh-1 m-4">Doers Of The Word Bible <span class="text-muted">INSTITUTE.</span></h2>
      <p class="lead">Come get a free Bible study course for free</p>
      <a class="btn btn-info text-light my-3">Register</a>
      <p class="lead fs-4 fw-bold"><em>Its Free</em> &#128512</p>
    </div>
    <div class="col-md-5 col-sm-12">
      <img src="assets/images/bible.JPG" class=" mt-3 bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </div>
  </div>
  </div>
  

  <!-- gggggggggggggggggggggggggggggggg -->

    <div class="container py-4">
      <div class="row py-5 my-3">
        <div class="col-lg-6 col-sm-12 text-center my-5">
          <h3 class="fs-3"><strong class="text-info">WORSHIP</strong> WITH US</h3>
          <p>Join Us Live on <strong>Facebook</strong>, <strong class="text-danger">YouTube</strong> or Stream live on our Services</p><p class="fw-bold">@Kbrc Wakiso</p> 
          <a href="#" class="btn btn-outline-info">Stream Now</a>
          <p class="my-3">With <strong>Pr. Chris Rubongonya</strong></p>
        </div>
         <div class="col-lg-6 col-sm-6">
          <img src="assets/images/pstr.jpg" class="img-fluid" style="border-radius:50%;">
         </div>
      </div>
    </div>

  <!-- gggggggggggggggggggggggggggggggg -->
    <div class="container py-4" id="joinUS">
      <div class="row">
        <div class="col col-sm-12 text-center">
          <h3>Subscribe to our <strong class="text-info">NewsLetter</strong></h3>

          <form method="post" action="index.php">
            <input type="email" placeholder="Enter your Email" class="form-control my-2" name="email" required>
            <button type="submit" class="btn btn-outline-info" name="subscribe">SUBSCRIBE</button>
          </form>

        </div>
      </div>
    </div>

  
  <!-- gggggggggggggggggggggggggggggggg -->
<?php
include('footer.php');
?>