<?php
session_destroy();
header("Location:".appsConfig::Link('/administrator.php'));
?>