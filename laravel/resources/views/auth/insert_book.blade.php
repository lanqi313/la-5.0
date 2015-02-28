<html>
<head>
        <title>insert_book</title>
</head>
<body>
	<h1>Add   a     book</h1>
	 <form method="post"   action="{{URL::to('insert_book')}}">
          <table border="0">
            <tr>
              <td>BookISBN:</td>
              <td><input type="text" name="isbn"/></td>
            </tr>
            <tr>
              <td>Bookname:</td>
              <td><input type="text" name="bookname"/></td>
            </tr>
            <tr>
              <td>Bookstate:</td>
              <td><input type="text" name="bookstate"/></td>
            </tr> 
            <tr>
              <td>id:</td>
              <td><input type="text" name="id"/></td>
            </tr>  
            <tr>
              <td colspan=2 align="center"><input type="submit"  value="Add  Book" /></td>
            </tr>
        </table>
      </form>
  </body>
  </html>