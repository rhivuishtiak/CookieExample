<?php
if (isset($_POST['color']) && isset($_POST['expire'])) {
	$color = $_POST['color'];
	$expire = time() + (int)$_POST['expire'];
	setcookie('color', $color, $expire);
	$classname = $color;
} else {
	$classname = '';
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>
