<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.include.head')
</head>
    <body class="hold-transition fixed sidebar-mini">
        
        <!-- Preloader -->
        <div class="preloader"></div>
       
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">

             {{--Top menu--}}
                @include('Admin.include.top')

                {{-- main left menu-ber --}}
                @include('Admin.include.navber')

        {{-- main body --}}
            </header>
            <div class="content-wrapper">
                <div class="content">
                    <div class="row home1_analys">
                      @section('content')
                      @show 
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                @include('Admin.include.footer')
            </footer>
        </div> 
         @include('Admin.include.script')
        
        {{-- custom script --}}
         @section('script')
         @show
    </body>
</html>