<?php

session_start();
unset($_SESSION["noid"]);
session_destroy();
unset($_SESSION["user"]);
session_destroy();
header("Location: Login.php");