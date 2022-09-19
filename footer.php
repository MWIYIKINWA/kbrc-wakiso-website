<?php
include('admin/business/database.php'); 
$linksResults = $content->getLinks();

?>
    
    <section class="footer py-5">
      <div class="container py-5 ">
    
        <div class="row mt-3">
          <div class="col-lg-11">
            <div class="row">
    
              <div class="col-lg-3 py-3">
                <h4>Links</h4>
                <a href="index.php" class="nav-link">Home</a>
                 <a href="index.php#joinUs" class="nav-link">Subscribe</a>
                 <a href="about.php" class="nav-link">About</a>
                 <a href="sermons.php" class="nav-link">Sermons</a>
                 <a href="contact.php" class="nav-link">Contact</a>
                 <a href="contact.php#giving" class="nav-link">Offertory</a>
                 <a href="radio.php" class="nav-link">Radio</a>
                 <a href="dowbi.php" class="nav-link">DOWBI</a>
            </div>
    
            <div class="col-lg-3 py-3">
            <?php while($s = $linksResults->fetch(PDO::FETCH_ASSOC)){ ?>
              <h4>Find Us</h4>
              <a href="<?php echo $s['facebook']; ?>"><span><i class="fab fa-facebook fs-3">Facebook</i></span></a>
              <a href="<?php echo $s['youtube']; ?>"><span><i class="fab fa-youtube fs-3">Youtube</i></span></a>
              <a href="<?php echo $s['twitter']; ?>"><span><i class="fab fa-twitter fs-3">Twitter</i></span></a>
              <a href="<?php echo $s['instagram']; ?>"><span><i class="fab fa-instagram fs-3">Instagram</i></span></a>
          </div>
          <?php } ?>
    
            <div class="col-lg-3 py-3">
              <h4>Services</h4>
               <p style="margin: 0;">LAB service</p>
               <p style="margin: 0;">Main service</p>
               <p style="margin: 0;">MTC Youth Service</p>
               <p style="margin: 0;">Mid-Week service</p>
               <p style="margin: 0;">Prayer Platform</p>
          </div>
    
          <div class="col-lg-3 py-3">
            <h4>Address</h4>
             <address>
              <p style="margin: 0;"><strong>Wakiso</strong> Town Council</p>
              <p style="margin: 0;">Uganda</p>
              <p style="margin: 0;">+256 773112166</p>
             </address>
        </div>
    
          </div>
        </div>
        <hr>
        <p class="text-center" id="yr"></p>
        <script>var year = var new Date(); 
         document.getElementById("yr").innerHTML = "All rights reserved" + " " + year.getFullYear() + " " + "KBRC Wakiso";
      </script>
      </div>
     </section>

     <script src="assets/js/main.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
  
</body>
</html>