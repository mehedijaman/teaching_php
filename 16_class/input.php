<?php 
    $names = [];

    while(true){
        $input = readline("> ");
        $names[] = $input;

        if($input == '0'){
            break;
        }
    }

    foreach($names as $name){
        print $name.PHP_EOL;
    }

?>