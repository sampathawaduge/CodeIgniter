<!DOCTYPE html>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
		<link href='http://fonts.which is googleapis.com/css?family=Roboto:400,300,300italic,500,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.teal-red.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/core.css') ?>">


    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-1.12.2.min.js') ?>"></script>
		<script src="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/css/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/submit.js')?>"></script>

	</head>
	<body>
		<!-- Always shows a header, even in smaller screens. -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  			<header class="mdl-layout__header">
    			<div class="mdl-layout__header-row">
      <!-- Title -->
     				 <span class="mdl-layout-title">Ideas</span>


    					</div>
    					
  			</header>
  		<div class="mdl-layout__drawer">

    <span class="mdl-layout-title">IDEAS</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">User Profile</a>
      <a class="mdl-navigation__link" href="">FAQ</a>
      <a class="mdl-navigation__link" href="">About Us</a>
      <a class="mdl-navigation__link" href="">Site Map</a>
    </nav>
  </div>
  <main class="mdl-layout__content ">







 <?php 
    echo '<div class="row">';

     

        
        echo '<div class="col-lg-5">';
        echo '<div class="well well-lg">'.'Hello    <a href="#">'.$user.'</a></div>';
        echo '</div>';
      
    foreach ($details as $detail) {

    echo '<div class="col-lg-5">';
            echo '<div class="well well-sm"><a href="#">'.$detail->category.'</a><p><a href="#">'.$detail->email.'</a></p></div>';
       
          }

          echo '</div>';
          
    echo '</div>';

    ?>



 <table class="table table-hover">
<!--
     <?php foreach($subs as $submission){?>
     <tr>
          
         <td><?php echo $submission->description;?></td>
       
          <td><?php echo $submission->subcategory;?></td>
      </tr>    
     <?php }?>  
-->



<?php 
    echo '<div class="row">';

          foreach ($subs as $submission) {

        
        echo '<div class="col-lg-10">';
        echo '<div class="well well-lg">'.'<a href="#">'.$submission->subcategory.'</a><p><a href="#">'.$submission->description.'</a></p></div>';
        
        echo '</div>';
        
              }
              echo '<div>';

    ?>





   </table>




  </main>

</div> 

	</body>
</html>