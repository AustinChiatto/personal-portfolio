<?php

define("WWW_ROOT", "localhost:8888");
define("PROJECT_ROOT", dirname(__FILE__));

// Include functions
require "functions.php";

// Include Classes
require get_path("classes/Project.php");
require get_path("classes/ProjectDetails.php");
require get_path("classes/AboutDetails.php");

?>
