<?php
          include('app.php');
          $app = new App();
          //print_r($app->getAppMenu());
          // content ready
          $content = $app->getAppContent();
          
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="assets/css/bulma.css">
  <link rel="stylesheet" href="assets/css/bulma-switch.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">

  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="assets/js/app.js"></script>

</head>

<body>
<div class="container">
  <nav class="level menu">
    <!-- Left side -->
    <div class="level-left">
      <div class="level-item">
        <p class="subtitle is-5">
          <strong>123</strong> posts
        </p>
      </div>
     
    </div>

    <!-- Right side -->
    <div class="level-right">

 
      <p class="level-item"><a>Drafts</a></p>
    </div>
  </nav>




</div>

 <section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-one-quarter">
      </div>
      <div class="column is-one-quarter">
      </div>
      <div class="column is-one-quarter">
      </div>
      <div class="column is-one-quarter">
      <?php if($app->getStatusCompare() === FALSE) { ?>
        <div class="field">
          <input id="switchRoundedInfo" type="checkbox" name="switchRoundedInfo" class="switch is-rounded is-info" checked="checked">
          <label for="switchRoundedInfo">Schowaj menu</label>
        </div>
      <?php } ?>    
      </div>
    </div>
  </div>
</div>

 <section class="section">
    <div class="container">



      

      <?php


          // views
          // 1. single
          if (!empty($content) AND $app->getStatusCompare() === FALSE) { ?>

          <div class="columns" id="columns">
            <div class="column is-three-quarters" id="main">  
              <?php  
              include('content.php'); } ?>
            </div>
            <?php if($app->getStatusCompare() === FALSE) { ?>
            <div class="column" id="menu-column">
              <aside class="menu is-info">
                <ul class="menu-list lang-menu">
                  <?php foreach($app->getAppMenu() as $m) {
                    print '<li class="menu-link"><a href="?lang='.$m.'">'.$m.'</a></li>';
                  }?>
                </ul>
              </aside>
            </div>
          <?php }?>
          </div>  

            
          <?php if($app->getStatusCompare() === TRUE) { ?>
          <div class="columns">
            
            <?php //print_r($app->getRandomCompare());?>  

            <?php 
            
            foreach($app->getRandomCompare() as $content) { ?>
              

              <div class="column">

      <div class="dropdown">
        <div class="dropdown-trigger">
          <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu">
            <span>Dropdown button</span>
            <span class="icon is-small">
              <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
          <div class="dropdown-content">
            
          <?php foreach($app->getAppMenu() as $m) {
            print '<a class="dropdown-item content-'.$m.'" href="#">'.$m.'</a>';
          }?>
            
            <hr class="dropdown-divider">
            <a href="#" class="dropdown-item">
              With a divider
            </a>
          </div>
        </div>
      </div>

                <div class="compare-content-data">
                  <?php
                  include('content.php');?>
                </div>
              </div>
            <?php } ?>
          </div>  
        <?php      
          }
        ?>
    </div>
  </section>

<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
      </p>
    </div>
  </div>
</footer>
        
</body>
</html>

