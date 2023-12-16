    
    <!-- JQuery min js -->
    <script src="{{asset('build/assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('build/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   
    @yield('scripts')

    <!--Internal Counters -->
    <script src="{{asset('build/assets/plugins/counters/waypoints.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/counters/counterup.min.js')}}"></script>

    <!-- Landing Page -->
    @vite('resources/assets/js/landing-page.js')