<html>
    <head>
        <title>Online List Tracker - @yield('title')</title>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
          tailwind.config = {
              theme: {
                extend: {
                  colors: {
                    laravel: '#ef3b2d',
                  },
                },
              },
            }
        </script>
    </head>
    
    <body class="text-neutral-800">
            <h1 class="text-4xl text-center text-neutral-500 font-bold">
                <a href="/">Online List Tracker</a>
            </h1>
            <hr>
            @yield('content')
    </body>
</html>