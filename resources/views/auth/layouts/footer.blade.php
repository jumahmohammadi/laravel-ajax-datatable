<!--   Core JS Files   -->
<script src="{{ asset('public/js/core/popper.min.js') }}"></script>
<script src="{{ asset('public/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('public/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('public/js/soft-ui-dashboard.js') }}"></script>

@yield("internal_js")
</body>

</html>
