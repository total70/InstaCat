<?php 
  $page = $_GET['page'];
  $includePage = '';
  
  if(is_null($page)) {
    $includePage = 'home';
  } else {
    $includePage = $page;
  }
?>
<div class="container">
  <div class="nav">
    <?php include('navigation.php'); ?>
  </div>
  <div class="content">
    <div class="inner-content">
      <?php include("page/".$includePage.".php");  ?>
    </div>
  </div>
</div>