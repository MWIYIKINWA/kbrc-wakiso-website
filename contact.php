<?php include('header.php');  ?>
<!-- gggggggggggggggggggggggggggggggg -->

<div class="container contact p-5">
  <div class="text-center">
    <h2 class="fw-bold text-info mb-4">GET IN TOUCH</h2>
  </div>
  
    <div class="container">
      <div class="row form"> 

        <form method="post" action="admin/business/email.php">
           <div class="row">
            <div class="col-lg-6 form-field">
              <input type="text" class="input" name="firstname" placeholder="First Name" id="firstname" required>
              </div>
      
            <div class="col-lg-6 form-field">
              <input type="text" class="input" name="lastname" placeholder="Last Name" id="lastname" required>
              </div>
          </div>
    
          <div class="row">
            <div class="col-lg-6 form-field">
              <input type="email" class="input" name="email" placeholder="Email" id="email" required>
              </div>
    
            <div class="col-lg-6 form-field">
              <input type="text" class="input" name="phone" placeholder="Phone number" id="phone" required>
              </div>
          </div>
    
          <div class="col-lg-12 form-field">
             <textarea type="text" class="textarea" name="message" placeholder="Message" id="message" required></textarea>
            </div>
    
           <div class="col-lg-6">
            <button class="btn btn-outline-info" type="submit" name="contact">Send</button>
          </div>
        </form>

         </div>
    </div>
</div>


     <!-- gggggggggggggggggggggggggggggggg -->

     <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 address">
              <div class="row">
                <div class="col-6 text-center">
                  <h4 class="fs-4 fw-bold">Address</h4>
                  <p>Wakiso Town Council, Kkona junction</p>
                  <p>Hoima Road</p>
                  <p></p>
                </div>
                <div class="col-6 ">
                  <h4 class="fs-4 fw-bold">Contacts</h4>
                  <p>O773112166, <br>O703112166 <br>Admin@kbrcwakiso.com</p>
                  <a href="tel:O703112166" class="btn btn-primary">Call</a>
                  
                </div>
              </div>
          </div>
        </div>
     </div>

     <!-- gggggggggggggggggggggggggggggggg -->
     <div class="container py-3 my-3 text-center" id="giving">
        <h3>Lets earn <strong class="text-info">MORE</strong></h3>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Click to give</button>
     </div>
     <!-- gggggggggggggggggggggggggggggggg -->
     <style>
      .formhead{
        border: 2px dotted #333;
        text-align: center;
        padding: 10px;
        margin-bottom:20px;
        background: #fff;
      }
     </style>

     
    <div style="padding:100px;" class="modal fade p-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">

            <form action="" method="POST" class="" >

              <h6 class="formhead text-info">Fill the form below </h6>

              <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" name="username" id="floatingInput" placeholder="Username" >
                <label for="floatingInput">Full Name</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" name="text" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Phone</label>
              </div>

              <div class="row">
              <h6 class="text-center fw-bold">Gender</h6>
              <div class="col-6">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="project[]" value="network">
                        <label class="form-check-label text-dark">Male</label>
                    </div>
                 </div>

                 <div class="col-6">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="project[]" value="administrator">
                        <label class="form-check-label text-dark">Female</label>
                    </div>
                 </div>
              </div>

              <div class="row">
              <h6 class="text-center fw-bold">method</h6>
              <div class="col-6">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="project[]" value="network">
                        <label class="form-check-label text-dark">CREDIT</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="project[]" value="network">
                        <label class="form-check-label text-dark">PAYPAL</label>
                    </div>
                 </div>

                 <div class="col-6 my-2">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="project[]" value="administrator">
                        <label class="form-check-label text-dark">MTN mm</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="project[]" value="administrator">
                        <label class="form-check-label text-dark">Airtel mm</label>
                    </div>
                 </div>
              </div>
            </div>

            <div class="row">
            <h6 class="text-center fw-bold">Giving</h6>
            <div class="col-6">
                   <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="project[]" value="administrator">
                        <label class="form-check-label text-dark">Tithe</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="project[]" value="administrator">
                        <label class="form-check-label text-dark">Thanksgiving</label>
                    </div>
            </div>
            <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="project[]" value="administrator">
                        <label class="form-check-label text-dark">Offertory</label>
                    </div>
                     
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="project[]" value="administrator">
                        <label class="form-check-label text-dark">Others</label>
                    </div>
            </div>
            </div>

              

              <small class="mb-0 mt-4 text-center" id="date"></small>
               <script>
                var date = new Date();
                document.getElementById("date").innerHTML = date;
               </script>

                <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="offer">offer</button>
                </div>
              </form>

          </div>

          
          
          </div>
      </div>
    </div>

     <!-- gggggggggggggggggggggggggggggggg -->
     <?php include('footer.php');  ?>
     
