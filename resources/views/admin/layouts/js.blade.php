    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assetes/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('assets1/js/code/code.js') }}"></script>
<<<<<<< HEAD

=======
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
    <!-- Plugin js for this page -->
    <script src=" {{ asset('assets1/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src=" {{ asset('assets1/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- core:js -->
    <script src="{{ asset('assets1/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="{{ asset('assets1/assets/js/template.js}') }}"></script>
    <!-- endinject -->

    <!-- Inicio Dados da Tabela -->
    <script src="{{ asset('assets1/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets1/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src=" {{ asset('assets1/js/data-table.js') }}"></script>
    <!--Fim dados da tabela -->
