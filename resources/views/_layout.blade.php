<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="/stock/css/app.css" rel="stylesheet">
    @toastr_css
    @yield('css')
</head>

<body id="page-top">

    <div id="wrapper">

        @include('master._side-bar')

        <div id="content-wrapper">

            <div class="container-fluid">
                <div class="animated fadeIn">
                    @yield('content')
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            @include('master._footer')

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('cancel')</button>
                    <a class="btn btn-primary" href="login.html">@lang('logout')</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script src="/stock/js/app.js"></script>
    @yield('js')
</body>
    @toastr_js
    @toastr_render
</html>