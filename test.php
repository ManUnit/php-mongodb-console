<?php

use App\Models\Shopping ; 
require __DIR__.'/vendor/autoload.php' ;  

$test = Shopping::all();
print_r($test) ; 

?>
