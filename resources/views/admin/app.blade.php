

@include('admin.include.header')
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
@include('admin.include.navbar')


@include('admin.include.sidebar')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>

        <div id="app">
            @include("admin.include.alert._success")
            @include("admin.include.alert._errors")
            @yield('content')
        </div>


    </div>
</div>
@include('admin.include.footer')
