<?php 
include('header.php');
include('business/database.php');
$themeResults = $content->getTheme();
$linksResults = $content->getLinks();

//theme

if (isset($_POST['updateTheme'])) {
    
    $id = $_POST['id'];
    $mtheme = $_POST['mtheme'];
    $mconfession = $_POST['mconfession'];
    $ytheme = $_POST['ytheme'];
    $yconfession = $_POST['yconfession'];

    if ($content->updateTheme($ytheme, $yconfession, $mtheme, $mconfession, $id)) {
       echo '<script>alert("Theme update successful");</script>';
    }
    else{
      echo '<script>alert("Update failed");</script>';
    }
}

//sermons

if (isset($_POST['postSermon'])) {
    
  $theme = $_POST['theme'];
  $verse = $_POST['verse'];
  $preacher = $_POST['preacher'];
  $service = $_POST['service'];
  $scripture = $_POST['scripture'];
  $link = $_POST['link'];
  
  $origFile = $_FILES["thumbnail"]["tmp_name"];
  $thumbnail =  $_FILES["thumbnail"]["name"];
  $target_dir = "business/uploads/".$thumbnail;
  move_uploaded_file($origFile, $target_dir);

  if ($content->postSermon($theme, $verse, $thumbnail, $preacher, $service, $scripture, $link)) {
     echo '<script>alert("Sermon posted successful");</script>';
  }
  else{
    echo '<script>alert("posting failed");</script>';
  }
}


//links

if (isset($_POST['updateLinks'])) {
    
  $id = $_POST['id'];
  $youtube = $_POST['youtube'];
  $facebook = $_POST['facebook'];
  $twitter = $_POST['twitter'];
  $instagram = $_POST['instagram'];

  if ($content->updateLinks($youtube, $facebook, $twitter, $instagram, $id)) {
     echo '<script>alert("Links update successful");</script>';
  }
  else{
    echo '<script>alert("Update failed");</script>';
  }
}
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

     <!-- ffffffffffffffffffffffffffffffff -->

     <div class="row m-3">
          <h1 class="h4">Sermon section</h1>
          <hr class="m-3">

          <form action="web-content.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-6">
                <div class="form-floating m-2">
                  <input type="text" class="form-control rounded-3" id="floatingInput" name="theme" required>
                  <label for="floatingInput">Theme</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating m-2">
                  <input type="text" class="form-control rounded-3" id="floatingInput" name="verse" required>
                  <label for="floatingInput">Verse</label>
                </div>
              </div>
            </div>
          
           <div class="m-2 custom-file">
              <label class="m-2 custom-file-label">Add Thumbnail Image</label>
              <input type="file" class="form-control rounded-3 custom-file-input" accept="image/*" name="thumbnail" id="thumbnail" required>
            </div>

            <div class="row">
              <div class="col-6">
                <div class="form-floating m-2">
                  <input type="text" class="form-control rounded-3" id="floatingInput" name="preacher" required>
                  <label for="floatingInput">Preacher</label>
                </div>
              </div>
              <div class="col-6">
                <div class="m-2">
                   <select class="form-select" style="height:3.8rem ;" name="service">
                    <option value="Main service" selected>Main service</option>
                    <option value="LABservice">LAB service</option>
                    <option value="MTC service">MTC service</option>
                    <option value="Mid week service">Mid week service</option>
                    <option value="Prayer platform">Prayer Platform</option>
                    <option value="DOWBI">DOWBI</option>
                   </select>
                </div>
              </div>
            </div>

            <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" name="scripture" required>
              <label for="floatingInput">Verse Text</label>
            </div>

            <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" name="link" required>
              <label for="floatingInput">Sermon link</label>
            </div>

            <button class="btn btn-primary my-2 mx-4" type="submit" name="postSermon">Post</button>
          </form>

        </div>  

<!--  ffffffffffffffffffffff -->

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Change web content</h1>
      </div>
      
      <?php while($r = $themeResults->fetch(PDO::FETCH_ASSOC)){ ?>
       <div class="container">
        <div class="row m-3">
          <h1 class="h4">Church theme section</h1>
          <form method="post" action="web-content.php">
             <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" value="<?php echo $r['m_theme']; ?>" name="mtheme">
              <label for="floatingInput">Month Theme</label>
            </div>

            <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" value="<?php echo $r['m_confession']; ?>" name="mconfession">
              <label for="floatingInput">Month Confession</label>
            </div>

            <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" value="<?php echo $r['y_theme']; ?>" name="ytheme">
              <label for="floatingInput">Year Theme</label>
            </div>

            <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" value="<?php echo $r['y_confession']; ?>" name="yconfession">
              <label for="floatingInput">Year Confession</label>
            </div>

            <input type="hidden"  value="<?php echo $r['theme_id']; ?>" name="id">

            <button class="btn btn-primary my-2 mx-4" name="updateTheme" type="submit">Update</button>
          </form>
          <?php } ?>
        </div>


        <!-- ffffffffffffffffff -->

        <?php while($s = $linksResults->fetch(PDO::FETCH_ASSOC)){ ?>
      
       <div class="row m-3">
          <h1 class="h4">Social Media Links</h1>
          <form  action="web-content.php"  method="post">
             <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" name="youtube" value="<?php echo $s['youtube']; ?>">
              <label for="floatingInput">Youtube</label>
            </div>

            <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" name="facebook" value="<?php echo $s['facebook']; ?>">
              <label for="floatingInput">Facebook</label>
            </div>

            <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput" name="twitter" value="<?php echo $s['twitter']; ?>">
              <label for="floatingInput">Twitter</label>
            </div>

            <div class="form-floating m-2">
              <input type="text" class="form-control rounded-3" id="floatingInput"  name="instagram" value="<?php echo $s['instagram']; ?>">
              <label for="floatingInput">Instagram</label>
            </div>

            <input type="hidden"  value="<?php echo $s['social_id']; ?>" name="id">

            <button class="btn btn-primary my-2 mx-4" name="updateLinks" type="submit">Update</button>
          </form>
          <?php } ?>
        </div>

       </div>

    </main>

    <?php
      include('footer.php');
    ?>

