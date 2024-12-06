<?php
require "util.php";

$formData = $_POST['form-data'];
$formData = explode(", ", $formData);

$formData = [
    "email" => $formData[0],
    "cpf" => $formData[1],
    "password" => $formData[2],
    "username" => $_POST['username']
];

$formData = stringifyArray($formData);

header("location: register_script.php?form-data=$formData");