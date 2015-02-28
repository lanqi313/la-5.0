<html>
	<title>forget_password</title>
	<body>
	<form action="{{url('forget')}}" method="post">
		<table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
		<tr><td>Enter your username</td>
	            		<td><input type="text" name="username" size="16" maxlength="16"/></td>
	        	</tr>
	        	<tr><td colspan=2 align="center">
	            		<input type="submit" value="Change password"/>
	        	</td></tr>
	        	</table>
	 </form>
	</body>
</html>