    <?php
      include('header.php');
      include('business/database.php');

      $results = $newsLetter->getAllEmails();
      $sum = $newsLetter->subscriberNo();
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Subscriber Emails</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <p class="mt-3 mx-5"><?php echo $sum; ?> Subscribers</p>
          <button type="button" class="btn btn-sm btn-outline-secondary m-2" onclick="selectAll()" value="check" name="select"> 
            Select All
          </button>
          <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#newsletter">
             Send newsletter
          </button>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Email</th>
              <th scope="col">choose</th>
            </tr>
          </thead>
          <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)):?>
          <tbody>
            <tr>
              <td><?php echo $r['email'];?></td>
              <td><input type="checkbox" class="form-check-input" name="selEmail" value="<?php echo $r['email'];?>"></td>
            </tr>
          </tbody>
          <?php endwhile;?>
        </table>

      </div>
    </main>
  </div>
</div>

<script src="js/main.js"></script>

<div class="modal fade" id="newsletter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form class="" action="" method="">

          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="emaillist" placeholder="Username" value="">
            <label for="floatingInput">Selected Emails</label>
          </div>
         
         
         <script>
              var emaillist = document.getElementById('emaillist');
              var listarray = [];
              let checkboxes = document.getElementsByName("selEmail");
              for (var checkbox of checkboxes ) {
                    checkbox.addEventListener('click', function(){
                       if (this.checked == true) {
                           listarray.push(this.value);
                           emaillist.value = listarray.join(',');
                       }else{
                        emaillist.value = "";
                       }
                  })
    
                 }
          </script>

          <div class="form-floating mb-3">
            <textarea name="content" class="form-control rounded-3" id="floatingInput"></textarea>
          </div>
         
        </form>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="send">Send</button>
      </div>
    </div>
  </div>
</div>




<?php
  include('footer.php');
    ?>


