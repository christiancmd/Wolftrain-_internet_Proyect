<?php

session_start();
session_destroy();
header(header: "location: ../pages/registration.php");

?>