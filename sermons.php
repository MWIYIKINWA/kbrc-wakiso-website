<?php 
include('header.php'); 
$postResults = $content->getPost(); 
?>

<!-- gggggggggggggggggggggggggggggggg -->

  <div class="container my-5">

        <div class="row">
          <div class="text-center">
            <h2 class="fw-bold text-info mb-4">Sermons</h2>
          </div>
        </div>

        <hr>

        <?php while($p = $postResults->fetch(PDO::FETCH_ASSOC)){ ?>

        <div class="row my-3">

          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="admin/business/uploads/<?php echo $p['thumbnail']; ?>" class="img-fluid">
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <h5 class="them fw-bold my-2"><?php echo $p['theme']; ?></h5>
            <p class="text"><strong><?php echo $p['verse']; ?></strong></p>
            <p class="my-0"><strong>By: </strong> <?php echo $p['preacher']; ?>  <br><strong>Event: </strong><?php echo $p['service']; ?></p>
            <p class="text my-2">"<?php echo $p['scripture']; ?>" 
            </p>
            <a href="<?php echo $p['link']; ?>" class="btn btn-outline-primary">Watch</a>
          </div>

        </div>

        <hr>
        <?php } ?>

     

  </div>

  
<div class="more">
    <a class="btn btn-primary">Click for more</a>
  </div>

<style>


  .row .image{
    width:230px ;
    height:200px ;
    border-radius:50%;
  }

  .testimony{
    padding: 70px;
 
  }
  .row .slide{
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction:column;
    padding: 20px;
    row-gap:20px;
    box-shadow:0 10px 10px;
  }

  .slide p{
    padding:0 170px;
    text-align: center;
    font-size:14px;
    font-weight:500;
    color:#333;
  }

  .slide .fa-quote-left{
    font-size:30px;
    color:#4070f4;
  }

  .slide .details{
    display: flex;
    justify-content: center;
    align-items:center;
    flex-direction:column;
  }

  .details .name{
    font-size:20px;
    color:#4070f4;
    font-weight:bold;
  }

  .details .profile{
    font-size:14px;
    color:#333;
    font-weight:bold;
  }

  @media screen  and (max-width:768px){
     .navsliders{
        height: 40px;
        width: 40px;
        border-radius:50%;
        transform:translateY(30px);
        background-color: rgba(0,0,0,0.1);
     }

     .slide p{
    padding:0 20px;
    text-align: center;
    font-size:14px;
    font-weight:500;
    color:#333;
  }
    
  }

 
</style>

  <div class="container p-5 my-4" id="testimonies">

     <div class="row">
          <div class="text-center">
            <h2 class="fw-bold text-info mb-4">Testimonies</h2>
            <p class="lead">See what the Lord has done through his promises. We bless Him</p>
          </div>
          <hr>
        </div>

      <div class="row ">
               
            <div class="swiper mySwiper">
               <div class="swiper-wrapper">

                   <div class="swiper-slide">
                   <div class="testimony">        
                    <div class="slide">
                   <img src="assets/images/image/DSC1.JPG" alt="pic"  class="image">   
                   <p>I thank God for this month of appointment. God has protected and provided.
                    I've started a business and i bless the Lord for that.
                   </p>
                   <i class="fas fa-quote-left"></i>
                   <div class="details">
                     <span class="name">Sister Agnes</span>
                     <span class="profile">Congregant, Business woman</span>
                   </div>
               </div>
              </div>
           </div>

           
               </div>
               <div class="swiper-button-next navsliders"></div>
          <div class="swiper-button-prev navsliders"></div>
          <div class="swiper-pagination"></div>
            </div>
      
         </div>


  </div>


  <!-- <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>       -->


      

     <!-- gggggggggggggggggggggggggggggggg -->
     <script src="assets/js/swiper-bundle.min.js"></script>
     <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
     <?php include('footer.php');  ?>