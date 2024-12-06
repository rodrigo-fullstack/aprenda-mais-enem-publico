<?php

session_start();

if(!isset($_SESSION['id_usuario']) && !isset($_SESSION['username']))
    {
    header("Location: ../index.html");
}