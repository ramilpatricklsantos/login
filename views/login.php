<!-- NAV.PHP -->
 <?php
 include('../partials/nav.php');
 include('../partials/header.php');
 ?>


 <div class="container-fluid col-4 justify-content">

  <h1>Account Login</h1>

  <hr>

  <form action="../controllers/login_endpoint.php" method="POST">
    <div class="form-group ">
      <label for="exampleInputUsername">Username</label>
      <input type="username" name="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Enter Username">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<?php
  include('../partials/footer.php')
  ?>