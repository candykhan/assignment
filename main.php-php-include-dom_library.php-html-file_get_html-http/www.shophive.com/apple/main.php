<?php
include('dom_library.php');
$html = file_get_html('http://www.shophive.com/apple/mac?p=1');


foreach($html->find('h2[class=product-name]') as $items){
    echo $items->innertext . '<br>'; 

foreach($html->find('span[class=price]') as $items){
    echo $eitems->innertext . '<br>';
?>
