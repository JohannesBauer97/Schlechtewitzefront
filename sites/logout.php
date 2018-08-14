<?php
session_start();
session_destroy();
header('Location: http://www.schlechtewitzefront.de?s=admin');
exit;
?>