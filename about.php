<?php include('header.php');  ?>
<!-- ggggggggggggggggggggggggggggggggggg -->
<style>
  .img-head{
    height:100%;
  }

  .img-head img{
    height:100%;
  }

  @media only screen and (max-width: 600px){
      .aboutUs{
        margin-top: 30px;
    }
    }

    /* about */
    
  .pr{
    position:relative;
  }

  .pr .details{
       position:absolute;
       left: 0;
       top: 0;
       width: 100%;
       height: 100%;
       background: rgba(0,0,0,0.6);
       color:#fff;
       padding:20px;
       display: flex;
       justify-content: center;
       align-items: center;
       opacity: 0;
       transition: opacity 0.20s;
  }
   
  .pr .details > *{
      transform:translateY(20px);
      transition:transform 0.27s;
    }

    .pr .details:hover{
      opacity: 1;
    }

    .pr .details:hover > *{
      transform:translateY(0);
      cursor: pointer;
    }


/*  convenant section */
    .pic{
       position: relative;
    }

    .pic .details{
       position:absolute;
       left: 0;
       top: 0;
       width: 100%;
       height: 100%;
       background: rgba(0,0,0,0.6);
       color:#fff;
       border-radius:70%;
       display: flex;
       justify-content: center;
       align-items: center;
       opacity: 0;
       transition: opacity 0.20s;
    }

    .pic .details > *{
      transform:translateY(20px);
      transition:transform 0.27s;
    }

    .pic .details:hover{
      opacity: 1;
    }

    .pic .details:hover > *{
      transform:translateY(0);
      cursor: pointer;
    }
 </style>


<div class="center-vertical">
  <div class="aboutUs ">
       <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-6 mb-4 mb-lg-0 pr">
                <div class="img-head">
                  <img src="assets/images/m7.JPG" class="img-fluid">
                  </div>
                <div class="details">
                   <p class="text-center my-2 "><strong>Senior Pastor</strong> <br>Pr. Hannington Mutuukiriza<strong> PHD</strong></p>
               </div>
            
          </div>
          <div class="col-12 col-lg-6 ">
             <h2 class="fw-bold text-info ">KNOW MORE ABOUT US</h2>
             <div class="bg-info mb-2" style=" width: 100px; height: 5px;"></div>
             <p class="">
              <strong>KBRC</strong> Wakiso is a branch of KBRC Makerere. It started in July-2, 2019 in Rockstone gardens Wakiso under a tent.
              After one year, we shifted to kkona just after Town council where we bought land.
              It is pastored by <strong> Chris Rubongonya </strong>who was sent by <strong>Pr. Hannington Mutukiriza PHD</strong>.
              The church's convenant is found in <strong>Ezekiel 37:26-28</strong>
             </p>
             <div class="row">
                <div class="col-12 col-md-4 mb-2 mb-md-0">
                  <div class="box">
                    <i class="fa fa-users mb-3"></i>
                    <h4 class="mb-0">YEARS</h4>
                    <p><strong>03</strong> Yrs</p>
                  </div>
                </div>

                <div class="col-12 col-md-4 mb-2 mb-md-0">
                  <div class="box">
                    <i class="fa fa-users mb-3"></i>
                    <h4 class="mb-0">PEOPLE</h4>
                    <p><strong>100+</strong></p>
                  </div>
                </div>
             </div>
          </div>
        </div>
       </div>
  </div>
 </div>


 <!-- ggggggggggggggggggggggggggggggggggg -->
 <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center">
          <h2 class="fw-bold text-info mt-5" >Our convenant</h2>
          <!-- <div class="bg-info mb-2" style=" width: 100px; height: 5px; place-items: center; "></div> -->
          <p class="py-3 my-3">This is <strong>Ezekiel 37:26-28</strong>...which says
          <strong>"</strong> Moreover I will make a convenant of peace with them; it shall be an evalasting convenant with them:
        and i will place them, and multiply them, and will set my sanctuary in the midst of them for evermore. My tabernacle also shall
      be with them: yea, I will be their God, and they shall be my people. And heathen shall know that I the Lord
    do sanctify Israel, when my sanctuary shall be in the midst of the them for evermore <strong>...."</strong>  </p>
        </div>

        <div class="col-sm-12 col-lg-6 mb-4 pic">
          <img src="assets/images/m10.jpg" class="img-fluid" style="border-radius:50%;">
           <div class="details">
           <p class="text-center my-2 "><strong>Branch Pastor</strong> <br>Pr. Chris Rubongonya</p>
           </div>
        </div>
      </div>
     </div>
   

    <!-- gggggggggggggggggggggggggggggggg -->

  <div class="container">
    <div class="row">
      <h2 class="fw-bold text-info mt-5 text-dark text-center" >Services</h2>
    </div>


    <hr>

    <div class="row">
      <div class="col-12 col-lg-6">
        <img src="assets/images/business2.jpg" class="img-fluid">
      </div>
      <div class="col-12 col-lg-6 p-5 text-center">
        <h5 class="fw-bold">LAB Service</h5>
        <p class="lead">This is the Leadership and business Service. It happens every sunday from 8:30am to 10:00am.</p>
      </div>
    </div>

    <hr>

    <div class="row">
     
      <div class="col-12 col-lg-6 p-5 text-center">
        <h5 class="fw-bold">Main Service</h5>
        <p class="lead">This is the Main Service. It happens every sunday from 10:40am to 12:30am.</p>
      </div>
      <div class="col-12 col-lg-6">
        <img src="assets/images/8.jpg" class="img-fluid">
      </div>
    </div>

    <hr>

    <div class="row">
     
      <div class="col-12 col-lg-6 p-5 text-center my-2">
        <h5 class="fw-bold">MTC Service</h5>
        <p class="lead">This is the More Than Conqueres Service. It happens every last sunday of the month from 4 to 6pm</p>
      </div>
      <div class="col-12 col-lg-6">
        <img src="assets/images/mtc.png" class="img-fluid my-2">
      </div>
    </div>

    <hr>
  </div>
 

    

     <!-- gggggggggggggggggggggggggggggggg -->
     
     <?php include('footer.php');  ?>