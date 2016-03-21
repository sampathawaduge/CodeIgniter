<!DOCTYPE html>
	
	<html>
	    
	    <head>

	        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
	        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/material.min.css')?>">
	        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/landing_page.css')?>">
	        
	    	
	    	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-1.12.2.min.js') ?>"></script>
	    	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.fullPage.css')?>"></script>
	    	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.fullPage.js');?>"></script>
	    	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.easings.min.js')?>"></script>
	    	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.slimscroll.min.js')?>"></script>
	    	<script type="text/javascript" src="<?php echo base_url('/assets/js/material.min.js')?>"></script>
	    	

	    	<meta name="viewport" content="width=device-width, initial-scale=1">

        </head>

        <body class="container-fluid">

        	<div id="fullpage">

			    <div class="section">

			    	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="button1" onclick="show()">
  						Button
					</button>

			    </div>
			    
			    <div class="section">Some section</div>
			    
			    <div class="section">Some section</div>
			    
			    <div class="section">Some section</div>

			</div>

			<script type="text/javascript">

        	   $(document).ready(function() {
                   $('#fullpage').fullpage({
                        sectionsColor: [' #00aba9', ' #2d89ef', '#7BAABE', 'whitesmoke'],
                                          });
        			});

    		</script>

        </body>

	</html>