<!DOCTYPE html>
<!-- saved from url=(0061)https://seantheme.com/color-admin/admin/html/table_basic.html -->
<html lang="en">
<head>
    <title>@yield('page_title')</title>
    @include('admin.layout.include_meta')
    @include('admin.layout.include_css')
    @yield('page_style')
</head>
<body class="  pace-done">
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99"
         style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>

<div id="page-loader" class="fade show d-none">
    <span class="spinner"></span>
</div>

<div id="page-container" class="fade page-sidebar-fixed page-header-fixed show">
    @include('admin.layout.header')

    @include('admin.layout.side_bar')

    @yield('content')

    @include('admin.layout.setting')

    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
            class="fa fa-angle-up"></i></a>

</div>

@include('admin.layout.include_js')
@yield('page_style')

</body>
</html>
