<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

  <!-- NAV.PHP -->
  <?php
  include('partials/header.php');
  include('partials/nav.php');
 
  ?>

  <div class="container-fluid col-4 justify-content">

    <h1 class="text-center mt-4">Catalogue</h1>
    <div class="container">
      <table class="table table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th class="text-center">Music</th>
            <th class="text-center">Price</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $music_content = file_get_contents("productlist.json");
          $productlist = json_decode($music_content, true);


          foreach($productlist as $info){
            ?>
            <tr>
              <td><?php echo ucfirst($info['music']);?> </td>
              <td class="text-center">₱<?php echo $info['price'];?> </td>
              <td class='text-center'>
               


               
                  <input type="text" name="item_id" value="<?php echo $info['item_id'];?>" hidden>
                  <button class="btn btn-info addtocart">Add to Cart </button> </td>


                </form>
              </tr>

              <?php
            }

            ?>
          </tbody>
        </table>
      </div>

    </div>


  <?php
   include('partials/footer.php');
   ?>