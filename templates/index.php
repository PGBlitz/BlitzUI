<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #282E39;
}
.test {
}
</style>
</head>

<body>
<p>&nbsp;</p>
<table width="95%" border="1">
  <tbody>
    <tr>
      <td><img src="https://camo.githubusercontent.com/2d9a1f02588a2f0635117ab3e43dca618344c895/68747470733a2f2f706c657867756964652e636f6d2f77696b69706963732f6c6f676f2e706e67" width="75" height="75" alt=""/></td>
      <td><h1><strong>PG User Interface</strong></h1></td>
    </tr>
  </tbody>
</table>
<br>
<table width="200" border="1">
  <tbody>
    <tr>
      <td style="color: #F7F6F6">PG Version</td>
      <td class="test" style="color: #FFFFFF"><?php $output = shell_exec('cat /plexguide/pgclone.transport');
echo "<pre>$output</pre>";
?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
