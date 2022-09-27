<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.__head-tags')
    @yield('head')
</head>

<body>
    @include('partials.__nav-menu')

    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        @yield('body')
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        @yield('sidebar')
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        @yield('sidebar-ext')
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('script')

    <x:notify-messages />
    @notifyJs
</body>
</html>
