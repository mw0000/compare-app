<?php

include('app.php');
$app = new App();
$l = htmlspecialchars($_GET["lang"]);
$content = $app->getCompareContent($l);

?>

<div class="content">

<h1><?php print $content[2];?><span class="content-p-mark"><?php print $l;?></span></h1> 

<div class="entry entry-compare">

<?php

$entry = explode('////', $content[3]);

//print_r($entry);

$i = 1;



foreach($entry as $e) {

    if($i % 2 == 0) {
        $g = 'content-p-grey';
    } else {
        $g = "";
    }

    print '<p class="content-p '.$g.'" id="'. $i .'"><span class="content-p-mark">&para;'. $i .'</span>'.$e.'</p>';
    $i++;

}

?>


</div>
</div>