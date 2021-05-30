<?php
	$a = $_POST['udid'] . "\n" . $_POST['name'] . "\n" . $_POST['email'] . "\n" . $_POST['product'];
	mail("ikg_hd@bk.ru", "UDID", $a);
	header('Location: finished.html');
?>
