<!DOCTYPE html>
<!-- we work for human beings, currently-->
<!-- we are looking for designers, scientists and artists-->
<html>
<head lang="en">
    <title>A-Z.press</title>
    <!-- Main Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" media="screen">
    @yield('css')

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @if(env('APP_ENV') == 'production')
        <script type='text/javascript'>
            var _vds = _vds || [];
            window._vds = _vds;
            (function(){
                _vds.push(['setAccountId', '92645af211d82034']);
                (function() {
                    var vds = document.createElement('script');
                    vds.type='text/javascript';
                    vds.async = true;
                    vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(vds, s);
                })();
            })();
        </script>
    @endif
</head>
<body>
    {{--<div class="header raw_lr">--}}
        {{--<a href="{{ url('/') }}" class="home left">--}}
            {{--<img src="{{ asset('img/logo.svg') }}" alt="TGIF" class="logo">--}}
            {{--@yield('left_top_button')--}}
        {{--</a>--}}
    {{--</div>--}}

    @section('content')

    @show

    @if($errors->count() > 0)
        <script src="//cdn.bootcss.com/jquery/3.1.0/jquery.js"></script>

        <script>
            $(function() {
                alert('{{ $errors->first() }}');
            });
        </script>
    @endif

    @yield('custom_script')
</body>
</html>