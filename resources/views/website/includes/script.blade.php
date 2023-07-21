 <!-- jQuery Min JS -->
 <script src="{{ asset('/') }}website/assets/js/jquery.min.js"></script>
 <!-- Bootstrap Min JS -->
 <script src="{{ asset('/') }}website/assets/js/bootstrap.bundle.min.js"></script>
 <!-- MeanMenu JS -->
 <script src="{{ asset('/') }}website/assets/js/jquery.meanmenu.js"></script>
 <!-- Magnific Popup Min JS -->
 <script src="{{ asset('/') }}website/assets/js/jquery.magnific-popup.min.js"></script>
 <!-- Owl Carousel Min JS -->
 <script src="{{ asset('/') }}website/assets/js/owl.carousel.min.js"></script>
 <!-- Parallax Min JS -->
 <script src="{{ asset('/') }}website/assets/js/parallax.min.js"></script>
 <!-- Nice Select Min JS -->
 <script src="{{ asset('/') }}website/assets/js/jquery.nice-select.min.js"></script>
 <!-- WOW Min JS -->
 <script src="{{ asset('/') }}website/assets/js/wow.min.js"></script>
 <!-- AjaxChimp Min JS -->
 <script src="{{ asset('/') }}website/assets/js/jquery.ajaxchimp.min.js"></script>
 <!-- Form Validator Min JS -->
 <script src="{{ asset('/') }}website/assets/js/form-validator.min.js"></script>
 <!-- Contact Form Min JS -->
 <script src="{{ asset('/') }}website/assets/js/contact-form-script.js"></script>

 <script src="{{ asset('/') }}website/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}website/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
 <!-- Main JS -->
 <script src="{{ asset('/') }}website/assets/js/main.js"></script>

 <script>
    $(function () {
        $('#myTable').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function (settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function (group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        $('#config-table').DataTable({
            responsive: true
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');


    });

</script>

