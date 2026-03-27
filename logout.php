<?php

// logout users 
session_start();
session_destroy();
header("Location:index.php");