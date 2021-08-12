

<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <title>Landing Page</title>
</head>
    <body>

        <header>
            @include('layouts.header')
        </header>

        <!-- Content -->
        @yield('content')

        {{-- Footer --}}
                @include('layouts.footer')


    </body>
 </html>
