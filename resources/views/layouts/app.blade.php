@include('layouts.header')
@include('layouts.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    @include('layouts.navbar')
    <div class="container-fluid py-4">
        @yield('content')
    </div>
</main>
@include('layouts.footer')
