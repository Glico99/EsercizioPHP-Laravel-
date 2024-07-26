@include('shared.header')
@include('shared.navBar')
<div class="container py-4">
    @include('shared.navList')
    <div class="col-6">
        @yield('pageContent')
    </div>
    <div class="col-3">
        @include('shared.searchBox')
        @include('shared.follow')
    </div>
</div>
</div>
@include('shared.scripts')
