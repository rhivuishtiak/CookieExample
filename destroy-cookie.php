<?php
setcookie('color', '', time() - 3600);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>
