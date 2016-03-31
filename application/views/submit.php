<!DOCTYPE html>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
		<link href='http://fonts.which is googleapis.com/css?family=Roboto:400,300,300italic,500,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.teal-red.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/core.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


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
                    <span class="mdl-layout-title"><b><img src="https://www.uniagents.com/institution-logo/institution-logo-104.png" width="40" height="40" style="margin-left:20px;"><span> </span>CURTIN UNIVERSITY IDEA MANAGEMENT SYSTEM</b></span>

                    <div style="margin-left:450px;"> <?php echo "<b><i>Welcome - </i></b> ".$this->session->userdata['username']; ?><img src="https://image.freepik.com/free-icon/user-image-with-black-background_318-34564.png" width="40" height="40" style="margin-left:20px;"> </div>  </div>



    					
  			</header>
  		<div class="mdl-layout__drawer">

    <span class="mdl-layout-title">IDEAS</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="<?php echo site_url('/user_profile')?>">User Profile</a>
      <a class="mdl-navigation__link" href="">FAQ</a>
      <a class="mdl-navigation__link" href="">About Us</a>
      <a class="mdl-navigation__link" href="">Site Map</a>
        <a class="mdl-navigation__link" href="<?php echo site_url('/login_controll')?>">Home</a>
        <a class="mdl-navigation__link" href="<?php echo site_url('/login/logout')?>">Log out</a>
    </nav>
  </div>
  <main class="mdl-layout__content ">
    <div class="page-content container-fluid">
    	
    	<div class="form-group">
    		<div class="row textarea">
    			<div class="col-lg-10">
                    <div class="well">
    				<label for="comment"><h5><i class="fa fa-hand-o-right fa-2x"></i><span> </span>SUBMIT YOUR IDEA</h5></label>
  					<textarea class="form-control" rows="5" id="comment"></textarea>

             <!--<div class="dropdown" id="category">
  <button class="btn btn-default" type="button" data-toggle="dropdown">Categories
  <span class="caret"></span></button>
  <ul class='dropdown-menu' id='category'> -->
      SELECT SUBMISSION CATEGORY : <select id="category" class="form-control">
                            <option value=""></option>
  <?php
      
    foreach ($test as $key) {

        echo "<option value=".$key->category_name.">".$key->category_name."</option>";
          }
  
  ?>
          </select>
                        <button type="button" class="btn btn-default" id="idea_button">Add Idea</button>

         <!-- </div> -->
                    </div>

     
    			</div>
    		</div>
		  </div>

      
    </div>


      <div class="row">

          <h6><b><i class="fa fa-hand-o-down fa-2x"></i><span> </span>MOST RECENT SUBMISSIONS</b></h6>
      <?php
        foreach ($sub as $key)
        {
      ?>

      <?php
            echo '<div class="col-lg-10">';
            echo '<div class="well"><h6><b><i class="fa fa-book fa-2x"></i><span> </span>'.$key->description.'</b></h6><i class="fa fa-user"></i><span> </span>'.$key->submission_user.'<br>CATEGORY : '.$key->submission_category.'<br><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span> </span>RATE : <br>';
      ?>

            <i class="fa fa-comments-o"></i>
      <?php
          
            echo '<a href="http://localhost/CodeIgniter/index.php/comment_controller/show/'.$key->submission_id.'">';
            echo '<input type="button" class="btn btn-default" value="ADD IDEA">'.'</a>';
            echo '</div>';
            echo '</div>';
        }
      ?>
      
      </div>

  </main>

</>

	</body>
</html>