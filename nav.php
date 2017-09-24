<?php
	header('Cache-Control: max-age=60');
	sleep(5);
?>
<html>
<head>
  <title>Navigation</title>
  <?php include "head.html"; ?>
</head>
<body>
	<?php include "header.html"; ?>

<style>
#close {
	display: inline;
}
#menu {
	display: none;
}
</style>

<h1>Navigation</h1>
<b>
	Products<br>
</b>
Small products<br>
Big products<br>
<b>About</b>
Stores<br>
History

</body>
</html>
