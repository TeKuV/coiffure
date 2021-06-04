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
        </body>
    </html>
