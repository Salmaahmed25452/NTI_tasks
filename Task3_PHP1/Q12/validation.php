<?php
$Validation=[
    'price'=> [
        'filters'=>FILTER_VALIDATE_INT ,
        'my_options'=>['options'=>['min_range'=>10]],
        'error'=>"The price should be intger number greater than 10$"
    ],

    'num'=> [
        'filters'=>FILTER_VALIDATE_INT ,
        'my_options'=>['options'=>['min_range'=>1]],
        'error'=>"The number of item should be intger number greater than 0"
    ],

];

?>