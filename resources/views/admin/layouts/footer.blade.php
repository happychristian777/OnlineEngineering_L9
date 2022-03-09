
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->
    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
    </div>

    <!-- jQuery -->
    <script src="{{url('admins/')}}/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{url('admins/')}}/vendor/popper.min.js"></script>
    <script src="{{url('admins/')}}/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="{{url('admins/')}}/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="{{url('admins/')}}/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="{{url('admins/')}}/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="{{url('admins/')}}/js/toggle-check-all.js"></script>
    <script src="{{url('admins/')}}/js/check-selected-row.js"></script>
    <script src="{{url('admins/')}}/js/dropdown.js"></script>
    <script src="{{url('admins/')}}/js/sidebar-mini.js"></script>
    <script src="{{url('admins/')}}/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{url('admins/')}}/js/app-settings.js"></script>

    <!-- Flatpickr -->
    <script src="{{url('admins/')}}/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="{{url('admins/')}}/js/flatpickr.js"></script>

    <!-- Global Settings -->
    <script src="{{url('admins/')}}/js/settings.js"></script>

    <!-- Chart.js -->
    <script src="{{url('admins/')}}/vendor/Chart.min.js"></script>

    <!-- App Charts JS -->
    <script src="{{url('admins/')}}/js/charts.js"></script>

    <!-- Chart Samples -->
    <script src="{{url('admins/')}}/js/page.dashboard.js"></script>

    <!-- Vector Maps -->
    <script src="{{url('admins/')}}/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{url('admins/')}}/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="{{url('admins/')}}/js/vector-maps.js"></script>

</body>

</html>
