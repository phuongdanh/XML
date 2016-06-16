<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'database.php';

/*
$doc = new DOMDocument('1.0', 'UTF-8');
//
//$node = $doc->createElement("para");
//$newnode = $doc->appendChild($node);

#tao mot bang moi du lieu moi
$root = $doc->createElement("para");

$doc->appendChild($root);

$grandParent = $doc->createElement('grand');

$root->appendChild($grandParent);

$parent = $doc->createElement('parent');
$children = $doc->createElement('children');

$name = $doc->createElement('name');
$age = $doc->createElement('age');
$gender = $doc->createElement('gender');

$grandParent->appendChild($parent);
$parent->appendChild($children);
$children->appendChild($name);
$children->appendChild($age);
$children->appendChild($gender);

$name->appendChild($doc->createTextNode('Duoc'));
$age->appendChild($doc->createTextNode(23));
$gender->appendChild($doc->createTextNode('Male'));

$address = $doc->createElement('address');
$root->appendChild($address);
$address->appendChild($doc->createTextNode('Binh Dinh'));

$doc->save("data/creatTable.xml");
*/
#-------------------------------------
//$doc = simplexml_load_file('data/creatTable.xml');
$doc = new DOMDocument('1.0','utf-8'); 
$doc->load( "data/creatTable.xml" ); 

$tags = $doc->getElementsByTagName("children");
$name = $tags->item(0);
print_r($name);

?>
