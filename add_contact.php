<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

$contacts = json_decode(file_get_contents('contacts.json'), true);

$newId = uniqid();

$contacts[] = ['id' => $newId, 'name' => $name, 'phone' => $phone];

file_put_contents('contacts.json', json_encode($contacts));

header('Location: index.php');
?>
