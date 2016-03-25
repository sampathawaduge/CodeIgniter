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



    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-1.12.2.min.js') ?>"></script>
    <script src="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/css/bootstrap.min.js')?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('/assets/js/comment.js')?>"></script>
<style>

  input.star { display: none; }
    label.star {
      float: right;
      padding: 10px;
      font-size: 36px;
      color: #444;
      transition: all .2s;
    }
    input.star:checked ~ label.star:before {
      content: '\f005';
      color: #FD4;
      transition: all .25s;
    }
    input.star-5:checked ~ label.star:before {
      color: #FE7;
      text-shadow: 0 0 20px #952;
    }
    input.star-1:checked ~ label.star:before { color: #F62; }
    label.star:hover { transform: rotate(-30deg) scale(1.5); }
    label.star:before {
      content: '\f006';
      font-family: FontAwesome;
    }

</style>
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

        <!-- view selected submission -->
          <div class="col-lg-11">
            <div class="well" id="submission">
            <?php
                foreach($sub as $row)
                    {
                      $description = $row['description'];
                      $subcategory = $row['subcategory'];
                      $user = $row['user'];
                      echo "SUBMISSION CATEGORY : <b>".$subcategory."</b>";
                      echo "<h4><b>".$description."</b></h4>";
                      echo "<i class ='fa fa-user fa-2x'></i><span> </span>".$user;
                      echo "<br><i class=\"fa fa-star\"></i><i class=\"fa fa-star-half-o\"></i><span> </span><b>RATE : </b>";
                       ?>
                      <form action="">
                        <input class="star star-5" id="star-5" type="radio" name="star"/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                     </form>
                    <?php  echo "</br>";
                    }
            ?>
          </h4>
          </div>
          </div>

        <!--view comments for selected submission -->
          <div class="col-lg-9">

          <?php
            foreach($com as $row)
                    {
                      ?>
            <div class="well">
                        <?php
                      $description = $row['description'];
                      $user = $row['user'];
                      $com_id = $row['comment_id'];
                        echo "<h5><i class ='fa fa-user'></i><span> </span>".$user."</h5>";
                        echo "<i class ='fa fa-book'></i><span> </span>".$description;

                      $like_no = "like".$com_id;
                      ?>
              <hr>
                      <form name=$like_no>
                        <input class="btn btn-link" type="button" name="like" value="LIKE"><i class="fa fa-thumbs-up"></i>0</input>
                        <input class="btn btn-link" type="button" name="dislike" value="DISLIKE"><i class="fa fa-thumbs-down"></i>0</input>
                      </form>
              </div>
                    <?php
                      echo "</br>";
                    }
          ?>
            </div>

            <!-- Add new idea for selected submission -->
          <div class="col-lg-11">
            <div class="well">
              <h5><i class="fa fa-file-text-o fa-2x"></i><span> </span>Add new idea</h5>
               <textarea class="form-control" rows="5" id="idea_txt"></textarea></br>
                <i class="fa fa-photo"></i><span> </span><b>IMAGE</b><input class="btn btn-default" type="file" name="idea_image"/>
                <i class="fa fa-file"></i><span> </span><b>DOCUMENT</b><input class="btn btn-default" type="file" name="idea_doc"/><br>
                <input class="btn-default" type="button" name="add_idea_submit" class="button" value="submit" id="add_idea_submit"></input>
           </div>
          </div>
        </div>
      </div>

      
    </div>
  </main>

</div> 
</body>
</html>



          