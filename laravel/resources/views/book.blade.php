<html>
    <body>
                   @include('auth.check')
                   {{$username = Auth::user()->name  }}
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
            <td align="left">{{$book->bookname}}</td>
            <td align="right">{{$book-> isbn }}</td>
            <td align="right">@if($book->state == 'no')
                        borrow
                    @else
                        <a href = "{{url("borrow/$username/$book->isbn")}}">borrow</a>
                    @endif
                    </td>
        </tr>
        @endforeach
        </table>
        @include('menu.usermenu')
         @if(Auth::user()->name == 'admin')
                    @include('menu.adminmenu')
                    @endif
        </body>
        </html>