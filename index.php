<?php 
 require 'inc/top.php';
 require 'inc/nav.php';
 ?>
 
<?php 
$page=(isset($_GET['page'])) ? $_GET['page'] : '';
switch ($page) {
     case 'About':
         
         break;
     
     default:
         require 'view/home.php';
         break;
 } ?>









 <?php
 require 'inc/footer.php';

 ?>