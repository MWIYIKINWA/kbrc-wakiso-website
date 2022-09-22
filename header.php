<?php  include('admin/business/database.php'); 
$linksResults = $content->getLinks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kbrc Wakiso</title>

     <link rel="shortcut icon" type="image/png" href="assets/favlogo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1" >
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/all.css">
    <script src="assets/js/all.js"></script>
</head>
<body>

  <style>

    /* navbar responsive */
         @media screen and (max-width:780px){
            .menuItems a{
               display: block;
               float: right;
            }

            .social{
              display:inline-block;
              margin-left:10px;
            }

            .container{

            }

              }

      
      .overlay{
       z-index: 888;
       color: blue;
       width: 100%;
       height: 100vh;
       background:rgb(48 52 49 / 75%);
       }

       .content{
          position: absolute;
          top:20% ;
          left:20%;
       }
      
       .social a span{
         color:#333;
         margin-left:5px;
       }

       .social a span:hover{
        color:#fff;
       }

       /* .active{
        border-left:1px solid #333;
        margin-right:3px;
       } */
       
       .active:hover{
        border-bottom:3px solid #333;
        transition: 0.3s ease;
       }

       .navbar .navbar-nav{
        margin:0 auto;
       }



    
    
      </style>

   <!-- header  -->
  

<div class="container">
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between  mb-2 ">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 text-dark active fw-bold ">Home</a></li>
        <li><a href="dowbi.php" class="nav-link px-2 text-dark active fw-bold">Dowbi</a></li>
        <li><a href="index.php#joinUS" class="nav-link px-2 text-info active fw-bold">JOIN US</a></li>
      </ul>

      <div class="col-md-3 text-end give">
        <a type="button" href="contact.php#giving" class="btn btn-outline-info my-2">Give</a>
      </div>
    </header>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">KBRC Wakiso</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
             <a  class="nav-link text-dark active fw-bold" href="about.php">About</a>
          </li>
          <li class="nav-item">
             <a  class="nav-link active text-dark fw-bold" href="album.php">Album</a>
          </li>
          <li class="nav-item">
             <a  class="nav-link active  text-dark fw-bold" href="radio.php">Church-radio</a>
          </li>
          <li class="nav-item">
             <a  class="nav-link active text-dark fw-bold" href="tv.php">TV</a>
          </li>
          <li class="nav-item">
             <a  class="nav-link active text-dark fw-bold" href="sermons.php">Sermons</a>
          </li>
          <li class="nav-item">
             <a  class="nav-link active text-dark fw-bold" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
             <a  class="nav-link active text-dark fw-bold" href="sermons.php#testimonies">Testimonies</a>
          </li>
        </ul>
        <?php while($s = $linksResults->fetch(PDO::FETCH_ASSOC)){ ?>
        <div class="py-3 d-flex justify-content-center mx-2 social">
              <a href="<?php echo $s['facebook']; ?>"><span><i class="fab fa-facebook fs-3">Facebook</i></span></a>
              <a href="<?php echo $s['youtube']; ?>"><span><i class="fab fa-youtube fs-3">Youtube</i></span></a>
              <a href="<?php echo $s['twitter']; ?>"><span><i class="fab fa-twitter fs-3">Twitter</i></span></a>
              <a href="<?php  echo $s['instagram']; ?>"><span><i class="fab fa-instagram fs-3">Instagram</i></span></a>
          </div>
          <?php } ?>
      </div>
    </div>
  </nav>

          

