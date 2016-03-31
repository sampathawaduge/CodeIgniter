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
      <a class="mdl-navigation__link" href="">User Profile</a>
      <a class="mdl-navigation__link" href="">FAQ</a>
      <a class="mdl-navigation__link" href="">About Us</a>
      <a class="mdl-navigation__link" href="">Site Map</a>
        <a class="mdl-navigation__link" href="<?php echo site_url('/login_controll')?>">Home</a>
        <a class="mdl-navigation__link" href="<?php echo site_url('/login/logout')?>">Log out</a>
    </nav>
  </div>
  <main class="mdl-layout__content ">







 <?php
    echo '<div class="row">';



 echo "<br><br>";
 echo "<div class='col-lg-10'><div class='well'>";
 echo "<h4><i class='fa fa-user fa-3x'></i><span> </span>USER PROFILE</h4><br>";
 echo "<h4><i>Hello,<span> </span></i><b>".$user."</b></h4>";


 foreach ($details as $detail) {

     echo "<i class='fa fa-bars'></i><span> </span>USER CATEGORY :<b> ".$detail->category."</b><br><i class='fa fa-envelope'></i><span> </span>EMAIL : <b>".$detail->email."</b>";

 }

 echo '</div></div></div>';



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
    echo '<h6><b><i class="fa fa-hand-o-down fa-2x"></i><span> </span>MY SUBMISSIONS</b></h6>';


          foreach ($subs as $submission) {

        
        echo '<div class="col-lg-10">';
        echo '<div class="well"><b><i class="fa fa-book fa-2x"></i><span> </span>'.$submission->description.'</b><br>CATEGORY : '.$submission->submission_category.'<br><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span> </span>RATE : ';
              echo ' <i class="fa fa-comments-o"></i>';


            echo '<br><a href="http://localhost/CodeIgniter/index.php/comment_controller/show/'.$submission->submission_id.'">';
            echo '<input type="button" class="btn btn-default" value="ADD IDEA">'.'</a>';

        echo '</div></div>';
        
              }
              echo '<div>';

    ?>





   </table>




  </main>

</div> 

	</body>
</html>