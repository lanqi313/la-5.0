<html>
<head>
        <title>Registration</title>
</head>
<body>
<h1>Change password</h1>
<form method="post" action="{{url('change_password')}}">
          <table bgcolor="#cccccc">
   
            <tr>
              <td>Old password: </td>
              <td valign="top"><input type="text" name="old_password"
                  size="16" maxlength="16"/></td></tr>
            <tr>
              <td>New password: </td>
              <td valign="top"><input type="password" name="password"
                  size="16" maxlength="16"/></td></tr>
            <tr>
              <td>Confirm password:</td>
              <td><input type="password" name="password_confirmation" size="16" maxlength="16"/></td></tr>
            <tr>
              <td colspan=2 align="center">
              <input type="submit" value="Change password"></td></tr>
          </table></form>
</body>
</html>