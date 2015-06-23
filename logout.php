<?php
session_start();
include("common.php");
topPart();

session_destroy();

bottomPart();

?>