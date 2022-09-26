<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.__head-tags')
</head>

<body>
    @include('partials.__nav-menu')

    <div class="container">
        <div class="card">
            <div class="card-body">
                @yield('body')
            </div>
        </div>
    </div>
    @yield('script')
</body>

</html>
