<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {{--Responsive meta tag--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Fresh</title>
    {{--how to reference a public file from blade--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
@include('inc.line')
@include('inc.navbar')

@if (Request::is('/'))
@include('inc.showcase')
@endif

<div class="container">
<div class="row">
    <div class="col-md-8 col-lg-8">

        @include('inc.messages')

        @yield('content')
    </div>
<div class="col-md-4 col-lg-4">
@include('inc.sidebar')
</div>
</div>
</div>

<div class="rowl" style="margin-top: -1px">
    <div class="col-md-6 col-lg-6">
        <p style="color:#FF7F00; font-weight: bold">FRESH WEBSITE</p></div>
            <div class="col-md-6 col-lg-6">
                <p style="color: #85C1E9">
                &nbsp;51, lekki Lagos Nigeria. PHONE: +2348140900581</p></div>
    </div>
</div>

<footer id="footer" class="text-center">
<p>Copyright 2017 &copy; Fresh</p>
</footer>

</body>
</html>