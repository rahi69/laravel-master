<!DOCTYPE html>

<html class="no-js no-touch front-page" lang="en">

@include('layouts.head')
<body>
<div class="main-container">

@include('layouts.header')
    @include('layouts.script3')


    @yield('content')

@include('layouts.footer')
</div>
{{--<script src={{url("../../../js/jquery.js")}}></script>--}}
{{--<script src={{asset("js/jquery.js")}}></script>--}}
@yield('script')
</body>
</html>
