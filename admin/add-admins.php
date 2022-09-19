

    <?php
      include('header.php');
      include('business/database.php');

      $update = false;

      if (isset($_POST['save-admin']))
      {
          $aName = $_POST['username'];
          $aEmail = $_POST['email'];
          $aPassword = $_POST['password'];

          $isSuccess = $admin->insert($aName, $aEmail, $aPassword);
          if ($isSuccess){
               echo "<script>alert('Admin inserted');</script>";
          }
          else
          {
            echo "<script>alert('Failed');</script>";
          }
      }

      //display
          $results = $admin->get();

      //selectById
        if (isset($_GET['Edit'])) {
          $EditId = $_GET['Edit'];
          $update = true;
          //$admin->getById($EditId);

          //echo '<script>alert('.$EditId.');</script>';
        }
       
        //delete
        if (isset($_GET['Delete'])){
          $DeleteId = $_GET['Delete'];
          if ($admin->delete($DeleteId)) {
            echo "<script>alert('Admin Deleted');</script>";
          }
          else{
            echo "<script>alert('Admin failed');</script>";
          }
          //echo "<script>alert('Admin Deleted');</script>";
           }

     ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5">Admins</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Admin
          </button>
        </div>
      </div>

      <?php
         
?>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Email</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
              <td><?php echo $r['Name']; ?></td>
              <td><?php echo $r['Password']; ?></td>
              <td><?php echo $r['Email']; ?></td>
              <td>
                <a href="add-admins.php?Edit=<?php echo $r['id']; ?>" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</a>
                <a  onclick="return confirm('Are you sure you want to delete this admin?');" href="add-admins.php?Delete=<?php echo $r['id']; ?>" class="btn btn-outline-danger">Delete</a>
              </td>
              <?php } ?>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form action="add-admins.php" method="POST">
              <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" name="username" id="floatingInput" placeholder="Username" >
                <label for="floatingInput">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <!-- <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button> -->
              <small class="text-muted">Admins here can access system</small>
              <hr class="m-2">
              <?php if($update == true):?>
                <button type="hiddden" class="btn btn-secondary">Update</button> 
              <?php else: ?>
                <button type="submit" class="btn btn-primary" name="save-admin">Save</button>
                <?php endif; ?>
             
            </form>

          </div>
          
          </div>
      </div>
    </div>



  </div>
</div>


<?php
  include('footer.php');
    ?>
