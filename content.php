<div class="content">

<h1>Tytuł: <?php print $content[2];?></h1> 

<div class="entry">

<?php

$entry = explode('\n\n', $content[3]);

print_r($entry);

$i = 1;

foreach($entry as $e) {

    print '<p id="'. $i .'">['. $i .']'.$e.'</p>';
    $i++;

}

?>


</div>
</div>