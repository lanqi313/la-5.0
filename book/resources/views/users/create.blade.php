<html>
<head>
        <title>Registration</title>
</head>
<body>
<h1>User Registration</h1>
<form method="post" action="{{url('register')}}">
          <table bgcolor="#cccccc">
   
            <tr>
              <td>nickname <br />(max 16 chars):</td>
              <td valign="top"><input type="text" name="nickname"
                  size="16" maxlength="16"/></td></tr>
            <tr>
              <td>Password <br />(between 6 and 16 chars):</td>
              <td valign="top"><input type="password" name="password"
                  size="16" maxlength="16"/></td></tr>
            <tr>
              <td>Confirm password:</td>
              <td><input type="password" name="password_confirmation" size="16" maxlength="16"/></td></tr>
            <tr>
              <td colspan=2 align="center">
              <input type="submit" value="Register"></td></tr>
          </table></form>
</body>
</html>