<?php
include 'ex1.php';
function operation($val1,$val2,$op){
    return $op($val1,$val2);   
}
echo "la solution de l''exerciçe 2 est ".operation(2,5,'addition');
?>
