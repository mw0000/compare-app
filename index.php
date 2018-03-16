<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>  
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<pre>
<?php

    include('app.php');
    $app = new App();

    //print_r($app->getAppMenu());

    foreach($app->getAppMenu() as $m) {
      print '<li class="menu-link"><a href="?lang='.$m.'">'.$m.'</a></li>';
    }

    $content = $app->getAppContent();

    if (!empty($content)) {
      include('content.php');
    }


?>

</body>
</html>



