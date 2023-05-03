<?php

?>
<!DOCTYPE html>
<html>
  <?php include('templates/header.php'); ?>

 <div class="admin_container">
  <div class="admin_product_form">

    <form action = "<?php $_SERVER['PHP_SELF'] ?>" method = "POST" enctype = "multipart/form-data">
      <h3> Add a new product</h3>
      <input type = "text" placeholder = "Product Name" name = "product_name" class = "box">
      <input type = "number" placeholder = "Product Price" name = "product_price" class = "box">
      <input type = "file" accept = "image/png, image/jpeg, image/jpg, image/webp" name = "product_image" class = "box">
      <input type = "submit" class = "btn" name = "add_product" value = "Add a Product">
    </form>
  </div>
  
 </div>
 
  <?php include('templates/footer.php'); ?>
  
</html>