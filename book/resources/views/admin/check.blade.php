  @if(Auth::check())              
                {{Auth::user()->nickname}}
                {{" is logged in..."}}
                @endif