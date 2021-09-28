<?php
session_start();
session_destroy();
header("location: index.php?estado=4");

exit();
?>