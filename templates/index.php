<!doctype html>
<html>
<meta http-equiv="refresh" content="10" charset="UTF-8"/>
<meta name="robots" content="noindex" content="nofollow” />
<meta http-equiv="Cache-Control" content="no-cache">
<meta name="copyright" content="pgblitz.com" />
<title>PGUi Interface</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="https://i.imgur.com/T7OQsZz.png" sizes="32x32">
<style type="text/css">
body {
	background-color: #282E39;
	text-align: left;
}
.test {
}
body,td,th {
	color: #FFFFFF;
	font-size: medium;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
a:link {
	color: #E8DD06;
}
a:visited {
	color: #E8DD06;
}
div {
  width: 100%;
  height: 100%;
  background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('https://i.imgur.com/01ueZ9g.png');
  background-size: 100% 100%;
}
.collapsible {
  background-color: #777;
  cursor: pointer;
  padding: 20px;
  width: 100%;
  height: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 0px;
  color: #000000;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background: #000000;
}
</style>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
</head>
<body text="#FFFFFF">
<div>
<table width="100%" border="0" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
       <td width="104">&nbsp;</td>
		<td align="center">
			<h1>
				<strong style="color: #000000; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: xx-large; font-weight: bolder;">
						PG User Interface (PG UI)<br>
					<span style="color: #053F00; font-size: small">
						Auto-Refreshes Every 10 Seconds
					</span>	
					<br>
				</strong>
			</h1>
		</td>
      	<td width="104" align="center">
	       <a href="https://pgblitz.com/forums/" rel="nofollow">
				<img src="https://i.imgur.com/T7OQsZz.png" />
	       </a>
		</td>
    </tr>
  </tbody>
</table>
</div>
<br>
<table width="100%" cellpadding="10">
  <tbody>
    <tr>
      <td height="100" valign="top">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
			<tr>
				<td width="90%" height="30" style="color: #0FA702; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-weight: bolder; font-size: large; text-align: left;">
					BLITZ LOG
				</td>
            </tr>
          </tbody>
        </table>
		<!--added -->
		<button class="collapsible">hit for open</button>
		<div class="content">
			<table width="100%" height="44" border="1" align="center" cellpadding="5" cellspacing="0">
			  <tbody>
				<tr>
					<td colspan="6" bgcolor="#000000" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;">
						<span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
							<?php $output = shell_exec('tail -n 25 /plexguide/logs/pgblitz.log | sed -e "/PG Blitz Log - Cycle/q"');
								echo "<pre>$output</pre>";?>
						</span>
					</td>
				</tr>
			  </tbody>
			</table>
		</div>
        <br>
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			  <tbody>
				<tr>
				  <td width="100%" height="30" style="color: #E8DD06; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-weight: bolder; font-size: large; text-align: left;">RClone | Mount Checks</td>
				</tr>
			  </tbody>
			</table>
		<!--added -->
		<button class="collapsible">hit for open</button>
		<div class="content">
		<table width="100%" height="44" border="1" align="center" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
				  <td width="15%" height="21" bgcolor="#000000" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;Union - RClone</strong></td>
				  <td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/pg.union');
				echo "<pre>$output</pre>";?>
				  </span></td>
				  <td width="15%" height="21" bgcolor="#000000" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium; "><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;GDrive - RClone</strong></span></td>
				  <td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/pg.gdrive');
				echo "<pre>$output</pre>";?>
				  </span></td>
				  <td width="15%" height="21" bgcolor="#000000" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium; font-weight: bold;"><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong> &nbsp;&nbsp;TDrive - RClone</strong></span></td>
				  <td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/pg.tdrive');
				echo "<pre>$output</pre>";?>
				  </span></td>
				</tr>
		<!--added -->
				<tr>
				  <td width="15%" height="21" bgcolor="#000000" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong>&nbsp; Union - Mount</strong></td>
				  <td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/pg.umount');
				echo "<pre>$output</pre>";?>
				  </span></td>
				  <td width="15%" height="21" bgcolor="#000000" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium; "><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;GDrive - Mount</strong></span></td>
				  <td width="170" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/pg.gmount');
				echo "<pre>$output</pre>";?>
				  </span></td>
				  <td width="15%" height="21" bgcolor="#000000" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium; font-weight: bold;"><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;TDrive - Mount</strong></span></td>
				  <td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/pg.tmount');
				echo "<pre>$output</pre>";?>
				  </span></td>
				</tr>
			</tbody>
		</table>
		</div>
		<br>
<!-- added	 used space tdrive | gdrive | tcryptn | gcrpty 	-->
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			  <tbody>
				<tr>
				  <td width="100%" height="30" style="color: #E8DD06; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-weight: bolder; font-size: large; text-align: left;">G / TDrive used space | reload every sunday</td>
				</tr>
			  </tbody>
			</table>
		<!--added -->
		<button class="collapsible">hit for open</button>
		<div class="content">
		<table width="100%" height="60" border="1" align="center" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
				  <td width="15%" height="21" bgcolor="#000000" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;GDrive /wo Encyption </strong></td>
				  <td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/gduncrypt.log');
						echo "<pre>$output</pre>";?></span></td>
				  <td width="15%" height="21" bgcolor="#000000" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium; "><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;GDrive /w Encyption</strong></span></td>
				  <td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/gdcrpyt.log');
						echo "<pre>$output</pre>";?></span></td>
				</tr>
				<tr>
					<td width="15%" height="21" bgcolor="#000000" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium; font-weight: bold;"><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong> &nbsp;&nbsp;TDrive /wo Encyption</strong></span></td>
					<td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/tduncrypt.log');
						echo "<pre>$output</pre>";?>
					<td width="15%" height="21" bgcolor="#000000" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium; font-weight: bold;"><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><strong> &nbsp;&nbsp;TDrive /w Encyption</strong></span></td>
					<td width="18%" height="21" class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
					<?php $output = shell_exec('cat /plexguide/tdcrypt.log');
						echo "<pre>$output</pre>";?>
				  </span></td>
				</tr>
				<!--added -->
			</tbody>
		</table>
		</div>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td width="90%" height="30" style="color: #E8DD06; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-weight: bolder; font-size: large; text-align: left;"><br>
                Basic Information</td>
            </tr>
          </tbody>
        </table>
		<!--added -->
		<button class="collapsible">hit for open</button>
			<div class="content">
				<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
				  <tbody>
					<tr>
					  <td width="15%" bgcolor="#000000" style="font-size: medium">&nbsp;&nbsp;Edition</td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
						<?php $output = shell_exec('cat /plexguide/pg.transport');
							echo "<pre>$output</pre>" ?>
					  </span></td>
					  <td width="15%" height="21" bgcolor="#000000" style="font-size: medium">&nbsp;&nbsp;Version</td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
						<?php $output = shell_exec('cat /plexguide/pg.number');
							echo "<pre>$output</pre>";?>
					  </span></td>
					  <td width="15%" bgcolor="#000000" style="font-size: medium">&nbsp;&nbsp;ServerID</td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
						<?php $output = shell_exec('cat /plexguide/server.id');
							echo "<pre>$output</pre>" ?>
					  </span></td>
					</tr>
					
					<tr>
					  <td width="15%" bgcolor="#000000" style="font-size: medium">&nbsp;&nbsp;Traefik</td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
						<?php $output = shell_exec('cat /plexguide/pg.traefik');
							echo "<pre>$output</pre>";?>
					  </span></td>
					  <td width="15%" height="21" bgcolor="#000000" style="font-size: medium">&nbsp;&nbsp;PG Shield</td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
						<?php $output = shell_exec('cat /plexguide/pg.oauth');
							echo "<pre>$output</pre>";?>
					  </span></td>
					  <td width="15%" bgcolor="#000000" style="font-size: medium">&nbsp;&nbsp;PortGuard</td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
						<?php $output = shell_exec('cat /plexguide/pg.ports');
							echo "<pre>$output</pre>";?>
					  </span></td>
					</tr>
					
					<tr>
					  <td width="15%" bgcolor="#000000" style="font-size: medium"><span style="color: #F7F6F6; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;OS</strong></span></td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF;">
						<?php $output = shell_exec('cat /plexguide/pg.os');
							echo "<pre>$output</pre>";?>
					  </span></td>
					  <td width="15%" height="21" bgcolor="#000000" style="font-size: medium"><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium; "><span style="color: #F7F6F6; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;Ansible</strong></span></span></td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
						<?php $output = shell_exec('cat /plexguide/pg.ansible');
							echo "<pre>$output</pre>"?>
					  </span></td>
					  <td width="15%" bgcolor="#000000" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium; font-weight: bold;"><span style="color: #F7F6F6; font-weight: bold; font-size: medium;"><strong> &nbsp;&nbsp;Used Space</strong></span></span></td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
						<?php $output = shell_exec('cat /plexguide/pg.used');
							echo "<pre>$output</pre>" ?>
					  </span></td>
					</tr>
					
					<tr>
					  <td width="15%" bgcolor="#000000" style="font-size: medium"><span style="color: #F7F6F6; font-weight: bold; font-size: medium;"><strong>&nbsp; PG GCE</strong></span></td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF;">
						<?php $output = shell_exec('cat /plexguide/pg.gce');
							echo "<pre>$output</pre>";?>
						</span></td>
					  <td width="15%" height="21" bgcolor="#000000" style="font-size: medium"><span style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium; "><span style="color: #F7F6F6; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;Docker</strong></span></span></td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
						<?php $output = shell_exec('cat /plexguide/pg.docker');
							echo "<pre>$output</pre>";?>
						</span></td>
					  <td width="15%" bgcolor="#000000" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium; font-weight: bold;"><span style="color: #F7F6F6; font-weight: bold; font-size: medium;"><strong>&nbsp;&nbsp;Disk Space</strong></span></span></td>
					  <td width="18%" height="21" style="font-size: medium"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
						<?php $output = shell_exec('cat /plexguide/pg.capacity');
						echo "<pre>$output</pre>";?>
						</span></td>
					</tr>
				</tbody>
			</table>
			</div>
        <br>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
