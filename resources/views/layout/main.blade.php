<!DOCTYPE html>
<html lang="en">

@include('layout.header')
</head>
<body>

    {{-- <div class="container-xxl position-relative bg-white d-flex p-0"> --}}
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>  --}}

    @include('layout.sidebar')

    <div class="content">
        @include('layout.navbar')

        @yield('content')


    </div>

    @include('layout.footer')
    
</body>
</html>