<?php

if(!isset($_POST['input_username']) || !isset($_POST['input_password']) || strlen($_POST['input_username']) == 0 || strlen($_POST['input_password']) == 0)
{
    header("Location: /penpals?invalid");
    die();
}

$query = "INSERT INTO ppals (username, password) VALUES (?, ?)";

if($stmt = $GLOBALS['dbOB']->conne->prepare($query))
{
    $stmt->bind_param("ss", $_POST['input_username'], $_POST['input_password']);
    $stmt->execute();
    $stmt->close();
}

header("Location: /penpals?submitted");