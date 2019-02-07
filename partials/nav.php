<?php
$_SESSION['link']=[];
if (strpos ($_SERVER['PHP_SELF'], 'views/')){
    $_SESSION['link']['views']='./';
    $_SESSION['link']['controllers']='../';
    $_SESSION['link']['']='../';
    $_SESSION['link']['partials']='../';
  }else{
    $_SESSION['link']['views']='./views/';
    $_SESSION['link']['controllers']='./';
    $_SESSION['link']['partials']='./';
  }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="<?php echo $_SESSION['link'][''];?>index.php">Patrick Santos
  </a>
  <button class="navbar-toggler ml-4" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo $_SESSION['link']['views']; ?>cart.php"><span class="badge badge-danger" id="item_count">0</span>Cart</a>
      </li>




      <!-- php -->
      <?php if (empty($_SESSION['user_info'])) {
        ?>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_SESSION['link']['views']; ?>login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_SESSION['link']['views']; ?>register.php">Register</a>
        </li>

        <!-- php -->
        <?php
      }else{
        ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <!-- NAME OF USER -->
            <?php echo ucfirst($_SESSION['user_info']['name']);
            ?> 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo $_SESSION['link']['controllers']; ?>controllers/logout_endpoint.php">
            Log-out</a>
          </div>
        </li>

        <!-- php -->
        <?php
      }
      ?>


    </ul>
  </div>
</nav>




</body>
</html>