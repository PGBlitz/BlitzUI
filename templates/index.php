<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PG UI</title>
<style type="text/css">
body {
	background-color: #282E39;
}
.test {
}
</style>
</head>

<body>

<p><img src="https://camo.githubusercontent.com/2d9a1f02588a2f0635117ab3e43dca618344c895/68747470733a2f2f706c657867756964652e636f6d2f77696b69706963732f6c6f676f2e706e67" width="75" height="75" alt=""/></p>
<p>

PG Version:
<?php $output = shell_exec('cat /var/plexguide/pgclone.transport');
echo "<pre>$output</pre>";
?>.

</p>
</body>
</html>
