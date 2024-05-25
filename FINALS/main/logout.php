<?php
session_start();
session_unset();
session_destroy();
header("Location: ../landing_page/landing_page.html");
?>