<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @hasSection('meta_tag')
            @yield('meta_tag')
        @else
            <x-meta-tags />
        @endif

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Playfair+Display:wght@400;700;900&display=swap" rel="stylesheet">
        <style>
            :root {
                --color-brown: #4E3629;
                --color-cream: #F5E1A4;
                --color-black: #212121;
                --color-green: #4CAF50;
                --color-white: #FFFFFF;
                --color-orange: #FF5722;
            }

            body {
                font-family: 'Roboto', sans-serif;
                color: var(--color-black);
                background-color: #FAFAFA;
            }

            h1, h2, h3, h4 {
                font-family: 'Playfair Display', serif;
            }

            .color-swatch {
                width: 100px;
                height: 100px;
                border-radius: 8px;
                margin: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                text-align: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .bg-brown {
                background-color: var(--color-brown);
            }

            .bg-cream {
                background-color: var(--color-cream);
                color: var(--color-black);
            }

            .bg-black {
                background-color: var(--color-black);
            }

            .bg-green {
                background-color: var(--color-green);
            }

            .bg-white {
                background-color: var(--color-white);
                color: var(--color-black);
                border: 1px solid #e5e5e5;
            }

            .bg-orange {
                background-color: var(--color-orange);
            }

            .section-divider {
                height: 4px;
                background: linear-gradient(90deg, var(--color-brown), var(--color-green));
                margin: 2rem 0;
                border-radius: 2px;
            }

            .card {
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
            }

            .nav-link {
                position: relative;
            }

            .nav-link:after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                background: var(--color-green);
                left: 0;
                bottom: -2px;
                transition: width 0.3s ease;
            }

            .nav-link:hover:after {
                width: 100%;
            }

            .font-sample-roboto {
                font-family: 'Roboto', sans-serif;
            }

            .font-sample-playfair {
                font-family: 'Playfair Display', serif;
            }

            .sticky-nav {
                position: sticky;
                top: 0;
                z-index: 50;
                backdrop-filter: blur(10px);
                background-color: rgba(255, 255, 255, 0.8);
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance
    </head>
    <body>
        <header class="sticky-nav border-b border-gray-200">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-brown">
                        <span style="color: var(--color-brown);">RACIK</span>
                    </div>
                    <span class="ml-2 text-sm text-gray-600">Brand Guidelines</span>
                </div>
                <nav class="hidden md:flex">
                    <ul class="flex space-x-6">
                        <li><a href="#overview" class="nav-link text-gray-700 hover:text-gray-900">Overview</a></li>
                        <li><a href="#logo" class="nav-link text-gray-700 hover:text-gray-900">Logo</a></li>
                        <li><a href="#colors" class="nav-link text-gray-700 hover:text-gray-900">Colors</a></li>
                        <li><a href="#typography" class="nav-link text-gray-700 hover:text-gray-900">Typography</a></li>
                        <li><a href="#visual" class="nav-link text-gray-700 hover:text-gray-900">Visual Elements</a></li>
                        <li><a href="#voice" class="nav-link text-gray-700 hover:text-gray-900">Tone of Voice</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            {{ $slot }}
        </main>

        <footer class="bg-gray-100 py-8">
            <div class="container mx-auto px-4 text-center">
                <div class="text-2xl font-bold mb-4" style="color: var(--color-brown);">RACIK</div>
                <p class="text-gray-600 mb-4">Rangkaian Aplikasi Cerdas untuk Industri Kopi</p>
                <p class="text-gray-500 text-sm">© 2025 RACIK. All rights reserved.</p>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
