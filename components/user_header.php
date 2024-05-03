<!-- header section starts  -->

<header class="header">

   <nav class="navbar">
      <section class="flex">

         <li><a href="home.php" class="logo"><i class="fas fa-house"></i>Houses4u</a></li>
         <div class="menu">
            <ul>

               <li><a href="#">my listings<i class="fas fa-angle-down"></i></a>
                  <ul class='level-2'>
                     <li><a href="dashboard.php">dashboard</a></li>
                     <li><a href="post_property.php">post property</a></li>
                     <li><a href="my_listings.php">my listings</a></li>
                  </ul>
               </li>
               <li><a href="#">options<i class="fas fa-angle-down"></i></a>
                  <ul class='level-2'>
                     <li><a href="search.php">filter search</a></li>
                     <li><a href="listings.php">all listings</a></li>
                  </ul>
               </li>
               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul class='level-2'>
                     <li><a href="about.php">about us</a></i></li>
                     <li><a href="contact.php">contact us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>

               <li><a href="post_property.php">post property</a></li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">saved <i class="far fa-heart"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-user"></i> <i class="fas fa-angle-down"></i></a>
               <ul class='level-2'>
                  <?php
                  if (!isset($_COOKIE['user_id'])) {
                  ?>
                     <li><a href="login.php">Login</a></li>
                     <li><a href="register.php">Register</a></li>
                  <?php
                  }
                  ?>

                 
                  <?php if ($user_id != '') { ?>
                     <li><a href="update.php">update profile</a></li>
                     <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">logout</a>
                     <?php } ?></li>
               </ul>
            </li>
         </ul>
         <div id="menu-btn" class="fas fa-bars"></div>
      </section>
   </nav>

</header>

<!-- header section ends -->