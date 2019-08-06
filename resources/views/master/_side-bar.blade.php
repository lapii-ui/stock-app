<ul class="sidebar navbar-nav sidebar-nav">
    @include('master._side-bar-dashboard')
    @include('master._side-bar-inventories')
    @include('master._side-bar-report')
</ul>

@section('js')
    <script src="{{asset('js/pages/sidebar.js')}}"></script>
@stop