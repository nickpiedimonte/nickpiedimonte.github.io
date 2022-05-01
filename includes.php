<?php
# session start if not already
if (session_status() == 1) {
    session_start();
}

# displays errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("dbconn.php");
include_once("headers.php");

?>



