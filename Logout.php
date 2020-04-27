<?php
	session_start();
	//unset($_SESSION["nome"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
	session_unset();
	echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
?>