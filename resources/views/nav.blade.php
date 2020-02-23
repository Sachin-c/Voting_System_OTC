<header>
    <div style="background-color: blue">
        <img src="https://www.minuteschool.com/wp-content/uploads/2019/07/blog-20190722.jpg" width="10%">
        <h1 style="color:white" > Election Dashboard</h1>
         <style "text/css">
             a{
                 color: white;
             }
         </style>   
        
        <a id="header_link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

    </div>
 </header>