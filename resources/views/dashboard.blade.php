<x-app-layout>
    @section('title','Dashboard')

    @section('content')
        <!-- Sidebar -->
        @include('admin.partials.sidebar')
        <!-- END Sidebar -->

        <!-- Hero -->
        @include('admin.partials.hero')
        <!-- END Hero -->

        <!-- Overview -->
        @include('admin.partials.overview')
        <!-- END Overview -->

        <!-- Page Content -->
        @include('admin.partials.content')
        <!-- END Page Content -->
    @endsection

    @section('scripts')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/chart.js/chart.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/be_pages_dashboard.min.js') }}"></script>
    @endsection
</x-app-layout>
