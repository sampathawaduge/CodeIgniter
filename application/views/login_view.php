<!DOCTYPE html>
<html>
<head>
</head>
<body>
</body>
</html>
<!DOCTYPE html>
<html>
<head>

     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
     <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
     <link href='http://fonts.which is googleapis.com/css?family=Roboto:400,300,300italic,500,400italic,700,700italic' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.1/material.teal-red.min.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/core.css') ?>">
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


     <script src="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url('/assets/css/bootstrap.min.js')?>"></script>

     <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-1.12.2.min.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('/assets/js/register.js')?>"></script>
</head>
<body>
<!-- Always shows a header, even in smaller screens. -->

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
     <header class="mdl-layout__header">
          <div class="mdl-layout__header-row">
               <!-- Title -->

               <span class="mdl-layout-title"><b><img src="https://www.uniagents.com/institution-logo/institution-logo-104.png" width="40" height="40" style="margin-left:20px;"><span> </span>CURTIN UNIVERSITY IDEA MANAGEMENT SYSTEM</b></span>



     </header>
     <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">IDEAS</span>
          <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="<?php echo site_url('/register_controller')?>">Register</a>
               <a class="mdl-navigation__link" href="<?php echo site_url('/login')?>">Log-in</a>

          </nav>
     </div>
     <main class="mdl-layout__content ">
          <div class="page-content container-fluid">

               <div class="form-group">
                    <div class="row textarea">

                         <!-- view register -->
                         <div class="col-lg-11">
                              <div class="well">
                                   <div class="form-group">
                                        <h4><i class="fa fa-hand-o-right fa-2x"></i><span> </span>LOG IN</h4>
                                        <?php
                                        $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
                                        echo form_open("login/index", $attributes);?>
                                        <table width="50%">
                                             <h6>
                                                  <tr>
                                                       <td><i class="fa fa-user"></i><span> </span><label for="txt_username" class="control-label">Username</label></td>
                                                       <td><input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                                                            <span class="text-danger"><?php echo form_error('txt_username'); ?></span></td>
                                                  </tr>
                                                  <tr>
                                                       <td><i class="fa fa-key"></i><span> </span><label for="txt_password" class="control-label">Password</label></td>
                                                       <td><input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                                                            <span class="text-danger"><?php echo form_error('txt_password'); ?></span></td>
                                                  </tr>
                                                  <tr>
                                                       <td><input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" /></td>
                                                       <td><input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" /></td>
                                                  </tr>
                                             </h6>
                                        </table>
                                        <br>
                                        <br>
                                        <table>
                                                  <tr>
                                                       <td><i class="fa fa-pencil-square-o"></i><span> </span>still not registered?</td>
                                                       <td><a href="<?php echo site_url('/register_controller')?>"><input id="register" name="btn_register" type="button" class="btn btn-default" value="REGISTER FROM HERE" /></a></td>
                                                  </tr>
                                        </table>

                                        <?php echo form_close(); ?>
                                        <?php echo $this->session->flashdata('msg'); ?>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>


          </div>
     </main>

</div>
</body>
</html>


<!--<div class="container">-->
<!--     <div class="row">-->
<!--          <div class="col-lg-4 col-sm-4 well">-->
<!--          --><?php //
//          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
//          echo form_open("login/index", $attributes);?>
<!--          <fieldset>-->
<!--               <legend>Login</legend>-->
<!--               <div class="form-group">-->
<!--               <div class="row colbox">-->
<!--               <div class="col-lg-4 col-sm-4">-->
<!--                    <label for="txt_username" class="control-label">Username</label>-->
<!--               </div>-->
<!--               <div class="col-lg-8 col-sm-8">-->
<!--                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="--><?php //echo set_value('txt_username'); ?><!--" />-->
<!--                    <span class="text-danger">--><?php //echo form_error('txt_username'); ?><!--</span>-->
<!--               </div>-->
<!--               </div>-->
<!--               </div>-->
<!--               -->
<!--               <div class="form-group">-->
<!--               <div class="row colbox">-->
<!--               <div class="col-lg-4 col-sm-4">-->
<!--               <label for="txt_password" class="control-label">Password</label>-->
<!--               </div>-->
<!--               <div class="col-lg-8 col-sm-8">-->
<!--                    <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="--><?php //echo set_value('txt_password'); ?><!--" />-->
<!--                    <span class="text-danger">--><?php //echo form_error('txt_password'); ?><!--</span>-->
<!--               </div>-->
<!--               </div>-->
<!--               </div>-->
<!--                              -->
<!--               <div class="form-group">-->
<!--               <div class="col-lg-12 col-sm-12 text-center">-->
<!--                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />-->
<!--                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />-->
<!--                    <a href="--><?php //echo site_url('/register_controller')?><!--">REGISTER</a>-->
<!--               </div>-->
<!--               </div>-->
<!--          </fieldset>-->
<!--          --><?php //echo form_close(); ?>
<!--          --><?php //echo $this->session->flashdata('msg'); ?>
<!--          </div>-->
<!--     </div>-->
<!--</div>-->
<!---->
<!--<!--load jQuery library-->-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<!--<!--load bootstrap.js-->-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<!--</body>-->
<!--</html>-->