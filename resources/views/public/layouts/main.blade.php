<!DOCTYPE html>
<html lang="en">

@include('public.includes.head')

<body>
    <div class="container-xxl bg-white p-0">
        @include('public.includes.spinner')
        @include('public.includes.navbar')

        @yield('content')

        @include('public.includes.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('public.includes.footerjs')

</body>

</html>
