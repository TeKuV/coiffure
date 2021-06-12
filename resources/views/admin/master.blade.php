<!DOCTYPE html>
    <html>

        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="{{asset('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
            
            @yield('head')

            <link href="{{asset('admin/css/plugins/chosen/chosen.css')}}" rel="stylesheet">
            <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">
            <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

            <link href="{{asset('admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">

        </head>

        <body class="fixed-navigation pace-done mini-navbar">
            <div id="wrapper">
                @include('admin.navbar')

                @yield('content')
            
            </div>

            <!-- Mainly scripts -->
            <script src="{{asset('admin/js/jquery-2.1.1.js')}}"></script>
            <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
            <script src="{{asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>


            <!-- Custom and plugin javascript -->
            <script src="{{asset('admin/js/inspinia.js')}}"></script>
            <script src="{{asset('admin/js/plugins/pace/pace.min.js')}}"></script>
            @yield('bottom')
            <!-- Chosen -->
            <script src="{{asset('admin/js/plugins/chosen/chosen.jquery.js')}}"></script>

            <script>

                var config = {
                        '.chosen-select'           : {},
                        '.chosen-select-deselect'  : {allow_single_deselect:true},
                        '.chosen-select-no-single' : {disable_search_threshold:10},
                        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                        '.chosen-select-width'     : {width:"95%"}
                        }
                    for (var selector in config) {
                        $(selector).chosen(config[selector]);
                    }

            </script>
            
            <script src="{{asset('admin/js/plugins/dataTables/datatables.min.js')}}"></script>
            <!-- Page-Level Scripts -->
            <script>
                $(document).ready(function(){
                    $('.dataTables-example').DataTable({
                        dom: '<"html5buttons"B>lTfgitp',
                        buttons: [
                            { extend: 'copy'},
                            {extend: 'csv'},
                            {extend: 'excel', title: 'ExampleFile'},
                            {extend: 'pdf', title: 'ExampleFile'},

                            {extend: 'print',
                            customize: function (win){
                                    $(win.document.body).addClass('white-bg');
                                    $(win.document.body).css('font-size', '10px');

                                    $(win.document.body).find('table')
                                            .addClass('compact')
                                            .css('font-size', 'inherit');
                            }
                            }
                        ]

                    });

                    /* Init DataTables */
                    var oTable = $('#editable').DataTable();

                    /* Apply the jEditable handlers to the table */
                    oTable.$('td').editable( '../example_ajax.php', {
                        "callback": function( sValue, y ) {
                            var aPos = oTable.fnGetPosition( this );
                            oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                        },
                        "submitdata": function ( value, settings ) {
                            return {
                                "row_id": this.parentNode.getAttribute('id'),
                                "column": oTable.fnGetPosition( this )[2]
                            };
                        },

                        "width": "90%",
                        "height": "100%"
                    } );


                });

                function fnClickAddRow() {
                    $('#editable').dataTable().fnAddData( [
                        "Custom row",
                        "New row",
                        "New row",
                        "New row",
                        "New row" ] );

                }
            </script>
        </body>
    </html>
