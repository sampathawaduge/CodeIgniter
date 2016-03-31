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
                            <h4><i class="fa fa-hand-o-right fa-2x"></i><span> </span>REGISTER</h4>
                            <table width="50%">
                            <h6>
                                <tr>
                                    <td><i class="fa fa-user"></i><span> </span>Username</td>
                                    <td><input class="form-control" type="text" id="username" ></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-envelope"></i><span> </span>Email</td>
                                    <td><input class="form-control" type="email" id="email" ></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-key"></i><span> </span>Password</td>
                                    <td><input class="form-control" type="password" id="password" ></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-sort"></i><span> </span>Category</td>
                                    <td><select id="category" class="form-control">
                                            <option value="student">Student</option>
                                            <option value="acadamic_staff">Acadamic Staff</option>
                                            <option value="non_acadamic_staff">Non Acadamic Staff</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input class="btn btn-default" type="button" id="submit" value="submit"></td>
                                </tr>
                              </h6>
                            </table>
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






          