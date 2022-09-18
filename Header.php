<header class="header">

   <div class="flex">

      <a href="#" class="logo">Clothes</a>

      <nav class="navbar">
         <a href="Cart.php">add products</a><br><br>
         <a href="addproducttbl.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `tbl_cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>