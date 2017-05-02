@include('admin.partials.header')
@include('admin.partials.nav')
@include('admin.partials.topnav')
<!-- page content -->
<div class="right_col" role="main">
@yield('content')
</div>
<!-- /page content -->
@include('admin.partials.footer')
