<html>
	<body>
                   @include('admin.check')
                   {{$username = Auth::user()->nickname  }}
                <form name="input" action="{{ url('findbook') }}" method="post">
                查找图书信息: 
                <input type="text" name="bookname" />
                <input type="submit" value="搜索" />
                </form>
                <h4>{{$title}}</h4>                      
		<table width="400" border="1">
			<tr>
				<th align="left">书名</th>
				<th align="right">ISBN</th>
				<th align="right">{{$bookstat}}</th>
			</tr>
		@foreach ($books  as $book)
		<tr>
			<td align="left">{{$book->book->bookname}}</td>
			<td align="right">{{$book-> book->isbn }}</td>
			<td align="right"><a href = "{{url("back/$username/$book->isbn")}}">back</a></td>										
		</tr>
		@endforeach
		</table>
		@include('menu.usermenu')
		 @if(Auth::user()->nickname == 'admin')
                	@include('menu.adminmenu')
                	@endif
		</body>
		</html>