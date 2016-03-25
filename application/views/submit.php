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
    <div class="page-content container-fluid">
    	
    	<div class="form-group">
    		<div class="row textarea">
    			<div class="col-lg-10">
    				<label for="comment">Submit Your Idea</label>
  					<textarea class="form-control" rows="5" id="comment"></textarea>
  					<button type="button" class="btn btn-primary btn-sm Add_button" id="idea_button">Add Idea</button>



             <div class="dropdown" id="category">
  <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Categories
  <span class="caret"></span></button>
  <ul class='dropdown-menu' id='category'>
  <?php
      
    foreach ($test as $key) {
            echo "<li><a>".$key->name."<a></li>";
          }
  
  ?>

  </ul>

</div>

     
    			</div>
    		</div>
		  </div>

      
    </div>
    <table class="table table-hover">
    <?php 
    echo '<div class="row">';

          foreach ($sub as $key) {

        
        echo '<div class="col-lg-10">';
        echo '<div class="well well-lg">'.'<a href="#">'.$key->description.'</a></div>';
        echo '</div>';
        
              }
              echo '<div>';

    ?>

    </table>
  </main>

</div> 

	</body>
</html>