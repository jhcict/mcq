@include('...admin.layouts.widgets.topbar')

<div class="container-fluid" style="margin-top:75px;">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            @include('...admin.layouts.widgets.sidebar')

        </div>
        <div class="col-sm-9 col-md-10">
            @include('...admin.layouts.widgets.breadcrumbs')
            @include('...admin.layouts.widgets.errors')
            @yield('content')
        </div>
    </div>
</div>
