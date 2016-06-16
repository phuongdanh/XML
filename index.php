<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//load file xml
$xml = simplexml_load_file("data.xml") or die("Unable to load XML file.");
echo $xml->name . '<br />';

foreach ($xml->student as $student) {
    echo "Name: " . $student->name . " - Gender: " . $student->gender . " - Age: " . $student->age . "<br />";
}


$array = array('name' => 'Dung', 'gender' => 'female', 'age' => '20');

$dom = new DOMDocument('1.0', 'UTF-8');
$root = $dom->createElement('root');

$dom->appendChild($root);

foreach ($array as $key => $value) {

    $root->appendChild($dom->createElement($key))->appendChild($dom->createTextNode($value));
}

$dom->save("data.xml");
?>