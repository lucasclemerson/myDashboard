<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyDashboard - {{ $title }}</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900" rel="stylesheet">
    </head>
    <body class="bg-blue-500 grid justify-items-center">
        @include('home.header')
        @include('home.content')
        @yield($content)
        @include('home.tools')
        @include('home.contact')
        @include('home.footer')
  
        <script>
            function scrollToId(id) {
              const element = document.getElementById(id);
              if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
              }
            }

            const carousel = document.getElementById('carousel');
            const next = document.getElementById('nextBtn');
            let haveOne = false;

            function scrollNext() {
                carousel.scrollBy({
                    left: carousel.offsetWidth,
                    behavior: 'smooth'
                });
            }

            next.addEventListener('click', scrollNext);
            setInterval(scrollNext, 5000);
        </script>
    </body>
</html>
