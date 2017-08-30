<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('admin.layouts.head')

</head>

<body class="layout-boxed pace-done navbar-top">

@include('admin.layouts.navbar')



@include('admin.layouts.secnav')









@yield('content')


<!-- Footer -->
<div class="footer footer-boxed text-muted position-left">
    &copy; 2017. <a href="https://iberialab.com" target="_blank">iBeria LAB</a>
    <a class="position-right" href="https://iberialab.com/cms/version" style="float: right;">
        <i class="icon-info3 position-left"></i>
        <small class="font1"> ვერსია</small>
        <span class="label label-inline position-right bg-success-400">0.1</span>
    </a>
</div>
<!-- /footer -->

@yield('js')
</body>
</html>