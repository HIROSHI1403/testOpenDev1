<!-- BASIC AUTH -->
<?php
if (!isset($_SERVER["PHP_AUTH_USER"]) || !($_SERVER["PHP_AUTH_USER"] == "root" && $_SERVER["PHP_AUTH_PW"] == "admin")) {
	header("WWW-Authenticate: Basic realm=\"Cooking community\"");
	header("HTTP/1.0 401 Unauthorized");
	echo "BASIC�F�؂̔F�؂��ł��܂���ł����B<br><br>";
	echo "<a href=\"userkanri.php\">����Ǘ��y�[�W</a>";
	exit();
}

