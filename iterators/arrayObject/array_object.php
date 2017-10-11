<?php
$cities = array(
    'Germany' => 'Berlin',
    'France' => 'Paris',
    'Ukraine' => 'Kiev'
);

$object = new ArrayObject($cities);
$iterator = $object->getIterator();

$object['Russia'] = 'Moscow';

$object->append('Tokio');
while ($iterator->valid()) {
    echo $iterator->key() .' '. $iterator->current() . '<br/>';
    $iterator->next();
}

/********************/
$data = array(
    'name'  => 'John Doe',
    'email' => 'john@domain.com'
);

/*
 * access the object properties using an object notation
*/
$arrayObj = new ArrayObject($data, ArrayObject::ARRAY_AS_PROPS);

echo 'Full name: ' . $arrayObj->name . ' Email: ' . $arrayObj->email;

foreach ($arrayObj as $key => $value) {
    echo 'Key: ' . $key . ' Value: ' . $value . '<br />';
}