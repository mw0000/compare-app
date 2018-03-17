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
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">

  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

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
  <div class="column is-three-quarters">
  <h1 class="title">
        Hello World
      </h1>
      <?php

          include('app.php');
          $app = new App();

          //print_r($app->getAppMenu());

          

          $content = $app->getAppContent();

          if (!empty($content) AND empty($_GET['compare'])) {
            include('content.php');
          } elseif(!empty($_GET['compare'])){?>
          <div class="columns">
            <div class="column">
            
              <?php  
              $h = 1;
              include('content.php');?>

            </div>

            <div class="column">
            
              <?php  include('content.php');?>    

            </div>
          </div>  
        <?php      
          }
        ?>

  </div>
  <div class="column">

          

  <aside class="menu is-info">
  <p class="menu-label">
    Wersje językowe
  </p>
  <ul class="menu-list">
  <?php foreach($app->getAppMenu() as $m) {
            print '<li class="menu-link"><a href="?lang='.$m.'">'.$m.'</a></li>';
          }?>
  </ul>
</aside>
  </div>
</div>


      
      
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

