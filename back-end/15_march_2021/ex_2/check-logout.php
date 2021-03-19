<?php
session_start();
session_destroy();
echo "logout success";
header('Refresh:1;url=index.php',true,303);