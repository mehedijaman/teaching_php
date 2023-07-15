
<?php
function quicksort($array) {
    $length = count($array);
    if($length <= 1) {
        return $array;
    } else {
        $pivot = $array[0];
        
        $left = [];
        $right = [];

        for($i = 1; $i < count($array); $i++) {
            if($array[$i] < $pivot) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }
        return array_merge(quicksort($left), array($pivot), quicksort($right));
    }
}


$array = [560,120,89,96,76,102,105,45,89,54,6,1];
$sortedArray = quicksort($array);
foreach ($sortedArray as $item){
    echo "$item ";
}
?>