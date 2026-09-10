<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Agronex Smart Bin') }} - Public Display</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-900 text-white flex items-center justify-center min-h-screen">
    
    <div class="max-w-4xl w-full px-4 text-center">
        <!-- Logo -->
        <div class="flex justify-center mb-12">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 bg-agronex-500 rounded-xl flex items-center justify-center shadow-lg shadow-agronex-500/50">
                    <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <h1 class="text-4xl font-extrabold tracking-tight">AGRONEX SMART BIN</h1>
            </div>
        </div>

        <!-- Status Card (Dummy Data for now) -->
        <div class="bg-gray-800 rounded-3xl p-12 border border-gray-700 shadow-2xl relative overflow-hidden">
            <!-- Background Glow -->
            <div class="absolute inset-0 bg-agronex-500/10 blur-3xl rounded-full transform -translate-y-1/2"></div>
            
            <div class="relative z-10">
                <h2 class="text-5xl font-black text-agronex-400 mb-6 tracking-wide uppercase">READY</h2>
                
                <div class="text-2xl text-gray-300 font-medium mb-12">
                    Please dispose your waste properly.
                </div>

                <div class="inline-block bg-gray-900 rounded-2xl px-12 py-8 border border-gray-700">
                    <p class="text-gray-400 text-lg font-semibold uppercase tracking-widest mb-2">Capacity</p>
                    <p class="text-7xl font-bold text-white">42<span class="text-4xl text-gray-500">%</span></p>
                </div>
            </div>
        </div>

        <div class="mt-12 text-gray-500 text-sm font-medium tracking-wider">
            LIVE MONITORING &bull; DEVICE: BIN-001
        </div>
    </div>

</body>
</html>
