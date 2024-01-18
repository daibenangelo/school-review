<html lang="en">

<head>
    @include("layouts/head")
    <title>Admin Dashboard</title>
</head>

<body>
    @include("layouts/navbar-admin")
    @include("layouts/errors")
    <h1>Admin Dashboard</h1>
    <a href="/logout">Logout</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                {!! $chart->renderHtml() !!}
            </div>

            <div class="col-lg-5">
                {!! $chart1->renderHtml() !!}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {!! $chart2->renderHtml() !!}
            </div>
        </div>
    </div>
</body>
@yield('javascript')
{!! $chart->renderChartJsLibrary() !!}
{!! $chart->renderJs() !!}
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
{!! $chart2->renderChartJsLibrary() !!}
{!! $chart2->renderJs() !!}

</html>