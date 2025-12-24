<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('gray');
                    }
                }
            })();
        </script>

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
        <style>
            html {
                background-color: oklch(1 0 0);
            }

            html.dark {
                background-color: oklch(0.145 0 0);
            }
        </style>

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

      
    </head>
    <body class="font-sans antialiased">
        <div class="container">
                    <h1>feedback Application</h1>

            <a href="{{ route('mylogin') }}">Login</a>
         <a href="{{ route('showRegisterFrom') }}">Register here</a>
        </div>
       

        @inertia
    </body>
    <style>
        body {
    font-family: "Instrument Sans", sans-serif;
    margin: 0;
    padding: 0;
    background: #f3f4f6; /* light background */
    color: #222;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 80vh;
}

html.dark body {
    background: #121212; /* dark mode background */
    color: #f5f5f5;
}

h1 {
    font-size: 42px;
    font-weight: 600;
    margin-bottom: 25px;
    
}

a {
    display: inline-block;
    margin: 10px;
    padding: 12px 20px;
    background: #2563eb;
    color: white;
    text-decoration: none;
    font-size: 18px;
    border-radius: 8px;
    transition: 0.3s ease;
}

a:hover {
    background: #1d4ed8;
    transform: translateY(-2px);
}

/* DARK MODE LINK COLORS */
html.dark a {
    background: #3b82f6;
}

html.dark a:hover {
    background: #2563eb;
}

/* Page container */
.container {
    text-align: center;
}

/* Responsive text */
@media (max-width: 600px) {
    h1 {
        font-size: 32px;
    }

    a {
        font-size: 16px;
        padding: 10px 16px;
    }
}

    </style>
</html>
