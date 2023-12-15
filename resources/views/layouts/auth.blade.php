<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login - Content Management</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="{{ asset('jeremia-assets/brand/logo-small.png') }}" />
        <link href="{{ asset('jeremia-assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('jeremia-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        @yield('styles')
    </head>
    <body id="kt_body" class="app-blank">
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            @yield('content')
        </div>
        <script src="{{ asset('jeremia-assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('jeremia-assets/js/scripts.bundle.js') }}"></script>
        @yield('scripts')
    </body>
</html>
