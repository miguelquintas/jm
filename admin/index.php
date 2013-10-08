<?php
	include 'header.php';
?>
<br /><br /><br />
<table align="center">
	<form method="POST" action="login.php">
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pass" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="SubmitLogin" value="Login" /></td>
		</tr>
	</form>
</table>

<?php		
	include 'footer.php';
?>