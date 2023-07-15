<?php 
    
    $start = 1;
    $end = 1000;
    $step = 1;

    $line = 0;

    for($counter = $end; $counter >= $start; $counter -= $step)
    {
        
        if($line % 5 == 0)
            echo "<br>";

        $line++;

        echo $counter." ";
    }