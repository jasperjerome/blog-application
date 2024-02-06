        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('assets/backend/libs/metismenu/metisMenu.min.js') }}"></script>

        <script src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js') }}"></script>

        <script src="{{ asset('assets/backend/libs/node-waves/waves.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/backend/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('assets/backend/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('assets/backend/js/pages/datatables.init.js') }}"></script>
        <!-- Responsive examples -->

        <script src="{{ asset('assets/backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
        </script>

        <!-- dashboard init -->
        <script src="{{ asset('assets/backend/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/backend/js/app.js') }}"></script>

        <script>
            $('#datatable').DataTable();
        </script>
        <script>
            $(document).ready(function() {

                filterBlogs();

                // Handle category selection on change
                $('#category_id').change(function() {
                    filterBlogs();
                    // alert('jerome');
                });

                // Function to filter blogs based on the selected category
                function filterBlogs() {
                    var selectedCategory = $('#category_id').val();

                    $('.blog-card').each(function() {
                        var blogCategory = $(this).data('category');

                        if (selectedCategory === 'All' || selectedCategory == blogCategory) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            });

            // JavaScript to hide the alert after 2 seconds
            setTimeout(function() {
                document.getElementById('updateAlert').style.display = 'none';
            }, 2000)
        </script>
