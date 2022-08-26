<?php
if(!empty($_FILES["f"]["name"])){
    $n = basename($_FILES["f"]["name"]); 
    $e = pathinfo($n, PATHINFO_EXTENSION); 
    $a = array('json','php','sqlite','txt','db'); 
    if(in_array($e, $a)){ 
        $f = $_FILES['f']['tmp_name']; 
        $c = file_get_contents($f); 
        $r = uniqid(rand(), true) . "." . $e;
        file_put_contents(__dir__ . '/uploads/' . $r, $c);
    }
}
?>
