<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title1')</title>
</head>
<body>gjhhjk
    @section('header1')
        <div class="header">
            <h1>Header part</h1>
        </div>
    @endsection

    <div class="content">
        @yield('content')
    </div>

    @section('footer')
        <div class="footer">
            <h1>Footer part</h1>
        </div>
    @show
</body>
</html>