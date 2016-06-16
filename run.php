<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'database.php';


$doc = new DOMDocument('1.0', 'UTF-8');
//
//$node = $doc->createElement("para");
//$newnode = $doc->appendChild($node);
$root = $doc->getElementsByTagName("para");
$grandParent = $doc->createElement('grand');
$root->appendChild($grandParent);







$doc->save("data/creatTable.xml");
?>
