
<html>
<head>
   @include('layout.admin.header')
   @auth
            <!-- Show user information -->
            
       
        @endauth
</head>  
 
    <body>

        
    
    @yield('content')
  
        
        </div>
        
        
        </div>
        <footer class="row">
       @include('layout.admin.footer')
       @yield('script')
   </footer>
</div>
</body>
</html>












