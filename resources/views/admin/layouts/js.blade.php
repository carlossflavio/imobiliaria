    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assetes/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assetes/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assetes/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assetes/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assetes/vendors/chartist/chartist.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assetes/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assetes/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assetes/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->


    <!-- Script Js para Mensagem de actualização dos Dados -->
    <!-- Inclua jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- Edição  da tipo de msg no cadastro de administrador -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
