<?php
$menuItems = array(
  array('home','Home'),
  array('books','Boeken'),
  array('users','Users'),
  array('logout','Logout'),
  );
 ?>

 <div class="navbar">
   <div class='wrapper'>
     <div class='sidebar'>
       <div class='title'>
         Book On Shelf
       <h6>admin</h6>
       </div>
       <div class='nav'>
        <?php

        echo '<ul>';
        foreach ($menuItems as $menuItem){
          echo '<li><a href="index.php?page='.$menuItem[0].'">'.$menuItem[1].'</a></li>';
        }
        echo '';
        ?>
        </div>
      </div>
    </div>
  </div>
