<?php

include "Square Dance.php";
$row1 = new SplQueue();
$row2 = new SplQueue();


$dancer1 = new Dancer("duc", "nam");
$dancer2 = new Dancer("duc", "nam");
$dancer3 = new Dancer("duc", "nam");


$dancer6 = new Dancer("duc", "nu");
$dancer7 = new Dancer("duc", "nu");


$row1->enqueue($dancer1);
$row1->enqueue($dancer2);
$row1->enqueue($dancer3);

$row2->enqueue($dancer6);
$row2->enqueue($dancer7);


print_r($row1);
print_r($row2);

if ($row1->isEmpty() && $row2->isEmpty()) {
    echo "không đủ điều kiện";

} else {
    while (count($row1)>0 && count($row2)>0) {
        $row1->dequeue();
        print_r($row1);
        $row2->dequeue();
        print_r($row2);
        if (count($row1)== 0) {
            echo count(row2);
        } else {
            echo count(row1);
        
        }

    }
}

