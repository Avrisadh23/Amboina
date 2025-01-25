<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amboina JP - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar - Sekarang di paling atas -->
    <nav class="bg-white shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-auto" src="ajp.png">
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="{{ route('home') }}" class="text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                            HOME
                        </a>
                        <a href="{{ route('about') }}" class="text-gray-500 hover:text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                            ABOUT US
                        </a>
                        <a href="{{ route('services') }}" class="text-gray-500 hover:text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">
                            SERVICES
                        </a>
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('contact') }}" class="bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                        Let's Talk
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content - Dengan padding top untuk navbar -->
    <main class="pt-16"> <!-- Tambahkan padding top sebesar tinggi navbar -->
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-purple-100 to-purple-200">
            <div class="max-w-7xl mx-auto px-4 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-sm text-purple-600 font-semibold">HIGHLY PROFESSIONAL BILLING</h2>
                        <h1 class="text-4xl font-bold mt-2 text-purple-800">Flexible and Reliable</h1>
                        <h1 class="text-3xl font-bold text-gray-700">Financing Solutions For Your Needs</h1>
                        <p class="mt-4 text-gray-600">
                            Established in 2015, PT. Amboina Jasa Prima has been a trusted partner in providing vehicle and property financing solutions tailored to your goals
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/scales.png') }}" alt="Justice Scales" class="h-64">
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 py-8">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="grid grid-cols-3 gap-4 text-white text-center">
                        <div>
                            <h3 class="text-3xl font-bold">300+</h3>
                            <p>Happy Customers</p>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold">20</h3>
                            <p>Award Winning</p>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold">555+</h3>
                            <p>Projects Complete</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </main>
</body>
</html>