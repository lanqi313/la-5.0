<html>
<head>
        <title>delete_book</title>
</head>
<body>
	<h1>Delete       book</h1>
	 <form method="post"   action="{{URL::to('delete_book')}}">
          <table border="0">
          <tr>
            <td>Book ISBN:</td>
            <td><input type="text" name="isbn"/></td>
          </tr>
          <tr>
            <td colspan=2 align="center"><input type="submit"  value="Delete Book" /></td>
          </tr>
          </table>
        </form>
 </body>
 </html>