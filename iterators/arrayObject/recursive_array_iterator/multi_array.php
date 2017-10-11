<?php
$arr = [
    ["sitepoint", "phpmaster"],
    ["buildmobile", "rubysource"],
    ["designfestival", "cloudspring"],
    "not an array"
];

$object = new ArrayObject($arr, ArrayObject::ARRAY_AS_PROPS, 'RecursiveArrayIterator');

$iterator = $object->getIterator();

foreach (new RecursiveIteratorIterator($iterator) as $key => $value) {
    echo $key. ' '. $value;
}
