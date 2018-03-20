<div class="content">

<h1>Tytuł: <?php print $content[2];?></h1> 

<div class="entry <?php if($app->getStatusCompare() === TRUE) { ?>entry-compare<?php } ?>">

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