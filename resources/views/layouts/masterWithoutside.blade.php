<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.__head-tags')
    @yield('head')
</head>

<body>
    @include('partials.__nav-menu')

    <div class="container">
        <div class="card card-full">
            <div class="card-body">
                @yield('body')
            </div>
        </div>
    </div>

    <x:notify-messages />
    @notifyJs
    @yield('script')
</body>

</html>
