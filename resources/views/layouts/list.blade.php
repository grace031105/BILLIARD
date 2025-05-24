<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'My App')</title>
        <!-- Flowbite CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <header>
            @include('components.header')
        </header>

        <div class="container">
            <main>
                @yield('content')
            </main>
        </div>

        <footer>
            @include('components.footer')
        </footer>
    </body>
</html>
