
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('toastr/toastr.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/study.js') }}" type="text/javascript"></script>
    <link href="{{ asset('/css/study.css') }}" rel="stylesheet" />
    @stack('css')
</head>

<body style='overflow: unset;'>

    <div id="root">
      @yield('content')
    </div>

    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
			toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': true,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}
		});
    </script>
    <script>
        var clcked_modal_index = 0;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       </script>
    @stack('script')
    @stack('partialscripts')
</body>

</html>
