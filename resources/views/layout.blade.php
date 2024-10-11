<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Royal Trading')</title>
    <meta name="description" content="@yield('description', 'Default text')">
    <meta name="keywords" content="@yield('keywords', 'Default text')">
    <meta name="author" content="Royal Trading"> 

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <!-- Include your CSS files here -->
</head>
<body> 
<div class="app-container">
    <header>
        
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
           
    </footer>
    
    <input type="hidden"  id="baseurl" value="{{url('')}}" />
</div> 
    <!-- Include your JS files here --> 
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/validate.min.js')}}"></script> 

    @yield('scripts') 
</body> 
<script src="{{asset('js/toastr.min.js')}}"></script> 

@if(Session::has('success'))  
    toastr.success("{{ Session::get('success') }}");  
@endif  
@if(Session::has('info'))  
    toastr.info("{{ Session::get('info') }}");  
@endif  
@if(Session::has('warning'))  
        toastr.warning("{{ Session::get('warning') }}");  
@endif  
@if(Session::has('error'))  
    toastr.error("{{ Session::get('error') }}");  
@endif 
</html>
